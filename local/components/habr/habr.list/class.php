<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class CHabrListDemo extends CBitrixComponent
{

    /**
     * Не будем обрабатывать arParams в родители
     *
     * @param $arParams
     *
     * @return array
     */
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    /**
     * @return mixed|void
     */
    public function executeComponent()
    {

        if ($this->startResultCache(false, $_GET)) {

            sleep(2);   // эмуляция долгих не кэшированных данных
            $items = $this->loadItems();

            $authors = $this->loadAuthors(array_column($items, 'CREATED_BY'));

            $sections = $this->loadSections(array_column($items, 'ID'));

            $this->arResult['ITEMS'] = $items;
            $this->arResult['AUTHORS'] = $authors;
            $this->arResult['SECTIONS'] = $sections;

            $this->EndResultCache();
        }

        $this->includeComponentTemplate();
    }

    /**
     * Загрузка элементов списка
     *
     * @return array
     */
    private function loadItems()
    {
        $items = [];
        $arOrder = ['DATE_CREATE_UNIX' => 'ASC',];
        $arFilter = ['IBLOCK_CODE' => 'IBLOCK_CODE_HABR'];

        if (isset($_GET['FILTER_TOP'])) {

            $arFilter['>=PROPERTY_U_RATING_SUMM'] = (int)$_GET['FILTER_TOP'];
        }

        $arSelectFields = [
            'ID',
            'IBLOCK_ID',
            'NAME',
            'PREVIEW_TEXT',
            'CREATED_BY',
            'DATE_CREATE_UNIX',
            'PROPERTY_U_TAGS',
            'PROPERTY_U_RATING_UP',
            'PROPERTY_U_RATING_DOWN',
            'PROPERTY_U_RATING_SUMM',
        ];

        $result = CIBlockElement::GetList(
            $arOrder,
            $arFilter,
            $arGroupBy = false,
            $arNavStartParams = ['nPageSize' => 2, 'bShowAll' => false],
            $arSelectFields
        );

        $result->nPageWindow = 9; // 9 ссылок на страницу в пейджере, по умолчанию 5, в Хабр=9

        while ($item = $result->getNext()) {
            $items[$item['ID']] = $item;
        }

        $this->arResult["NAV_STRING"] = $this->getNavString($result);

        return $items;
    }

    /**
     * Загрузка авторов(пользователей)
     *
     * @param $authorIds
     *
     * @return array
     */
    private function loadAuthors($authorIds)
    {
        $authors = [];

        if (count($authorIds) == 0) {
            return $authors;
        }

        $result = CUser::GetList(
            $by = 'timestamp_x',
            $order = 'desc',
            ['ID' => join($authorIds, '|')],
            ['FIELDS' => ['ID', 'LOGIN', 'PERSONAL_PHOTO']]
        );

        while ($author = $result->GetNext()) {
            $authors[$author['ID']] = $author;
        }

        return $authors;
    }

    /**
     * Загрузка разделов статьей списка
     *
     * @param $itemIds
     *
     * @return array
     */
    private function loadSections($itemIds)
    {
        $sections = [];
        if (count($itemIds) == 0) {
            return $sections;
        }

        $result = CIBlockElement::GetElementGroups(
            $itemIds,
            true,
            ['ID', 'NAME', 'IBLOCK_ELEMENT_ID']
        );

        while ($section = $result->GetNext()) {
            $sections[$section['IBLOCK_ELEMENT_ID']][] = $section;
        }

        return $sections;
    }

    private function getNavString($result)
    {
        return $result->GetPageNavString(
            '',
            "habr",
            false,
            $this
        );
    }
}