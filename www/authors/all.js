$(function(){

  $wrapper = $(".wrapper");
  $document = $(document);
  $window = $(window);
  if ($('#krutilka').length)
  {
    $('#krutilka').krutilka(
      {
        size: 15,
        petals: 12,
        petalLength: 4,
        petalWidth: 1,
        color: $('.wrapper').hasClass('white') ?  '#080808' : '#fefefe'
      }
    );
  }
  var photoWidth = $('.main').attr('data-imageWidth');
  var photoHeight = $('.main').attr('data-imageHeight');
  var $bg = $(".background-photo");
  var aspectRatio = photoWidth / photoHeight;

  $window.resize(function()
  {
    var width = window.innerWidth;
    var height = window.innerHeight;

    if((width / height) < aspectRatio ){
      $bg.removeClass('bgwidth').addClass('bgheight');
    } else {
      $bg.removeClass('bgheight').addClass('bgwidth');
    }
  }).trigger("resize");

  if($wrapper.find(".search").length > 0){

    var $field = $wrapper.find(".search .field");
    var searchPlaceholder = "поиск людей";

    $field.val(searchPlaceholder).addClass("inactive");

    $field.focus(function(){
      if($(this).val() == searchPlaceholder){
        $(this).val("");
        $(this).removeClass("inactive");
      }
    }).focusout(function(){
          if($(this).val() == ""){
            $(this).val(searchPlaceholder);
            $(this).addClass("inactive");
          }
        });
  }


  //выравнивание кнопки в айпаде
  var deviceAgent = navigator.userAgent.toLowerCase();
  var isIOSFLAG = deviceAgent.match(/(iphone|ipod|ipad)/);

  if(isIOSFLAG){
    $(".image-upload").css({
      "right":"17em"
    });
    $(".image-upload input").css({
      "width":"90px"
    });
  }


  var submitted = 0;
  $unknownForm = $(".unknown-form");//, .resubmit-form");
  $unknownForm.on("submit", function(e){
    $('#burosferaLink').css('top', '51px');
    e.preventDefault();

    if(submitted)
      return;

    submitted = 1;

    $.ajax({
      url: "/burosfera/me/confirm/",
      method: "post",
      data: {
        "email": $unknownForm.find(".text").attr("value")
      },
      success:function(data){
        $unknownForm.fadeOut("fast");
        $(data).prependTo($wrapper).show();//.hide().slideDown('fast');
        $window.resize();
      }
    });
  });
  $document.on("submit", ".resubmit-form", function(e){
    e.preventDefault();
    resubmitAnimation();
    $.ajax({
      url: "/burosfera/me/confirm/",
      method: "post",
      data: {
        "email": $(this).find(".email").attr("value")
      },
      success:function(data){

      }
    });
  });
  $document.on("submit", ".changes-resubmit-form", function(e){
    e.preventDefault();
    resubmitAnimation();
    $.ajax({
      url: "/burosfera/me/confirm/",
      method: "post",
      data: {
        "email": $(this).find(".email").attr("value"),
        "resubmit": 1
      },
      success:function(data){

      }
    });
  });

  function resubmitAnimation()
  {
    length = $window.width();

    $text = $(".notification-box .text");

    textLength = $text.find(".text-block").width() + length * 0.07;


    var width = $text.width();

    setTimeout(function(){
      $text
          .clone()
          .appendTo(".notification-box")
          .css({
            "left":-textLength
          })
          .stop()
          .animate({"left":0}, 900, $.bez([.15, 1, 0.25, 1]), function(){
            $text.remove();
          });
    }, 300);

    $text
        /*.css({
          "position":"absolute",
          "width":width
        })*/
        .stop()
        .animate({"left":length}, 900, $.bez([.15, 1, 0.25, 1]));
  }


  if($(".style-switcher").length > 0){

    var $switcher = $(".style-switcher");
    var $switchInput = $(".colorScheme");

    if($wrapper.hasClass("black")){
      $switchInput.val(1);
    }
    else{
      $switchInput.val(0);
    }

    $switcher.find("a").click(function(e){
      e.preventDefault();
      if($(this).parent().hasClass("white")){
        $wrapper.removeClass("black").addClass("white");
        $('ul.black-links').addClass('white-links').removeClass('black-links');
        $('#burosferaLink').removeClass('b-burosfera-link-black').addClass('b-burosfera-link-white');
        $('#burosferaLink').removeClass('edit-link-black').addClass('edit-link-white');
        $("html").removeClass("black").addClass("white");
        $switchInput.val(0);
        $('.loader').html('<span id="krutilka"></span>');
        $('#krutilka').krutilka(
          {
            size: 15,
            petals: 12,
            petalLength: 4,
            petalWidth: 1,
            color: '#080808' 
          }
          
        );
      }else{
        $wrapper.removeClass("white").addClass("black");
        $('ul.white-links').addClass('black-links').removeClass('white-links');
        $('#burosferaLink').removeClass('b-burosfera-link-white').addClass('b-burosfera-link-black');
        $('#burosferaLink').removeClass('edit-link-white').addClass('edit-link-black');
        $("html").removeClass("white").addClass("black");
        $switchInput.val(1);
        $('.loader').html('<span id="krutilka"></span>');
        $('#krutilka').krutilka(
          {
            size: 15,
            petals: 12,
            petalLength: 4,
            petalWidth: 1,
            color: '#fefefe' 
          }
        );
      }
    });
  }


  var uploader = $('#fileupload');

  if(uploader.length > 0){

    var formData = {
      'type' : 'image',
      'dimensions' : '500x500',
      'response': 'image'
    }

    uploader.fileupload({
      url: '/burosfera/admin/getFile/',
      paramName: 'Filedata',
      dataType: 'json',
      sequentialUploads: true,
      fileInput: $('#fileInput'),
      formData: formData,
      send: function(event, data)
      {

        uploader.find(".loader").css("display","inline-block");
        uploader.find("input").hide();
        $(".submit-area input").attr({
          "disabled":"disabled",
          "value":"Загружаем фото"
        });
      },
      done: function(event, data)
      {
        console.log(data);
        uploader.find("input").show();
        uploader.find(".loader").hide();

        $(".submit-area input").removeAttr("disabled").attr({
          "value":"Сохранить"
        });

        var data = data.result;

        /*if($.browser.opera){
         var data = serverData;
         }
         else{
         var data = eval('(' + serverData + ')');
         }*/


        $(".image-delete").removeClass("disabled");

        //Делаем картинку фоном
        /*if(data.direction == 1){
         $(".wrapper").css({
         'background-image':'url("/burosfera/images/content/originals/' + data.fileName.substr(0,2) + '/'+data.fileName + '")',
         'background-size': 'auto 100%',
         "background-repeat":"no-repeat",
         "background-position":"center center"
         });
         }
         else{
         $(".wrapper").css({
         'background-image':'url("/burosfera/images/content/originals/' + data.fileName.substr(0,2) + '/'+data.fileName + '")',
         'background-size': '100% auto',
         "background-repeat":"no-repeat",
         "background-position":"center center"
         });
         }*/
        var src = '/burosfera/images/content/originals/' + data.fileName.substr(0,2) + '/'+data.fileName;
        $(".background-photo").hide().attr("src",src);
        $(".background-photo.bg").css({"top":0,"left":0,"width":"","height":""}).show();

        $(".image-delete").attr("data-direction", data.direction).removeClass("resized");
        $(".photoEnabled").val("1");

        if (data.fileName != null)
        {
          $(".photoId").val(data.identifier);
        }
      }
    });

  }


  var $editBorderWrapper = $(".edit-border");
  var $editBorder = $(".border");
  var $editForm = $(".edit-form");
  var $main =  $(".main");

  if($editBorder.length > 0 && $editForm.length > 0){

    $("body").click(function(e){
      //if(!$(e.target).parents('.border').length && !$(e.target).is('.border') ) {
        //window.location = "/burosfera/me/";
      //}
    });
    $("td.border").click(function(e){
      e.stopPropagation();
    });
  }
  //if($editBorder.length > 0){

    if( ! $editForm.length > 0){
      //$wrapper.css("overflow","hidden");
    }
    $window.on("load resize", function(){
      $main.css({height: 100 - Math.ceil($main.offset().top/$window.height()*100) + '%'});
      //var mainTop = $(".main").offset().top;
      //var $pre = $editBorderWrapper.find(".pre");
      //$editBorderWrapper.css("top", - 108 - mainTop);
      //$pre.css("height", 101 + mainTop);
    }).resize();

  //}



  var $emailField = $(".email-field");

  if($emailField.length > 0){

    var $emailError = $(".email-error");

    $emailField.on("focusout", function(){
      $.ajax({
        url: "/burosfera/checkuser/",
        dataType: "text",
        data:{
          "email": $emailField.attr("value")
        },
        success: function(data){
          if(data == "1"){
            $emailError.show();
            $(".submit-area input").attr({
              "disabled":"disabled"
            });
          }
          else{
            $emailError.hide();
            $(".submit-area input").removeAttr("disabled")
          }
        }

      });
    });


    if($.cookie("emailError") == "1"){
      $emailError.show();
      $.cookie("emailError", null, {path: '/'});
    }
  }




  var $imageDelete = $(".image-delete");

  if($imageDelete.length > 0){

    var $wrapper = $(".wrapper");
    var $photoEnabled = $(".photoEnabled");

    var $bgPhoto = $(".background-photo.bg");
    var $resziedPhoto = $imageDelete.find(".background-photo");

    $imageDelete.click(function(e){
      e.preventDefault();

      if($(this).hasClass("disabled"))
        return;

      var offset = $imageDelete.offset();
      if(!$imageDelete.hasClass("resized")){

        if($bgPhoto.hasClass("bgwidth")){
          var newWidth = $imageDelete.width();
          var newHeight = "auto";
        }else{
          var newWidth = "auto";
          var newHeight = $imageDelete.height();
        }

        $bgPhoto.animate({
          "width":newWidth,
          "height":newHeight,
          "top":offset.top,
          "left":offset.left
        }, "fast", function(){

          $imageDelete.addClass("resized");
          $bgPhoto.hide();
          $resziedPhoto.show();
          $photoEnabled.val("0");
        });
      }else{

        if($bgPhoto.hasClass("bgwidth")){
          var oldWidth = $imageDelete.width();
          var newWidth = $wrapper.width();
          var oldHeight = "auto";
          var newHeight = "auto";
        }else{
          var oldWidth = "auto";
          var newWidth = "auto";
          var oldHeight = $imageDelete.height();
          var newHeight = $wrapper.height();
        }

        $resziedPhoto.hide();
        $bgPhoto.show();
        $bgPhoto.css({
          "width":oldWidth,
          "height":oldHeight,
          "top":offset.top,
          "left":offset.left
        });
        $bgPhoto.animate({
          "width":newWidth,
          "height":newHeight,
          "top":0,
          "left":0
        }, "fast", function(){
          $bgPhoto.removeAttr('style');
          $window.resize();

          $imageDelete.removeClass("resized");
          $photoEnabled.val("1");
        });
      }
    });
  }

  var $userLinks = $(".user-links");

  if($userLinks.length > 0){
    var $firstSocio = $userLinks.find(".service a:first");

    $firstSocio.css({"margin-left":"-18px"});
  }

  var $socio = $(".socio");

  if($socio.length > 0){

    /*var $twitter = $socio.find(".tw-field");
     var $facebook = $socio.find(".fb-field");
     var $livejournal = $socio.find(".lj-field");*/
    var $socioInput = $socio.find("input");



    $socioInput.focusin(function(){
      $(this).removeClass("error");
    });
    $socioInput.focusout(function(){
      var value = $(this).attr("value");

      if(value == "" || value.match(/^https?:\/\//gi) == null){
        if(value.match(/^[\w-]+$/gi) == null)
          $(this).addClass("error");
      }
      else{
        var site = "";

        switch($(this).attr("class")){
          case "tw-field":{
            site = /^https?:\/\/twitter\.com/gi;
            break;
          }
          case "lj-field":{
            site = /^https?:(\/\/[\w-]*\.|\/\/)(livejournal\.(com|ru)|lj\.ru)/gi;
            break;
          }
          case "fb-field":{
            site = /^https?:\/\/facebook\.com/gi;
            break;
          }
        }
        console.log(site);
        if(value.match(site) == null)
          $(this).addClass("error");
      }
    });

  }
  var img = $('#bg');
  var $window = $(window);

  var cropToFit = {
    calculateStyle: function(imgWidth, imgHeight, windowWidth, windowHeight) {
      var imgRatio = imgWidth / imgHeight;
      var windowRatio = windowWidth / windowHeight;

      var imgTop = 0, imgLeft = 0;

      if (imgRatio >= windowRatio) {
        imgHeight = windowHeight;
        imgWidth = Math.round((imgHeight) * imgRatio);
      } else {
        imgWidth = windowWidth;
        imgHeight = Math.round((imgWidth) / imgRatio);
      }

      if (imgWidth != windowWidth) {
        imgLeft = Math.round((windowWidth - imgWidth) / 2);
      }

      if (imgHeight != windowHeight) {
        imgTop = Math.round((windowHeight - imgHeight) / 2);
      }

      return {
        width: imgWidth,
        height: imgHeight,
        left: imgLeft,
        top: imgTop
      };
    },

    crop: function() {
      var imgWidth = Number(img.attr('width'));
      var imgHeight = Number(img.attr('height'));
      var windowWidth = $window.width();
      var windowHeight = $window.height();

      var style = cropToFit.calculateStyle(imgWidth, imgHeight, windowWidth, windowHeight);

      img.css(style);
    }
  };

  $window
      .resize(cropToFit.crop)
      .resize();
      
  window.addEventListener('orientationchange', cropToFit.crop, false);
});