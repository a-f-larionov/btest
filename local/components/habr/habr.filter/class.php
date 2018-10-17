<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class CHabrFilterDemo extends CBitrixComponent
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

        /**
         * URL страницы текущей
         */
        $this->arResult["sUrlPath"] = GetPagePath(false, false);

        $this->includeComponentTemplate();
    }
}