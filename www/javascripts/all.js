!function ($) {
  var app = {
    init: function () {
      if ($(".panorama").length) {
        this.panorama();
      }
//      this.lazyload();
      this.old();
      this.doubleHover();

      this.lazy();
    },
    isRetina: function () {
      var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5),\
                      (min--moz-device-pixel-ratio: 1.5),\
                      (-o-min-device-pixel-ratio: 3/2),\
                      (min-resolution: 1.5dppx)";

      if (window.devicePixelRatio > 1)
        return true;

      if (window.matchMedia && window.matchMedia(mediaQuery).matches)
        return true;

      return false;
    },
    lazy: function () {
      var lazy = $("img.lazy");
      if (this.isRetina()) {
        lazy.each(function () {
          $(this).data("original", $(this).data("original").replace(/.jpg/, '@2x.jpg'));
        });
      }

      require(["/javascripts/lib/jquery.lazyload.min.js"], function () {
        lazy.lazyload({
          effect: "fadeIn",
        });
        setTimeout(function () {
          $(window).trigger("scroll")
        }, 200);
      });
    },
    doubleHover: function () {
      var doubleHover = function (selector, hoverClass) {
        $(document).on('mouseover mouseout', selector, function (e) {
          $(selector)
            .filter('[href="' + $(this).attr('href') + '"]')
            .toggleClass(hoverClass, e.type == 'mouseover');
        });
      }
      doubleHover('.app-item a', 'hover');
    },

    panorama: function () {
      var list = $("#app-list")
        , panoram = list.find(".panorama")
      // картинка ресайзится в рамках первых 5 превьюшек (я не знаю как это правильно написать)
        , items = list.find(".app-item:eq(0), .app-item:eq(1), .app-item:eq(2), .app-item:eq(3), .app-item:eq(4), .app-item:eq(5)")
        , first = items.filter(":first")
        , margin = 22
        , getWidth = function () {
          var i = 0
            , top = first.position().top
            , width = first.outerWidth();
          // определяем количество тех, кто в первом ряду
          items.each(function () {
            if ($(this).position().top <= top) i++
          });

          return ((width + margin) * i) - margin;
        };

      // биндимся на изменение окна
      $(window).resize(function () {
        panoram.css({width: getWidth()});
      });
      // запускаем в первый раз
      panoram.css({width: getWidth()});
    },
    old: function () {
      var agent, convertoToMailto, delay, deviceAgent, filterChange, searchApps;

      deviceAgent = navigator.userAgent.toLowerCase();

      agent = deviceAgent.match(/(iphone|ipod|ipad|android)/);

      convertoToMailto = function () {
        if (agent) {
          return $(".application").each(function () {
            var msg, url;
            url = encodeURIComponent($(this).attr("href"));
            msg = encodeURIComponent($(this).attr("title"));
            return $(this).attr("href", "mailto:?Subject=This%20app%20looks%20killer%20on%20Retina!&Body=" + msg + "%0d%0a" + url);
          });
        }
      };

      filterChange = function (val) {
        var file;
        switch (val) {
          case "c":
            file = "sort_cat.html";
            break;
          case "n":
            file = "sort_name.html";
            break;
          default:
            file = "sort_recent.html";
        }
        return $.get("/partials/" + file, function (data) {
          return $("#app-wrapper").fadeOut(175, function () {
            $(this).html(data).fadeIn(225);
            if (val === 'c') {
              $('#cat-list').fadeIn(225);
            } else {
              $('#cat-list').fadeOut(175);
            }
            retinajs(true);
            return convertoToMailto();
          });
        });
      };

      delay = (function () {
        var timer;
        timer = 0;
        return function (callback, ms) {
          clearTimeout(timer);
          return timer = setTimeout(callback, ms);
        };
      })();

      searchApps = function () {
        var formData;
        if ($("#searchForm").find("#search").val() !== '') {
          formData = $("#searchForm").serialize();
          return $.ajax({
            url: "/partials/search.html",
            type: "post",
            data: formData,
            dataType: "html",
            success: function (data) {
              return $("#app-wrapper").fadeOut(25, function () {
                $(this).html(data).fadeIn(50);
                retinajs(true);
                convertoToMailto();
                return $(".openSubmissionModal").click(function (e) {
                  e.preventDefault();
                  return $("#submissionModal").reveal();
                });
              });
            }
          });
        } else {
          return filterChange($("#filter").val());
        }
      };


      retinajs();
      convertoToMailto();
      $("#openSubmissionModal").click(function (e) {
        e.preventDefault();
        return $("#submissionModal").reveal();
      });
      $("#openNewsletterModal").click(function (e) {
        e.preventDefault();
        return $("#newsletterModal").reveal();
      });
      $("#openColophonModal").click(function (e) {
        e.preventDefault();
        return $("#colophonModal").reveal();
      });
      $("#filter").change(function () {
        return filterChange($(this).val());
      });
      $("#searchForm").submit(function (e) {
        searchApps();
        return false;
      });
      $("#searchForm").keyup(function () {
        return delay((function () {
          return searchApps();
        }), 500);
      });
      $("#search").on("search", function (e) {
        return searchApps();
      });
      $(".application").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Application Icon", "Download", $(this).attr("title")]);
      });
      $(".application-name").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Application Name", "Download", $(this).attr("title")]);
      });
      $(".developer").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Developer Name", "Visit", $(this).attr("title")]);
      });
      $("#main-nav a").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Main Nav", "Click", $(this).attr("title")]);
      });
      $("#logo").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Main Nav", "Click", $(this).attr("title")]);
      });
      $("#openColophonModal").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Main Nav", "Click", $(this).attr("title")]);
      });
      $(".creators a").on("click", function (e) {
        return _gaq.push(["_trackEvent", "Creators", "Visit", $(this).attr("title")]);
      });
      $("#filter").on("change", function (e) {
        return _gaq.push(["_trackEvent", "Filter", "Change", $(this).val()]);
      });
      return $("#search").on("focus", function (e) {
        return _gaq.push(["_trackEvent", "Search", "Focus"]);
      });
    }
  }

  $(function ($) {
    app.init();
  });
}(jQuery);

/* twitter */
!function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (!d.getElementById(id)) {
    js = d.createElement(s);
    js.id = id;
    js.src = "//platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
  }
}(document, "script", "twitter-wjs");
/* twitter */


/* facebook */
(function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
/* facebook */

/* typekit */
try {
  Typekit.load();
} catch (e) {
}
/* typekit */

/* vk.com */
VK.init({apiId: 3082320, onlyWidgets: true});
/* vk.com */


/* Google Analytics */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34184058-1']);
_gaq.push(['_trackPageview']);

(function () {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();
/* Google Analytics */