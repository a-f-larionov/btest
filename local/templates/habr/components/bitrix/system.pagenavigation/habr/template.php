<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php
$strNavQueryString = ($arResult["NavQueryString"] != ""
    ? $arResult["NavQueryString"] . "&amp;" : "");
?>

<div class="page__footer">
    <ul class="arrows-pagination">

        <li class="arrows-pagination__item">
            <? if ($arResult['NavPageNomer'] != $arResult['nStartPage']) { ?>
                <a class="arrows-pagination__item-link arrows-pagination__item-link_prev"
                   id="previous_page"
                   href="<?= $arResult['sUrlPath'] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult['NavNum'] ?>=<?= $arResult['NavPageNomer']
                   - 1 ?>"
                   rel="">&larr; <span>сюда</span></a>
            <? } else { ?>
                <span class="arrows-pagination__item-link">&larr;&nbsp;сюда</span>
            <? } ?>
        </li>


        <li class="arrows-pagination__item">
            <? if ($arResult['NavPageNomer'] != $arResult['nEndPage']) { ?>
                <a class="arrows-pagination__item-link arrows-pagination__item-link_next"
                   id="next_page"
                   href="<?= $arResult['sUrlPath'] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult['NavNum'] ?>=<?= $arResult['NavPageNomer']
                   + 1 ?>"
                   rel=""><span>туда</span>&nbsp;&rarr;</a>
            <? } else { ?>
                <span class="arrows-pagination__item-link">туда &rarr;</span>
            <? } ?>
        </li>


    </ul>

    <ul class="toggle-menu toggle-menu_pagination" id="nav-pagess">

        <? if ($arResult['NavPageNomer'] > 5) { ?>

            <li class="toggle-menu__item toggle-menu__item_pagination">

                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"
                   class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_bordered"
                   title="Первая страница" rel="">
                    <span class="icon-svg icon-svg_arrow-first"><svg
                                class="icon-svg" width="28" height="24"
                                viewBox="0 0 28 24"><path
                                    d="M8.452 5.455l2.93 3.192c.89.969 1.335 1.361 2.225 1.909h-13.608v2.773h13.634c-.838.5-1.492 1.102-2.252 1.913l-2.93 3.192 2.276 1.964 7.588-8.452-7.588-8.452-2.276 1.961zM24.297 0h3.087v23.891h-3.087v-23.891z"></path></svg></span>
                </a>

            </li>

        <? } ?>

        <? for (
            $pageI = $arResult['nStartPage'];
            $pageI <= $arResult['nEndPage'];
            $pageI++
        ) { ?>

            <li class="toggle-menu__item toggle-menu__item_pagination">

                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $pageI ?>"
                   class="toggle-menu__item-link toggle-menu__item-link_pagination
                   <?= ($pageI == $arResult['NavPageNomer'])
                       ? 'toggle-menu__item-link_active' : '-' ?>
                   ">
                    <?= $pageI ?>
                </a>

            </li>

        <? } ?>


        <? if ($arResult['NavPageNomer'] + 5 <= $arResult['NavPageCount']) { ?>
            <li class="toggle-menu__item toggle-menu__item_pagination">

                <a title="Последняя страница"
                   class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_bordered"
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult['NavPageCount'] ?>"
                   rel="">
              <span class="icon-svg icon-svg_arrow-last"><svg class="icon-svg"
                                                              width="28"
                                                              height="24"
                                                              viewBox="0 0 28 24"><path
                              d="M8.452 5.455l2.93 3.192c.89.969 1.335 1.361 2.225 1.909h-13.608v2.773h13.634c-.838.5-1.492 1.102-2.252 1.913l-2.93 3.192 2.276 1.964 7.588-8.452-7.588-8.452-2.276 1.961zM24.297 0h3.087v23.891h-3.087v-23.891z"/></svg>
</span>
                </a>

            </li>
        <? } ?>
    </ul>
</div>