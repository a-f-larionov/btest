<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <?require('source_head.php')?>
    <title><?=$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead()?>
</head>

<body class="nl">

<?$APPLICATION->ShowPanel()?>

<div class="layout">
    <div class="layout__row layout__row_services">
        <div id="TMpanel">
            <div class="container">
                <div class="bmenu">
                    <a href="https://habr.com/?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo" class="current">Хабр</a>
                    <a href="https://habr.com/flows/geektimes/">Geektimes</a>
                    <a href="https://toster.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Тостер</a>
                    <a href="https://moikrug.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Мой круг</a>
                    <a href="https://freelansim.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Фрилансим</a>
                </div>
                <div class="bmenu_inner" style="display:inline-block!important;visibility:visible!important;">
                    <span class="bmenu__label">Мегапосты:</span>
                    <span class="bmenu slink"></span>
                </div>
            </div>
        </div>

    </div>

    <div class="layout__row layout__row_navbar">
        <div class="layout__cell">
            <div class="main-navbar">
                <div class="main-navbar__section main-navbar__section_left">
    <span class="logo-wrapper">
      <a href="/" class="logo" title="">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon-svg icon-svg_logo-habrahabr" width="71" height="26" viewBox="0 0 92 32"><path d="M6.827 12.278c1.273-1.735 3.304-2.848 5.595-2.848l.521.019-.023-.001c4.272 0 7.587 2.988 7.587 7.941v14.047h-6.827v-11.636c0-2.529-1.31-3.931-3.381-3.931-1.9 0-3.473 1.31-3.473 4.062v11.505h-6.827v-31.45h6.827zM46.611 31.437h-6.552v-2.319c-1.357 1.764-3.468 2.89-5.843 2.89l-.332-.007.016.001c-5.713 0-9.946-4.98-9.946-11.296s4.233-11.256 9.972-11.256l.288-.006c2.378 0 4.491 1.131 5.832 2.884l.013.018v-2.306h6.552zm-15.725-10.72c0 2.533 2.053 4.586 4.586 4.586s4.586-2.053 4.586-4.586c0-2.533-2.053-4.586-4.586-4.586s-4.586 2.053-4.586 4.586zM73.959 20.704c0 6.316-4.246 11.296-9.959 11.296l-.342.008c-2.354 0-4.446-1.116-5.778-2.848l-.013-.017v2.293h-6.552v-31.45h6.814v12.095c1.343-1.61 3.351-2.628 5.596-2.628l.329.007-.016-.001c5.674-.013 9.92 4.94 9.92 11.243zm-16.157 0c0 2.533 2.053 4.586 4.586 4.586s4.586-2.053 4.586-4.586c0-2.533-2.053-4.586-4.586-4.586s-4.586 2.053-4.586 4.586zM92.318 9.776l-.59 6.801c-1.019-.342-2.193-.547-3.412-.563h-.008c-.15-.023-.323-.036-.498-.036-1.911 0-3.459 1.549-3.459 3.459 0 .151.01.3.029.447l-.002-.017v11.571h-6.84v-21.399h6.552v2.464c1.124-1.85 3.128-3.068 5.417-3.068l.448.016-.02-.001h.022c.842 0 1.655.12 2.425.343l-.061-.015z"/></svg>

      </a>

    </span>
                    <ul class="nav-links" id="navbar-links">
                        <li class="nav-links__item">
                            <a href="/" class="nav-links__item-link ">Публикации</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="/users/" class="nav-links__item-link ">Пользователи</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="/hubs/" class="nav-links__item-link ">Хабы</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="/companies/" class="nav-links__item-link ">Компании</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="/sandbox/" class="nav-links__item-link ">Песочница</a>
                        </li>
                    </ul>
                    <form action="/search/#h" method="get" class="search-form" id="search-form">
                        <button type="button" class="btn btn_navbar_search icon-svg_search" id="search-form-btn" title="Поиск по сайту">
                            <svg class="icon-svg" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true" version="1.1" role="img"><path d="M21.416 13.21c0 4.6-3.65 8.34-8.14 8.34S5.11 17.81 5.11 13.21c0-4.632 3.65-8.373 8.167-8.373 4.488 0 8.14 3.772 8.14 8.372zm1.945 7.083c1.407-2.055 2.155-4.57 2.155-7.084C25.515 6.277 20.04.665 13.277.665S1.04 6.278 1.04 13.21c0 6.93 5.475 12.542 12.237 12.542 2.454 0 4.907-.797 6.942-2.208l7.6 7.79 3.14-3.22-7.6-7.82z"/></svg>
                        </button>
                        <label class="search-form__field-wrapper">
                            <input type="text" name="q" class="search-form__field" id="search-form-field" placeholder="Поиск" tabindex="-1"/>
                            <button type="button" class="btn btn_search-close" id="search-form-clear" title="Закрыть">
                                <svg class="icon-svg icon-svg_navbar-close-search" width="31" height="32" viewBox="0 0 31 32" aria-hidden="true" version="1.1" role="img"><path d="M26.67 0L15.217 11.448 3.77 0 0 3.77l11.447 11.45L0 26.666l3.77 3.77L15.218 18.99l11.45 11.448 3.772-3.77-11.448-11.45L30.44 3.772z"/></svg>

                            </button>
                        </label>
                    </form>

                </div>

                <div class="main-navbar__section main-navbar__section_right">

                    <a href="/tracker/" class="btn btn_medium btn_navbar_tracker" title="Трекер">
                        <svg class="icon-svg icon-svg_navbar-tracker" width="29" height="32" viewBox="0 0 29 32" aria-hidden="true" version="1.1" role="img"><path d="M14.313.25c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5zM16.224 26.75c-.192 1-.976 1.667-1.912 1.667s-1.72-.667-1.912-1.667H9.312c.216 3 2.363 5 5 5s4.784-2 5-5h-3.088zM28.313 24.75c0 1.105-.895 2-2 2h-24c-1.105 0-2-.895-2-2s.895-2 2-2h24c1.105 0 2 .895 2 2z"/><path d="M7.313 22.75v-8c0-3.86 3.14-7 7-7s7 3.14 7 7v8h4v-8c0-6.075-4.925-11-11-11s-11 4.925-11 11v8h4z"/></svg>

                    </a>


                    <a href="/sandbox/add/" class="btn btn_medium btn_navbar_write-topic">
                        <span class="btn__text">Написать</span>
                        <svg class="icon-svg icon-svg_navbar-pencil" width="33" height="32" viewBox="0 0 33 32" aria-hidden="true" version="1.1" role="img"><path d="M7.038 27.08L5.6 25.617c-.284.757-.57 1.513-.856 2.27.764-.27 1.53-.538 2.294-.807zm7.956-2.8c-.51-.282-.997-.63-1.437-1.045-.82-.775-1.373-1.665-1.625-2.57-.012-.012-.026-.02-.038-.033-1.187-.24-2.355-.84-3.31-1.744-.114-.107-.216-.22-.32-.33-.6 1.595-1.203 3.19-1.806 4.786l2.876 2.928c1.886-.664 3.772-1.328 5.66-1.99zM1.057 29.932l5.798-15.358c.01-.024.023-.043.033-.066.06-.193.164-.383.337-.56l12.43-12.65c1.246-1.27 3.18.697 1.932 1.966L9.573 15.492c.098.424.412.92.873 1.358.628.594 1.408.972 2.155 1.08 2.982-3.032 5.962-6.066 8.942-9.1 1.247-1.27 3.18.698 1.933 1.967l-8.92 9.08c.107.416.415.896.863 1.32.904.855 2.125 1.273 3.108 1.066l.004.02c3.646-3.713 7.293-7.424 10.94-11.135 1.246-1.27 3.18.698 1.932 1.967L19.4 25.332c-.11.11-.225.19-.34.254-.15.175-.345.322-.606.414L3.066 31.415c-.98.556-2.506-.164-2.008-1.483z"/></svg>
                    </a>

                    <div class="dropdown dropdown_user">
                        <button type="button" class="btn btn_medium btn_navbar_user-dropdown" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" tabindex="0" title="mrDataStream777">
            <span class="default-image default-image_navbar default-image_lilac">
              <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" version="1.1" role="img"><path d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z"/></svg>
            </span>
                        </button>
                        <div class="dropdown-container dropdown-container_white" aria-hidden="true" role="menu">
                            <a href="https://habr.com/users/mrdatastream777/" class="dropdown__user-info user-info">
                                <span class="user-info__nickname">mrDataStream777</span><br/>
                                <span class="user-info__special">Профиль</span>
                            </a><br/>
                            <ul class="n-dropdown-menu n-dropdown-menu_profile">
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/users/mrdatastream777/posts/" class="n-dropdown-menu__item-link">Публикации</a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/conversations/" class="n-dropdown-menu__item-link">Диалоги </a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/users/mrDataStream777/favorites/" class="n-dropdown-menu__item-link">Закладки</a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/beta/" class="n-dropdown-menu__item-link">Бета-тестирование</a>
                                </li>
                                <li class="n-dropdown-menu__item n-dropdown-menu__item_border">
                                    <a href="https://habr.com/auth/settings/profile/" class="n-dropdown-menu__item-link">Настройки</a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/logout/mrDataStream777/1947137334/" class="n-dropdown-menu__item-link">Выйти</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="layout__row layout__row_body">
        <div class="layout__cell layout__cell_body">

