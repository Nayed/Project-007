$( document ).ready(function() {

    var wow = new WOW(
        {
            boxClass:     'timeline-post',      // default
            animateClass: 'is-visible', // default
            offset:       100          // default
        }
    );

    wow.init();

    $('.mdl-button a').click( function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        var scroll = $(page).offset().top - 100;
        $('html, body').animate( { scrollTop: scroll }, speed ); // Go
        return false;
    });

    $(".lightbox").fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
        autoSize: true,
        type: 'iframe',
        iframe: {
            preload: false // fixes issue with iframe and IE
        }
    });
    $('.mdl-layout').on('click', function() {
        $.fancybox.close();
    });

    $('.flash-info').each(function(){
        var week = $(this).attr('data-week');
        $('#article-s'+ week).prepend($(this));
        $(this).addClass('is-visible');
    });

    $('#trumbowyg-demo').trumbowyg();

});