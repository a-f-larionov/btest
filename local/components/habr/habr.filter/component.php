<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arResult["sUrlPath"] = GetPagePath(false, false);

$this->IncludeComponentTemplate('');