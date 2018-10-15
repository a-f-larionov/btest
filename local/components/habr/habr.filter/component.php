<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!CModule::IncludeModule('iblock')) {
    ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
    die;
}

$arResult["sUrlPath"] = GetPagePath(false, false);


$this->IncludeComponentTemplate('');