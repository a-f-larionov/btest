<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php
$filters = [
    10,
    25,
    50,
    100
];
?>

<div class="tabs__level tabs__level_bottom">
    <ul class="toggle-menu ">
        <li class="toggle-menu__item">
            <a href="<?= $arResult['sUrlPath'] ?>"
               class="toggle-menu__item-link <?= !isset($_GET['HABR_FILTER_RATING']) ? 'toggle-menu__item-link_active'
                   : '' ?>"
               rel="nofollow"
               title="Все публикации в хронологическом порядке">
                Без порога
            </a>
        </li>
        <? foreach ($filters as $filter) { ?>
            <li class="toggle-menu__item">
                <a href="<?= $arResult['sUrlPath'] ?>?HABR_FILTER_RATING=<?= $filter ?>"
                   class="toggle-menu__item-link <?= $filter == $_GET['HABR_FILTER_RATING']
                       ? 'toggle-menu__item-link_active' : '' ?>"
                   rel="nofollow" title="Все публикации с рейтингом <?= $filter ?> и выше">
                    ≥<?= $filter ?>

                </a>
            </li>
        <? } ?>
    </ul>
</div>