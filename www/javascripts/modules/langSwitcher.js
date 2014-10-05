var langBtn = {
    ru: $('#ru-lang-btn'),
    fr: $('#fr-lang-btn')
};

var ctrl = {
    init: function(){
        langBtn.ru.on('click', ctrl.handleClick );
        langBtn.fr.on('click', ctrl.handleClick );
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

ctrl.init();