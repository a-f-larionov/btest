<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="content_left js-content_left">

    <article class="post post_full" id="post_{<?=$arResult['ID']?>}">

        <div class="post__wrapper">


            <? $APPLICATION->IncludeFile('author-info-block.php',
                [
                    'AUTHOR' => $arResult['AUTHOR'],
                    'ITEM'   => $arResult
                ]
            ) ?>


            <h1 class="post__title post__title_full">
                <span class="post__title-text">
                    <?=$arResult['NAME']?>
                </span>
            </h1>


            <ul class="post__hubs post__hubs_full-post inline-list">

                <? foreach ($arResult['SECTIONS'] as $SECTION){ ?>

                <li class="inline-list__item inline-list__item_hub">
                    <a href="http://habr.com/hub/programming/" class="inline-list__item-link hub-link " title="Вы не подписаны на этот хаб" onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'post page', 'Программирование'); }">
                        <?=$SECTION['NAME']?>
                    </a>
                </li>

                <? } ?>

            </ul>

            <!--
            <ul class="post__marks inline-list"><li class="inline-list__item inline-list__item_post-type"><a href="/sandbox/" class="post__type-label" title="Перейти в песочницу">Из песочницы</a></li></ul>
-->

            <div class="post__body post__body_full">
                <div class="post__text post__text-html js-mediator-article">

                    <?= $arResult['DETAIL_TEXT'] ?>

                <script class="js-mediator-script">!function(e){function t(t,n){if(!(n in e)){for(var r,a=e.document,i=a.scripts,o=i.length;o--;)if(-1!==i[o].src.indexOf(t)){r=i[o];break}if(!r){r=a.createElement("script"),r.type="text/javascript",r.async=!0,r.defer=!0,r.src=t,r.charset="UTF-8";var d=function(){var e=a.getElementsByTagName("script")[0];e.parentNode.insertBefore(r,e)};"[object Opera]"==e.opera?a.addEventListener?a.addEventListener("DOMContentLoaded",d,!1):e.attachEvent("onload",d):d()}}}t("//mediator.mail.ru/script/2820404/","_mediator")}(window);</script>
            </div>



            <dl class="post__tags">
                <dt class="post__tags-label">Метки:</dt>
                <dd class="post__tags-list">    <ul class="inline-list inline-list_fav-tags js-post-tags">

                        <? foreach($arResult['PROPERTY_U_TAGS_VALUE'] as $tagName) { ?>

                        <li class="inline-list__item inline-list__item_tag"><a
                                href="https://habr.com/search/?q=%5B%D1%88%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD%D0%B8%D0%B7%D0%B0%D1%82%D0%BE%D1%80%5D&amp;target_type=posts"
                                rel="tag"
                                class="inline-list__item-link post__tag  "><?=$tagName?></a>
                        </li>

                        <? } ?>
                    </ul>
                    <button type="button" class="btn btn_outline_grey btn_mini hidden js-fav-edit-link" data-type="2" data-id="425763" onclick="show_edit_tags(this)">Добавить метки</button>
                </dd>
            </dl>
        </div>
    </article>


    <form action="/json/favorites/" method="post" class="form form_bordered form_favorites-tags hidden" id="edit_tags_form">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="ti" value="0">
        <input type="hidden" name="tt" value="0">

        <button type="button" class="btn form__close-btn" onclick="closeForm(this)" title="Закрыть"><svg class="icon-svg icon-svg_navbar-close-search" width="31" height="32" viewBox="0 0 31 32" aria-hidden="true" version="1.1" role="img"><path d="M26.67 0L15.217 11.448 3.77 0 0 3.77l11.447 11.45L0 26.666l3.77 3.77L15.218 18.99l11.45 11.448 3.772-3.77-11.448-11.45L30.44 3.772z"></path></svg>
        </button>

        <fieldset class="form__fieldset">
            <legend class="form__legend">Пометьте публикацию своими метками</legend>
            <input type="text" name="tags_string" class="form__text-field" autocomplete="off">
            <span class="form__desc">Метки необходимо разделять запятой. Например: <i>php, javascript, адронный коллайдер, задача трех тел</i></span>
        </fieldset>

        <div class="form__footer">
            <button type="submit" class="btn btn_x-large btn_outline_blue" disabled="">Сохранить</button>
        </div>
    </form>

</div>
