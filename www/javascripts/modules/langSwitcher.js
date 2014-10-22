// define buttons
var langBtn = {
    ru: $('#ru-lang-btn'),
    fr: $('#fr-lang-btn'),
    de: $('#de-lang-btn'),
    en: $('#en-lang-btn'),
    ua: $('#ua-lang-btn')
};


/**
 * Main controllers
 */
var ctrl = {
    /**
     * module entry point
     */
    init: function(){
        //bind events
        langBtn.ru.on('click', ctrl.handleClick );
        langBtn.fr.on('click', ctrl.handleClick );
        langBtn.de.on('click', ctrl.handleClick );
        langBtn.en.on('click', ctrl.handleClick );
        langBtn.ua.on('click', ctrl.handleClick );

        //set default
        $('[data-lang]').hide();
        $('[data-lang="ru"]').show();
    },

    /**
     * On every lang change
     * @param event
     */
    handleClick: function(event) {
        event.preventDefault();

        // current lang link is not clickable
        if( $(event.target).hasClass('active') ) return;

        // get lang to change from links atr  data-for-lang=""
        var lang = $(event.target).data('for-lang');

        // hide all and show only current lang images
        $('[data-lang]').hide();
        $('[data-lang="'+lang+'"]').show();

        // change lang switcher to selected lang
        $('.lang-btn').removeClass('active');
        langBtn[lang].addClass('active');

        // to show lazy loaded images
        setTimeout(function () {
            $(window).trigger("scroll")
        }, 200);
    }

};

//init this module
ctrl.init();