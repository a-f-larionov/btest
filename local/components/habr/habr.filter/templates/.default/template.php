<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php
// удаляем top из url
$arResult['sUrlPath'] = preg_replace("/top[0-9]+\//","", $arResult['sUrlPath'] );
?>

<div class="tabs__level tabs__level_bottom">
    <ul class="toggle-menu ">
        <li class="toggle-menu__item">
            <a href="<?= $arResult['sUrlPath'] ?>"
               class="toggle-menu__item-link <?= !isset($_GET['FILTER_TOP']) ? 'toggle-menu__item-link_active'
                   : '' ?>"
               rel="nofollow"
               title="Все публикации в хронологическом порядке">
                Без порога
            </a>
        </li>
        <? foreach ($arResult['filters'] as $filter) { ?>
            <li class="toggle-menu__item">
                <a href="<?= $arResult['sUrlPath'] ?>top<?= $filter ?>/"
                   class="toggle-menu__item-link <?= $filter == $_GET['FILTER_TOP']
                       ? 'toggle-menu__item-link_active' : '' ?>"
                   rel="nofollow" title="Все публикации с рейтингом <?= $filter ?> и выше">
                    ≥<?= $filter ?>

                </a>
            </li>
        <? } ?>
    </ul>
</div>