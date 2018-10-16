<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php'); ?>

    <!--HELP::HUB_TITLE-->
    <div class="page-header page-header_full" id="hub_260">
        <div class="page-header_wrapper">
            <div class="media-obj media-obj_page-header">
                <a href="/hub/php/" class="media-obj__image">
                    <img src="//habrastorage.org/getpro/habr/hub/98a/7a8/831/98a7a88319d5644cdc627b5e04b47d0f.png" width="48" height="48" class="media-obj__image-pic"/>
                </a>

                <div class="media-obj__body media-obj__body_page-header media-obj__body_page-header_hub">
                    <div class="page-header__stats">
                        <div class="page-header__stats-value">28,53</div>
                        <div class="page-header__stats-label">Рейтинг</div>
                    </div>
                </div>
            </div>

            <div class="page-header__buttons">

                <button type="button" class="page-header__button btn btn_large btn_subscribe js-hub-follow-btn" data-id="260" data-state="follow">
                    <span class="btn__value js-btn-value">Подписаться</span>
                    <span class="btn__value-hidden">Отписаться</span>
                </button>
            </div>
        </div>

        <div class="page-header__info">
            <h1 class="page-header__info-title">PHP</h1>
            <span class="n-profiled_hub" title="Профильный хаб"></span>
            <h2 class="page-header__info-desc">
                Скриптовый язык общего назначения
            </h2>
        </div>
    </div>

    <!--HELP::LIST AND ADVERTISE-->
    <div class="column-wrapper column-wrapper_tabs js-sticky-wrapper">

        <div class="content_left js-content_left">
            <div class="tabs">
                <div class="tabs__level tabs-level_top tabs-menu">
                    <a href="https://habr.com/hub/php/" class="tabs-menu__item tabs-menu__item_link" rel="nofollow"  >
                        <h3 class="tabs-menu__item-text tabs-menu__item-text_active">
                            Все подряд


                        </h3>
                    </a>
                    <a href="https://habr.com/hub/php/top/" class="tabs-menu__item tabs-menu__item_link" rel="nofollow"  >
                        <h3 class="tabs-menu__item-text ">
                            Лучшие


                        </h3>
                    </a>
                    <a href="https://habr.com/hub/php/authors/" class="tabs-menu__item tabs-menu__item_link" rel="nofollow"  >
                        <h3 class="tabs-menu__item-text ">
                            Авторы


                        </h3>
                    </a>
                </div>

                <?php
                $APPLICATION->IncludeComponent(
                    'habr:habr.filter',
                    ''
                );
                ?>


            </div>

            <?
            $APPLICATION->IncludeComponent(
                "habr:habr.list",
                "",
                []
            );
            ?>


        </div>

        <div class="sidebar_right js-sidebar_right sidebar_content-area">
            <!-- /235032688/HH/HH01_ATF_Poster -->
            <div class="dfp-slot dfp-slot_top is_visible">
                <div class="dfp-slot__banner" id="div-gpt-hh-atf">
                    <script>
                        window.display_dfp_slot('div-gpt-hh-atf');
                    </script>
                </div>
                <div class="dfp-slot__placeholder">
                    <span class="dfp-slot__placeholder-text">Тест Android vs iOS: извечное противостояние<br/><br/><a href="https://u.tmtm.ru/iosvsandroid" class="btn btn_large btn_blue" target="_blank">Пройти</a></span>
                </div>
                <a href="https://tmtm.ru/services/advertising/" target="_blank" class="dfp-slot__label">Реклама</a>

            </div>


            <div class="default-block default-block_sidebar">
                <div class="default-block__header">
                    <h3 class="default-block__header-title">Вклад авторов</h3>
                </div>
                <div class="default-block__content">
                    <ul class="content-list сontent-list_top-users">
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/pronskiy/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/4ff/b7e/1e6/4ffb7e1e672b59a5d54622150d6d1039.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-1">
                                        <span class="rating-info__title">pronskiy</span>
                                        <span class="rating-info__stat">5823,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:100%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/AloneCoder/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/741/45e/bea/74145ebeab7f222cce402aed2683f9d7.png" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-2">
                                        <span class="rating-info__title">AloneCoder</span>
                                        <span class="rating-info__stat">1662,6</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:29%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/SamDark/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/2df/fce/7ee/2dffce7ee42c7b79cce513e382cec05c.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-3">
                                        <span class="rating-info__title">SamDark</span>
                                        <span class="rating-info__stat">723,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:12%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/AntonShevchuk/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/fe2/421/237/fe2421237f78146f904b2c4659e9c447.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-4">
                                        <span class="rating-info__title">AntonShevchuk</span>
                                        <span class="rating-info__stat">718,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:12%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/youROCK/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/371/51f/213/37151f213dce4543faf649cbb6522063.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-5">
                                        <span class="rating-info__title">youROCK</span>
                                        <span class="rating-info__stat">616,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:11%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/zapimir/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                    <span class="default-image default-image_small default-image_green">
                      <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" version="1.1" role="img"><path d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z"/></svg>
                    </span>
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-6">
                                        <span class="rating-info__title">zapimir</span>
                                        <span class="rating-info__stat">559,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:10%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/alexzfort/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/d2a/e8a/5ac/d2ae8a5ac9876f838ebdd45f3ea3bc3b.png" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-7">
                                        <span class="rating-info__title">alexzfort</span>
                                        <span class="rating-info__stat">558,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:10%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/gnomeby/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/f38/995/2ce/f389952ce5920bdf77a34835500f142d.png" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-8">
                                        <span class="rating-info__title">gnomeby</span>
                                        <span class="rating-info__stat">467,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:8%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/iGusev/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/398/182/212/39818221233f641a20d067615a7e0e01.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-9">
                                        <span class="rating-info__title">iGusev</span>
                                        <span class="rating-info__stat">466,2</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:8%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="content-list__item content-list__item_top-users">
                            <a href="https://habr.com/users/phpclub/" class="media-obj media-obj_link">
                                <div class="media-obj__image">
                                    <img src="//habrastorage.org/getpro/habr/avatars/a0a/877/7f0/a0a8777f02da3892635eafbd61cb31f0.jpg" class="user-pic__img" width="30" height="30" />
                                </div>

                                <div class="media-obj__body">
                                    <div class="rating-info rating-info_top-10">
                                        <span class="rating-info__title">phpclub</span>
                                        <span class="rating-info__stat">447,0</span>
                                    </div>
                                    <div class="rating-info__progress">
                                        <div class="rating-info__progress-scale" style="width:8%;"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="default-block__footer">
                    <a href="/hub/php/subscribers/invest/" class="default-block__footer-link" rel="nofollow">100 лучших авторов</a>
                </div>
            </div>



            <div class="js-ad_sticky">
                <div class="default-block">
                    <div class="default-block__header">
                        <h3 class="default-block__header-title">Читают сейчас</h3>
                    </div>

                    <div class="default-block__content default-block__content_most-read" id="broadcast_most-read">
                        <ul class="content-list content-list_most-read">
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/post/426073/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '1'); }">Импортозамещение, сказки продолжаются (продолжение)</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">10,7k</span>
                    </span>
                                    <a href="https://habr.com/post/426073/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">102</span>
                                    </a>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/post/425969/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '2'); }">Как я стану веб-разработчиком… и стану ли?</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">3,4k</span>
                    </span>
                                    <a href="https://habr.com/post/425969/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">52</span>
                                    </a>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/post/425917/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '3'); }">Борец за справедливость не дал Waymo запатентовать ключевую технологию лидара</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">15k</span>
                    </span>
                                    <a href="https://habr.com/post/425917/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">15</span>
                                    </a>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/company/smartengines/blog/425775/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '4'); }">Автоматизация секс-индустрии или госуслуги по-немецки</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">17,3k</span>
                    </span>
                                    <a href="https://habr.com/company/smartengines/blog/425775/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">22</span>
                                    </a>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/post/425649/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '5'); }">БДСМ, Гор и преследование разработчика Drupal</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">8,6k</span>
                    </span>
                                    <a href="https://habr.com/post/425649/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">38</span>
                                    </a>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_devided post-info">
                                <a href="https://habr.com/company/alconost/blog/426029/" class="post-info__title" onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'now', '6'); }">Опускаются руки и хочется бросить задачу? Так выглядит эффективное обучение разработчика</a>
                                <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use xlink:href="/images/common-svg-sprite.svg#eye" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">12,2k</span>
                    </span>
                                    <a href="https://habr.com/company/alconost/blog/426029/#comments" class="post-info__meta-item" rel="nofollow">
                                        <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13"><use xlink:href="/images/common-svg-sprite.svg#comment" /></svg><span class="post-info__meta-counter post-info__meta-counter_small">21</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>