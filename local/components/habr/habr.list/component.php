<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arResult = [];
$arResult['ITEMS'] = [];

$arOrder = ['DATE_CREATE_UNIX' => 'ASC',];
$arFilter = ['IBLOCK_CODE' => 'IBLOCK_CODE_HABR'];

if (isset($_GET['HABR_FILTER_RATING'])) {

    $arFilter['>=PROPERTY_U_RATING_SUMM'] = (int)$_GET['HABR_FILTER_RATING'];
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

$CIblockResult = CIBlockElement::GetList(
    $arOrder,
    $arFilter,
    $arGroupBy = false,
    $arNavStartParams = ['nPageSize' => 2, 'bShowAll' => false],
    $arSelectFields
);

$CIblockResult->nPageWindow = 9; // 9 страниц в пейджере

if ($CIblockResult->SelectedRowsCount() < 1) {
    $componentTamplate = 'empty-list';
} else {
    $componentTamplate = '';

    $userIds = [];
    $elementIds = [];

    while ($item = $CIblockResult->getNext()) {
        $userIds[$item['CREATED_BY']] = $item['CREATED_BY'];
        $elementIds[$item['ID']] = $item['ID'];

        $arResult['ITEMS'][$item['ID']] = $item;
        $arResult['ITEMS'][$item['ID']]['SECTIONS'] = [];
    }

// Формируем данные разделов\хабов
    $cIBlockResult = CIBlockElement::GetElementGroups(
        $elementIds,
        true,
        ['ID', 'NAME', 'IBLOCK_ELEMENT_ID']
    );

    while ($section = $cIBlockResult->GetNext()) {
        $arResult['ITEMS'][$section['IBLOCK_ELEMENT_ID']]['SECTIONS'][] = $section;
    }

// Формируем данные авторов
    //@todo
    $cDBResult = CUser::GetList(
        $by = 'timestamp_x',
        $order = [],
        ['ID' => $userIds]
    );
    $authors = [];
    while ($author = $cDBResult->GetNext()) {
        $authors[$author['ID']] = [
            'ID'             => $author['ID'],
            'PERSONAL_PHOTO' => $author['PERSONAL_PHOTO'],
            'LOGIN'          => $author['LOGIN'],
        ];
    }
    $arResult['AUTHORS'] = $authors;

// Рейтинг
    foreach ($arResult['ITEMS'] as $id => $item) {
        $arResult['ITEMS'][$id]['RATING_SUMMARY']
            = $item['PROPERTY_U_RATING_UP_VALUE']
            - $item['PROPERTY_U_RATING_DOWN_VALUE'];
    }

// Пагинация
    $arResult["NAV_STRING"] = $CIblockResult->GetPageNavString(
        '',
        "habr",
        false,
        $this
    );
}

$this->IncludeComponentTemplate($componentTamplate);