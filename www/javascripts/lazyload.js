define(['./lib/doT.min.js'], function (doT) {
  'use strict';

  // to helpers
  $.fn.tmpl = function (tmplId, data) {
    var tmpl = doT.template($('#tmpl_' + tmplId).text());
    if (!$.isArray(data)) data = [data];

    return this.each(function () {
      var html = '';
      for (var itemIdx = 0; itemIdx < data.length; itemIdx++) {
        html += tmpl(data[itemIdx]);
      }
      $(this).append(html);
    });
  };

  var list = $("#app-list"),
    items = [],
    wrapper = $("#app-wrapper"),
    itemHeight = 290 + 22,
    itemWidth = 256 + 22,
    endCount = 0;

  function height() {
    return $(window).height()
  }
  function width() {
    return wrapper.width()
  }
  function isScrollTopEnough() {
    return $(window).scrollTop() + $(window).height() >= list.height() - 20;
  }
  function getPlacedHorizontal(){
    return Math.floor(width() / itemWidth);
  }
  function getPlacedNum() {
    return Math.ceil(height() / itemHeight) * getPlacedHorizontal();
  }
  function getItems() {
    var ret;
    var end = (endCount > 0) ? endCount + getPlacedHorizontal() : getPlacedNum();

    ret = _(items).filter(function (item, i) {
      return i > endCount && i <= end;
    });

    endCount = end;
    return ret;
  }

  function render(){
    var items = getItems();
    return list.tmpl("item", items);
    retinajs(true);
  }
  //
  var scrollHandler = _.throttle(function(){
    // проверяем на свободное место
    if (endCount >= items.length) {
      $(window).unbind();
    } else if(isScrollTopEnough()) {
      render();
    }
  }, 333);

  return function () {
    $.getJSON("objects.json", function (data) {
      items = _(data).filter(function (item) {
        return item.state === "on"
      });

      render();
    });

    $(window).scroll(scrollHandler);
  };
});
