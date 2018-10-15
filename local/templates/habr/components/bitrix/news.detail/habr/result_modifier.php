<?php


//var_dump($arResult);

foreach ($arResult as $key => $value) {
//    echo "$key $value<br><br>";
}


// Формируем данные автора
$cDBResult = CUser::GetList(
    $by = 'timestamp_x',
    $order = [],
    ['ID' => $arResult['CREATED_BY']]
);

$author = $cDBResult->GetNext();
$author = [
    'ID'             => $author['ID'],
    'PERSONAL_PHOTO' => $author['PERSONAL_PHOTO'],
    'LOGIN'          => $author['LOGIN'],
];
$arResult['AUTHOR'] = $author;

// Формируем данные разделов\хабов
$cIBlockResult = CIBlockElement::GetElementGroups(
    $arResult['ID'],
    true,
    ['ID', 'NAME']
);

while ($section = $cIBlockResult->GetNext()) {
    $arResult['SECTIONS'][] = $section;
}

