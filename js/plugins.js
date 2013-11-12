// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());



var ww = $(window).width(),
    wl = $('#adapt-style');

widgets = {

    init: function () {
        this.initAccordion('*[data-widget="accordion"]');
        this.initAccordion1('*[data-widget="accordion1"]');
        this.openRespMenu('*[data-widget="resp-menu"]');
        $('.carouselw,.carouselwbig,.carouselw2').each(function () {
            $(this).tinycarousel();
        });
        $('.social_container').tabs();

    },
    initAccordion: function (selector) {
        if (ww <= 800) {
            $(selector).accordion({heightStyle: "content", collapsible: true, active: false});
        } else {
            $(selector).accordion({disabled: true, heightStyle: "content", collapsible: false});
        }
    },
    initAccordion1: function (selector) {
        if (ww <= 600) {
            $(selector).accordion({heightStyle: "content", collapsible: true, active: false});
        } else {
            $(selector).accordion({disabled: true, heightStyle: "content", collapsible: false, active: 'all'});
            $(selector).children('div').show();
        }
    },
    openRespMenu: function (selector) {
        if (ww <= 600) {
            $(selector).children('a').on('click', function () {
                $(this).next('ul').show(300).find('div').hide();
            })
        }
    },
    initCarousel: function (selector) {
        $('.carouselw .viewport').width($(window).width());
        $(selector).each(function () {
            $(this).tinycarousel({
            })
        })
    }
}
$(window).resize(function () {
    ww = $(window).width();
    widgets.init();

});
$(function () {
    ww = $(window).width();
    widgets.init();
});
/* iOS fixes
 -----------------------------------------------------*/
var iPadLabels = function () {

    function fix() {
        var labels = document.getElementsByTagName('label'),
            target_id,
            el;
        for (var i = 0; labels[i]; i++) {
            if (labels[i].getAttribute('for')) {
                labels[i].onclick = labelClick;
            }
        }
    };

    function labelClick() {
        el = document.getElementById(this.getAttribute('for'));
        if (['radio', 'checkbox'].indexOf(el.getAttribute('type')) != -1) {
            el.setAttribute('selected', !el.getAttribute('selected'));
        } else {
            el.focus();
        }
    };

    return {
        fix: fix
    }

}();
if (navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/iPad/i)) {
    iPadLabels.fix();
}
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i)) {
    $(document).ready(function () {
        $('label[for]').click(function () {
            var el = $(this).attr('for');
            if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {
                return;
            } else {
                $('#' + el)[0].focus();
            }
        });
    });
}
/*end*/

/* responsive
 -----------------------------------------------------*/
/*end*/

// Place any jQuery/helper plugins in here.
