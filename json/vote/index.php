<?
require($_SERVER["DOCUMENT_ROOT"]
    . "/bitrix/modules/main/include/prolog_before.php");
?>


<?php

header('Content-Type', 'application/json');

if (!CModule::IncludeModule('iblock')) {
    die('iblock module not installed');
}

$elementId = $_REQUEST['ti'];
$rating = $_REQUEST['v'];

$up = CIBlockElement::GetProperty(IBLOCK_ID_HABR, $elementId, "sort", "asc", Array("CODE" => 'U_RATING_UP'))
          ->Fetch()['VALUE'];
$down = CIBlockElement::GetProperty(IBLOCK_ID_HABR, $elementId, "sort", "asc", Array("CODE" => 'U_RATING_DOWN'))
            ->Fetch()['VALUE'];

switch ($rating) {
    case 1:
        $up++;
        CIBlockElement::SetPropertyValues($elementId, IBLOCK_ID_HABR, $up, 'U_RATING_UP');
        break;
    case -1:
        $down++;
        CIBlockElement::SetPropertyValues($elementId, IBLOCK_ID_HABR, $down, 'U_RATING_DOWN');
        break;
    default:
        die('action does not supported');
}
$summ = $up - $down;

CIBlockElement::SetPropertyValues($elementId, IBLOCK_ID_HABR, $summ, 'U_RATING_SUMM');

echo json_encode(
    [
        'messages'          => 'ok',
        'score'             => $summ,
        'sign'              => '+',
        'votes_count'       => $up + $down,
        'votes_count_plus'  => $up,
        'votes_count_minus' => $down,
    ]
);

?>

<? require($_SERVER["DOCUMENT_ROOT"]
    . "/bitrix/modules/main/include/epilog_after.php"); ?>?>

