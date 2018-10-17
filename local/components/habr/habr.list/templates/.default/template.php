<div class="posts_list">

    <ul class="content-list shortcuts_items">


        <? if (count($arResult['ITEMS']) == 0) { ?>
            <i>Ничего не найдено</i>
        <? } ?>

        <? foreach ($arResult['ITEMS'] as $arItem) { ?>

            <li class="content-list__item content-list__item_post shortcuts_item" id="post_<?= $arItem['ID'] ?>">

                <article class="post post_preview">


                    <? $APPLICATION->IncludeFile('author-info-block.php',
                        [
                            'AUTHOR' => $arResult['AUTHORS'][$arItem['CREATED_BY']],
                            'ITEM'   => $arItem
                        ]
                    ) ?>


                    <h2 class="post__title">
                        <a href="/post/<?= $arItem['ID'] ?>" class="post__title_link">
                            <?= $arItem['NAME'] ?>
                        </a>
                    </h2>

                    <ul class="post__hubs inline-list">

                        <? foreach ($arResult['SECTIONS'][$arItem['ID']] as $arSection) { ?>
                            <li class="inline-list__item inline-list__item_hub">
                                <a href="https://habr.com/hub/<?= $arSection['NAME'] ?>/"
                                   class="inline-list__item-link hub-link " rel="nofollow"
                                   title="Вы не подписаны на этот хаб"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">
                                    <?= $arSection['NAME'] ?>
                                </a>
                            </li>
                        <? } ?>
                    </ul>

                    <!--SANDBOX?-->
                    <!--
                    <ul class="post__marks inline-list"><li class="inline-list__item inline-list__item_post-type"><a href="/sandbox/" class="post__type-label" title="Перейти в песочницу">Из песочницы</a></li></ul>
    -->

                    <div class="post__body post__body_crop ">

                        <div class="post__text post__text-html js-mediator-article">
                            <?= $arItem['PREVIEW_TEXT']; ?>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                           href="/post/<?= $arItem['ID'] ?>">Читать дальше &rarr;</a>
                    </div>


                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" id="infopanel_post_425763">
                            <li class="post-stats__item post-stats__item_voting-wjt">
                                <div class="voting-wjt voting-wjt_post js-post-vote" data-id="<?= $arItem['ID'] ?>"
                                     data-type="2">
                                    <button type="button" class="btn voting-wjt__button " data-action="plus"
                                            onclick="posts_vote(this);"
                                            title="Голосовать могут только пользователи с полноправным аккаунтом">
                                        <svg class="icon-svg_arrow-up" width="10" height="16">
                                            <use xlink:href="/images/common-svg-sprite.svg#vote-arrow"></use>
                                        </svg>
                                    </button>

                                    <span class="voting-wjt__counter voting-wjt__counter_positive  js-score"
                                          title="Общий рейтинг <?= $arItem['PROPERTY_U_RATING_SUMM_VALUE'] ?>: <?=$arItem['PROPERTY_U_RATING_UP_VALUE']?>&uarr; и &darr;<?= $arItem['PROPERTY_U_RATING_DOWN_VALUE'] ?>">
                                    <? if ($arItem['PROPERTY_U_RATING_SUMM_VALUE'] > 0) { ?>
                                        +
                                    <? } ?>
                                        <? if ($arItem['PROPERTY_U_RATING_SUMM_VALUE'] < 0) { ?>

                                        <? } ?>
                                        <?= $arItem['PROPERTY_U_RATING_SUMM_VALUE'] ?>
                                </span>

                                    <button type="button" class="btn voting-wjt__button " data-action="minus"
                                            onclick="posts_vote(this);" title="Срок голосования истек.  ">
                                        <svg class="icon-svg_arrow-down" width="10" height="16">
                                            <use xlink:href="/images/common-svg-sprite.svg#vote-arrow"/>
                                        </svg>
                                    </button>
                                </div>
                            </li>

                            <!-- @todo Дбавить в закладки -->
                            <!--
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post " data-type="2" data-id="425763" data-action="add" title="Добавить в закладки" onclick="posts_add_to_favorite(this);" >
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16"><use xlink:href="/images/common-svg-sprite.svg#book" /></svg><span class="bookmark__counter js-favs_count" title="Количество пользователей, добавивших публикацию в закладки">73</span></span>
                                </button>
                            </li>
                            -->

                            <!-- @todo Просмотры -->
                            <!--
                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Просмотры публикации">
                                    <svg class="icon-svg_views-count" width="21" height="12"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-stats__views-count">3,8k</span>
                                </div>
                            </li>
                            -->

                            <!-- @todo Комментарий-количество -->
                            <!--
                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/post/425763/#comments" class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-stats__comments-count" title="Читать комментарии">10</span>
                                </a>
                            </li>
                            -->


                        </ul>

                    </footer>
                </article>


            </li>


        <? } ?>

    </ul>

    <? if (count($arResult['ITEMS']) > 0) { ?>
        <?= $arResult['NAV_STRING'] ?>
    <? } ?>

</div>