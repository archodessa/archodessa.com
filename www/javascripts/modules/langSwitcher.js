// define buttons
var langBtn = {
    ru: $('#ru-lang-btn'),
    fr: $('#fr-lang-btn')
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

        //set default
        $('[data-lang]').hide();
        $('[data-lang="ru"]').show();
    },

    handleClick: function(event) {
        event.preventDefault();

        if( $(event.target).hasClass('active') ) return;

        var lang = $(event.target).data('for-lang');

        $('[data-lang]').hide();
        $('[data-lang="'+lang+'"]').show();

        $('.lang-btn').removeClass('active');
        langBtn[lang].addClass('active');
    }

};

//init this module
ctrl.init();