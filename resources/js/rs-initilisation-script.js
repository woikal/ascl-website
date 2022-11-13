var tpj = jQuery;

var revapi5, revapi3;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["rsrevslider1"] = {
    init: function () {
        window.revapi5 = window.revapi5 === undefined || window.revapi5 === null || window.revapi5.length === 0 ? document.getElementById("rs_revslider_1") : window.revapi5;
        if (window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length == 0) return;
        window.revapi5 = jQuery(window.revapi5);
        if (window.revapi5.revolution == undefined) {
            revslider_showDoubleJqueryError("rs_revslider_1");
            return;
        }
        revapi5.revolutionInit({
            revapi: "revapi5",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,768,480",
            gridwidth: 1900,
            gridheight: 965,
            lazyType: "smart",
            perspectiveType: "local",
            editorheight: "965,600,500,400",
            responsiveLevels: "1240,1024,768,480",
            progressBar: {disableProgressBar: true},
            navigation: {
                mouseScrollNavigation: false,
                onHoverStop: false,
                touch: {
                    touchenabled: true
                },
                arrows: {
                    enable: true,
                    style: "custom",
                    hide_onmobile: true,
                    hide_under: 1200,
                    left: {
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 115,
                        v_offset: 200
                    },
                    right: {
                        v_align: "bottom",
                        h_offset: 65,
                        v_offset: 200
                    }
                }
            },
            parallax: {
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                type: "mouse",
                origo: "slidercenter",
                speed: 2000
            },
            fanim: {
                in: {"o": 0},
                out: {"a": false},
                speed: 1500
            },
            viewPort: {
                global: true,
                globalDist: "-200px",
                enable: true,
                outof: "pause",
                visible_area: "20%"
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["rsrevslider3"] = {
    init: function () {
        window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3.length === 0 ? document.getElementById("rs_revslider_3") : window.revapi3;
        if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) return;
        window.revapi3 = jQuery(window.revapi3);
        if (window.revapi3.revolution == undefined) {
            revslider_showDoubleJqueryError("rs_revslider_3");
            return;
        }
        revapi3.revolutionInit({
            revapi: "revapi3",
            sliderType: "carousel",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,768,480",
            gridwidth: "1170,1024,778,480",
            gridheight: "754,600,500,400",
            lazyType: "smart",
            perspectiveType: "local",
            editorheight: "754,600,500,400",
            responsiveLevels: "1240,1024,768,480",
            shadow: 5,
            carousel: {
                infinity: true,
                fadeout: false
            },
            progressBar: {disableProgressBar: true},
            navigation: {
                mouseScrollNavigation: false,
                onHoverStop: false,
                touch: {
                    touchenabled: true
                },
                arrows: {
                    enable: true,
                    tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div>    <div class=\"tp-arr-img-over\"></div>	<span class=\"tp-arr-titleholder\">{{title}}</span> </div>",
                    style: "erinyen",
                    hide_onmobile: true,
                    hide_under: 600,
                    left: {
                        h_offset: 30
                    },
                    right: {
                        h_offset: 30
                    }
                }
            },
            parallax: {
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                type: "mouse",
                origo: "slidercenter",
                speed: 2000
            },
            fanim: {
                in: {"o": 0},
                out: {"a": false},
                speed: 1500
            },
            viewPort: {
                global: true,
                globalDist: "-200px",
                enable: true,
                outof: "pause",
                visible_area: "20%"
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript

if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
}