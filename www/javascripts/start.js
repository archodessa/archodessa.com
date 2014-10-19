require(['/javascripts/lib/jquery.min.js'], function(){
    require([
        '/javascripts/foundation.min.js',
        '/javascripts/jquery.foundation.reveal.js',
        '/javascripts/fotorama.js',
        '/javascripts/retina.modified.js',
        '/javascripts/wufoo.js',
        '/javascripts/wufoo-submit.js'
    ], function(){
      require([
          '/javascripts/all.js',
          '/javascripts/modules/langSwitcher.js'
      ]);
    });
});