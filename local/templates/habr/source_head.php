<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta content='width=1024' name='viewport'>

<meta name="description"
      content="PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. Проект распространяется под собственной лицензией, несовместимой с GNU GPL. 2821 публикация на тему «PHP» от авторов Хабра."/>

<meta name="keywords"
      content="php, laravel, web-разработка, symfony, yii, дайджест, ссылки, framework, новости, подборка, mysql, javascript, php 7, yii 2, cms, ооп, wordpress, phpunit, composer, magento, hypertext preprocessor, personal home page tools"/>

<link rel="canonical" href="https://habr.com/hub/php/"/>
<meta property="fb:app_id" content="444736788986613"/>
<meta property="og:type" content="website"/>
<meta property="fb:pages" content="472597926099084"/>
<meta property="og:site_name" content="Хабр"/>
<link rel="image_src" href="https://habr.com/images/habr.png"/>
<meta property="og:image" content="https://habr.com/images/habr.png"/>
<meta property="og:image:width" content="1200"/>
<meta property="og:image:height" content="628"/>
<meta property="og:title"
      content="PHP – скриптовый язык общего назначения / Хабр"/>
<meta property="og:description"
      content="PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. Проект распространяется под собственной лицензией, несовместимой с GNU GPL. 2821 публикация на тему «PHP» от авторов Хабра."/>


<meta name='yandex-verification' content='71593b225aeafc4e'/>
<meta name='referrer' content='unsafe-url'/>
<meta name="pocket-site-verification" content="ed24b2b9721edf0a282c5b4a3232c4"/>


<style type="text/css">
    @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 500;
        src: url(/fonts/0/FiraSans/firaSans-medium.eot);
        src: local("Fira Sans Medium"), local("FiraSans-Medium"), url(/fonts/0/FiraSans/firaSans-medium.eot?#iefix) format("embedded-opentype"), url(/fonts/0/FiraSans/firaSans-medium.woff2) format("woff2"), url(/fonts/0/FiraSans/firaSans-medium.woff) format("woff"), url(/fonts/0/FiraSans/firaSans-medium.ttf) format("truetype")
    }
</style>

<link href="https://dr.habracdn.net/habrcom/styles/1539098493/main.bundle.css"
      rel="stylesheet" media="all"/>


<meta name='yandex-verification' content='67d46b975fa41645'/>

<link rel="apple-touch-icon" sizes="180x180"
      href="/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32"
      href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16"
      href="/images/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#77a2b6">
<meta name="application-name" content="Хабр"/>
<meta name="msapplication-TileColor" content="#77a2b6">
<meta name="theme-color" content="#77a2b6">


<link title="Хабр / PHP – скриптовый язык общего назначения"
      type="application/rss+xml" rel="alternate"
      href="https://habr.com/rss/hub/php/top10/"/>

<script>/* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
    (function () {
        'use strict';
        var f, g = [];

        function l(a) {
            g.push(a);
            1 == g.length && f()
        }

        function m() {
            for (; g.length;) g[0](), g.shift()
        }

        f = function () {
            setTimeout(m)
        };

        function n(a) {
            this.a = p;
            this.b = void 0;
            this.f = [];
            var b = this;
            try {
                a(function (a) {
                    q(b, a)
                }, function (a) {
                    r(b, a)
                })
            } catch (c) {
                r(b, c)
            }
        }

        var p = 2;

        function t(a) {
            return new n(function (b, c) {
                c(a)
            })
        }

        function u(a) {
            return new n(function (b) {
                b(a)
            })
        }

        function q(a, b) {
            if (a.a == p) {
                if (b == a) throw new TypeError;
                var c = !1;
                try {
                    var d = b && b.then;
                    if (null != b && "object" == typeof b && "function" == typeof d) {
                        d.call(b, function (b) {
                            c || q(a, b);
                            c = !0
                        }, function (b) {
                            c || r(a, b);
                            c = !0
                        });
                        return
                    }
                } catch (e) {
                    c || r(a, e);
                    return
                }
                a.a = 0;
                a.b = b;
                v(a)
            }
        }

        function r(a, b) {
            if (a.a == p) {
                if (b == a) throw new TypeError;
                a.a = 1;
                a.b = b;
                v(a)
            }
        }

        function v(a) {
            l(function () {
                if (a.a != p) for (; a.f.length;) {
                    var b = a.f.shift(), c = b[0], d = b[1], e = b[2], b = b[3];
                    try {
                        0 == a.a ? "function" == typeof c ? e(c.call(void 0, a.b)) : e(a.b) : 1 == a.a && ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b))
                    } catch (h) {
                        b(h)
                    }
                }
            })
        }

        n.prototype.g = function (a) {
            return this.c(void 0, a)
        };
        n.prototype.c = function (a, b) {
            var c = this;
            return new n(function (d, e) {
                c.f.push([a, b, d, e]);
                v(c)
            })
        };

        function w(a) {
            return new n(function (b, c) {
                function d(c) {
                    return function (d) {
                        h[c] = d;
                        e += 1;
                        e == a.length && b(h)
                    }
                }

                var e = 0, h = [];
                0 == a.length && b(h);
                for (var k = 0; k < a.length; k += 1) u(a[k]).c(d(k), c)
            })
        }

        function x(a) {
            return new n(function (b, c) {
                for (var d = 0; d < a.length; d += 1) u(a[d]).c(b, c)
            })
        };window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
    }());

    (function () {
        function l(a, b) {
            document.addEventListener ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b)
        }

        function m(a) {
            document.body ? a() : document.addEventListener ? document.addEventListener("DOMContentLoaded", function c() {
                document.removeEventListener("DOMContentLoaded", c);
                a()
            }) : document.attachEvent("onreadystatechange", function k() {
                if ("interactive" == document.readyState || "complete" == document.readyState) document.detachEvent("onreadystatechange", k), a()
            })
        };

        function r(a) {
            this.a = document.createElement("div");
            this.a.setAttribute("aria-hidden", "true");
            this.a.appendChild(document.createTextNode(a));
            this.b = document.createElement("span");
            this.c = document.createElement("span");
            this.h = document.createElement("span");
            this.f = document.createElement("span");
            this.g = -1;
            this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;";
            this.b.appendChild(this.h);
            this.c.appendChild(this.f);
            this.a.appendChild(this.b);
            this.a.appendChild(this.c)
        }

        function t(a, b) {
            a.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:" + b + ";"
        }

        function y(a) {
            var b = a.a.offsetWidth, c = b + 100;
            a.f.style.width = c + "px";
            a.c.scrollLeft = c;
            a.b.scrollLeft = a.b.scrollWidth + 100;
            return a.g !== b ? (a.g = b, !0) : !1
        }

        function z(a, b) {
            function c() {
                var a = k;
                y(a) && a.a.parentNode && b(a.g)
            }

            var k = a;
            l(a.b, c);
            l(a.c, c);
            y(a)
        };

        function A(a, b) {
            var c = b || {};
            this.family = a;
            this.style = c.style || "normal";
            this.weight = c.weight || "normal";
            this.stretch = c.stretch || "normal"
        }

        var B = null, C = null, E = null, F = null;

        function G() {
            if (null === C) if (J() && /Apple/.test(window.navigator.vendor)) {
                var a = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))(?:\.([0-9]+))/.exec(window.navigator.userAgent);
                C = !!a && 603 > parseInt(a[1], 10)
            } else C = !1;
            return C
        }

        function J() {
            null === F && (F = !!document.fonts);
            return F
        }

        function K() {
            if (null === E) {
                var a = document.createElement("div");
                try {
                    a.style.font = "condensed 100px sans-serif"
                } catch (b) {
                }
                E = "" !== a.style.font
            }
            return E
        }

        function L(a, b) {
            return [a.style, a.weight, K() ? a.stretch : "", "100px", b].join(" ")
        }

        A.prototype.load = function (a, b) {
            var c = this, k = a || "BESbswy", q = 0, D = b || 3E3,
                H = (new Date).getTime();
            return new Promise(function (a, b) {
                if (J() && !G()) {
                    var M = new Promise(function (a, b) {
                        function e() {
                            (new Date).getTime() - H >= D ? b() : document.fonts.load(L(c, '"' + c.family + '"'), k).then(function (c) {
                                1 <= c.length ? a() : setTimeout(e, 25)
                            }, function () {
                                b()
                            })
                        }

                        e()
                    }), N = new Promise(function (a, c) {
                        q = setTimeout(c, D)
                    });
                    Promise.race([N, M]).then(function () {
                        clearTimeout(q);
                        a(c)
                    }, function () {
                        b(c)
                    })
                } else m(function () {
                    function u() {
                        var b;
                        if (b = -1 !=
                            f && -1 != g || -1 != f && -1 != h || -1 != g && -1 != h) (b = f != g && f != h && g != h) || (null === B && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), B = !!b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = B && (f == v && g == v && h == v || f == w && g == w && h == w || f == x && g == x && h == x)), b = !b;
                        b && (d.parentNode && d.parentNode.removeChild(d), clearTimeout(q), a(c))
                    }

                    function I() {
                        if ((new Date).getTime() - H >= D) d.parentNode && d.parentNode.removeChild(d), b(c); else {
                            var a = document.hidden;
                            if (!0 === a || void 0 === a) f = e.a.offsetWidth,
                                g = n.a.offsetWidth, h = p.a.offsetWidth, u();
                            q = setTimeout(I, 50)
                        }
                    }

                    var e = new r(k), n = new r(k), p = new r(k), f = -1,
                        g = -1, h = -1, v = -1, w = -1, x = -1,
                        d = document.createElement("div");
                    d.dir = "ltr";
                    t(e, L(c, "sans-serif"));
                    t(n, L(c, "serif"));
                    t(p, L(c, "monospace"));
                    d.appendChild(e.a);
                    d.appendChild(n.a);
                    d.appendChild(p.a);
                    document.body.appendChild(d);
                    v = e.a.offsetWidth;
                    w = n.a.offsetWidth;
                    x = p.a.offsetWidth;
                    I();
                    z(e, function (a) {
                        f = a;
                        u()
                    });
                    t(e, L(c, '"' + c.family + '",sans-serif'));
                    z(n, function (a) {
                        g = a;
                        u()
                    });
                    t(n, L(c, '"' + c.family + '",serif'));
                    z(p, function (a) {
                        h = a;
                        u()
                    });
                    t(p, L(c, '"' + c.family + '",monospace'))
                })
            })
        };
        "object" === typeof module ? module.exports = A : (window.FontFaceObserver = A, window.FontFaceObserver.prototype.load = A.prototype.load);
    }());

    (function (w) {
        if (w.document.documentElement.className.indexOf("fonts-loaded") > -1) {
            return;
        }

        var html = document.documentElement;
        var FS500 = new w.FontFaceObserver("Fira Sans", {weight: 500});

        FS500.load().then(function () {
            html.classList.add('fonts-loaded');
            sessionStorage.fontsLoaded = true;
            console.log('FS500-loaded');
        }).catch(function () {
            sessionStorage.fontsLoaded = false;
            console.log('FS500-unloaded');
        });

        if (sessionStorage.fontsLoaded) {
            html.classList.add('fonts-loaded');
        }
    }(this));
</script>
<script src="https://dr.habracdn.net/habrcom/javascripts/1539098493/libs/jquery-1.8.3.min.js"></script>
<script>
    window.create_callback_for_blocked = function (key) {
        return function () {
            googletag.cmd.push(function () {
                googletag.display(key);
            });
        }
    }

    window.habr_blockers_checker = new function () {
        var result;
        var callbacksQueue = [];
        var calledOnce = false;

        function fireCallbacks() {
            callbacksQueue.forEach(function (callback) {
                callback(result);
            });
            callbacksQueue = [];
        }

        this.detect = function (imgUrl, callback) {
            var checksRemain = 2;
            var detected = false;
            var error1 = false;
            var error2 = false;

            if (typeof callback !== 'function') {
                return;
            }
            ;

            callbacksQueue.push(callback);

            if (typeof result !== 'undefined') {
                fireCallbacks();
            }
            ;

            if (calledOnce) {
                return;
            }
            calledOnce = true;

            imgUrl += '?ch=*&rn=*';

            function beforeCheck(timeout) {
                if (checksRemain === 0 || timeout > 1E3) {
                    result = checksRemain === 0 && detected;
                    fireCallbacks();
                } else {
                    setTimeout(function () {
                        beforeCheck(timeout * 2)
                    }, timeout * 2);
                }
            }

            function checkImages() {
                if (--checksRemain) {
                    return;
                }
                ;
                detected = !error1 && error2;
            }

            var random = Math.random() * 11;

            var img1 = new Image;
            img1.onload = checkImages;
            img1.onerror = function () {
                error1 = true;
                checkImages()
            };
            img1.src = imgUrl.replace(/\*/, 1).replace(/\*/, random);

            var img2 = new Image;
            img2.onload = checkImages;
            img2.onerror = function () {
                error2 = true;
                checkImages()
            };
            img2.src = imgUrl.replace(/\*/, 2).replace(/\*/, random);

            beforeCheck(250, callback)
        };

        this.detectWrapper = function (callback) {
            return this.detect('/images/px.gif', callback);
        };
    };

    window.display_dfp_slot = function (key) {
        if (window.habr_blockers_checker) {
            window.habr_blockers_checker.detectWrapper(window.create_callback_for_blocked(key));
        } else {
            window.create_callback_for_blocked(key)();
        }
    };
</script>


<script src="https://dr.habracdn.net/habrcom/javascripts/1539098493/libs/raven.min.js"></script>
<script>Raven.config('https://a5835779b79f46bbb22add0cda1e4976@s.tmtm.ru/21').install()</script>

<script src="https://dr.habracdn.net/habrcom/javascripts/1539098493/_parts/advertise.js"></script>
<script src="https://dr.habracdn.net/habrcom/javascripts/1539098493/_parts/adriver.js"></script>
<script src="https://www.googletagservices.com/tag/js/gpt.js" async></script>
<script src="https://static.criteo.net/js/ld/publishertag.js" async></script>

<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>

<script>
    // TODO: move this code to module
    //       move dot in chains to start of line and use one indent level:
    //               ```
    //                  start()
    //                    .chainEnd()
    //               ```
    function display_yandex_rtb(yandexId, divId) {
        $('#' + divId).show();
        (function (w, d, n, s, t) {
            w[n] = w[n] || [];
            w[n].push(function () {
                Ya.Context.AdvManager.render({
                    blockId: yandexId,
                    renderTo: divId,
                    async: true
                });
            });
            t = d.getElementsByTagName('script')[0];
            s = d.createElement('script');
            s.type = 'text/javascript';
            s.src = '//an.yandex.ru/system/context.js';
            s.async = true;
            t.parentNode.insertBefore(s, t);
        })(this, this.document, 'yandexContextAsyncCallbacks');
    }

    function listen_googletag_and_render_yandex(yandexId, targetDivId) {
        if (!window.googletag || !window.googletag.cmd) {
            return;
        }
        window.googletag.cmd.push(function () {
            if (!window.googletag.pubads) {
                return;
            }

            window.googletag.pubads()
                .addEventListener('slotRenderEnded', function (event) {
                    var divId = event.slot.getSlotElementId();
                    if (divId === targetDivId && event.isEmpty) {
                        window.display_yandex_rtb(yandexId, divId);
                    }
                });
        });
    }

    function getRoxotGroupId() {
        try {
            var storageKey = 'roxot-gid';
            var groupId = localStorage.getItem(storageKey);
            if (groupId === null) {
                groupId = 1 + Math.floor(Math.random() * 10000);
                localStorage.setItem(storageKey, groupId);
            }
            return '' + groupId;
        }
        catch (e) {
            return '10001';
        }
    }

    function getRoxotSectorId() {
        try {
            var storageKey = 'roxot-sid';
            var groupId = localStorage.getItem(storageKey);
            if (groupId === null) {
                groupId = 1 + Math.floor(Math.random() * 100);
                localStorage.setItem(storageKey, groupId);
            }
            return '' + groupId;
        }
        catch (e) {
            return '101';
        }
    }

    function getRoxotDeep() {
        try {
            var storageKey = 'roxot-deep';
            var groupId = localStorage.getItem(storageKey);
            if (groupId === null) {
                groupId = 1 + Math.floor(Math.random() * 100);
                localStorage.setItem(storageKey, groupId);
            }
            return '' + groupId;
        }
        catch (e) {
            return '101';
        }
    }

    function getRoxotEvent() {
        return '' + (1 + Math.floor(Math.random() * 100));
    }
</script>

<script>
    function leftpad(str, len, ch) {
        str = String(str);

        var i = -1;

        if (!ch && ch !== 0) {
            ch = ' ';
        }
        ;

        len = len - str.length;

        while (++i < len) {
            str = ch + str;
        }

        return str;
    }

    var WEEK_DAYS = ['su', 'mo', 'tu', 'we', 'th', 'fr', 'sa'];

    function initializeDFP(usesABP) {
        var currentDate = new Date();
        var hours = currentDate.getHours();
        var hoursStr = leftpad(hours, 2, '0');
        var weekDayCode = WEEK_DAYS[currentDate.getDay()];
        googletag.cmd.push(function () {
            if (usesABP) {
                googletag.defineSlot('/235032688/HH/HH01_ATF_Poster', [[300, 500], [300, 250], [300, 300], [300, 400], [300, 200], [300, 100], [240, 400]], 'div-gpt-hh-atf').addService(googletag.pubads());
                window.listen_googletag_and_render_yandex('R-A-149298-31', 'div-gpt-hh-atf');
            } else {
                googletag.defineSlot('/235032688/HH/HH01_ATF_Poster', [[300, 500], [300, 600], [300, 250], [300, 300], [300, 400], [300, 200], [300, 150], [300, 100], [240, 400]], 'div-gpt-hh-atf').addService(googletag.pubads());
                window.listen_googletag_and_render_yandex('R-A-149298-35', 'div-gpt-hh-atf');
            }

            googletag.pubads().enableSingleRequest();
            if (!usesABP) {
                googletag.pubads().disableInitialLoad(); //We will wait for the Criteo Bidder Call before calling the adserver
            }
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().setTargeting('roxot-group-id', getRoxotGroupId()).setTargeting('roxot-sector-id', getRoxotSectorId()).setTargeting('roxot-deep', getRoxotDeep()).setTargeting('roxot-event-group-id', getRoxotEvent()).setTargeting('roxot-event', getRoxotEvent()).setTargeting('roxot-event-deep', getRoxotEvent()).setTargeting('roxot-minutes', (new Date).getUTCMinutes().toString()).setTargeting('roxot-hours', (new Date).getUTCHours().toString()).setTargeting('roxot-day', (new Date).getUTCDay().toString()).setTargeting('chr', hoursStr).setTargeting('cwd', weekDayCode).setTargeting('aa', (usesABP) ? 'yes' : 'no').setTargeting('path', window.location.pathname + window.location.search).setTargeting('feedtype', ["all_top10", "posts"]).setTargeting('cat', ["h_php", "f_develop"]).setTargeting('dev', [0]).setTargeting('user', ["registered"]).setTargeting('pagetype', ["feed"]);
            googletag.enableServices();

            if (!usesABP) {
                window.Criteo = window.Criteo || {};
                window.Criteo.events = window.Criteo.events || [];
                var launchAdServer = function () {
                    googletag.cmd.push(function () {
                        Criteo.SetDFPKeyValueTargeting(); //This will append Criteo keywords to the adserver call
                        googletag.pubads().refresh(); //This will trigger the adserver call
                    });
                };
                Criteo.events.push(function () {
                    var adUnits = {
                        'placements': [
                            {'slotid': 'div-gpt-hh-atf', 'zoneid': 1173489}, // TMTM - RU - CDB - SA - Habr - 300x600
                        ]
                    };
                    // Define the price band range
                    Criteo.SetLineItemRanges('0..599:1;600..1398:2;1400..3000:5');
                    // Call Criteo and execute the callback function for a given timeout
                    Criteo.RequestBids(adUnits, launchAdServer, 750);
                });
            }
        });
    }

    if (window.habr_blockers_checker) {
        window.habr_blockers_checker.detectWrapper(initializeDFP);
    } else {
        initializeDFP(false);
    }
</script>

<script type="text/javascript">
    function callGA(usesABP) {
        if (typeof window.adb1 === 'undefined') {
            window.adb1 = 'yes';
        }
        if (usesABP) {
            window.adb1 = 'aa';
        }

        var user_type = 'readonly';

        var page_type = "other";

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-726094-1', 'auto', {'uid': '87f276150cf0d1c0f417896027e24669'});
        ga('create', 'UA-726094-24', 'auto', {
            'uid': '87f276150cf0d1c0f417896027e24669',
            'name': 'HGM'
        });


        ga('require', 'displayfeatures');
        ga('set', 'dimension1', user_type); // user type - guest/readonly/habrauser
        ga('set', 'dimension3', 'available');
        ga('set', 'dimension2', page_type);
        ga('set', 'dimension4', window.adb1);


        (function () {
            var removeUtms = function () {
                var location = window.location;
                if (location.search.indexOf('utm_') != -1 && history.replaceState) {
                    var currentUrl = location.toString();
                    var strippedUrl = currentUrl.replace(/\?([^#]*)/, function (_, search) {
                        var result = search.split('&').map(function (param) {
                            if (/^utm_/.test(param)) {
                                return '';
                            }
                            return param;
                        }).filter(Boolean).join('&');
                        return result ? '?' + result : '';
                    });

                    history.replaceState({}, '', strippedUrl);
                }
            };
            ga('require', 'GTM-559GVC8');
            ga('send', 'pageview', {'hitCallback': removeUtms});
        })();

        ga('HGM.set', 'dimension1', user_type);
        ga('HGM.set', 'dimension2', "habrahabr");
        ga('HGM.set', 'dimension4', window.adb1);

        ga('HGM.send', 'pageview');
    }


    if (window.habr_blockers_checker) {
        window.habr_blockers_checker.detectWrapper(callGA);
    } else {
        callGA(false)
    }

</script>
