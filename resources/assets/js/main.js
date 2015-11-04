$( document ).ready(function() {

    var wow = new WOW(
        {
            boxClass:     'timeline-post',      // default
            animateClass: 'is-visible', // default
            offset:       100          // default
        }
    );

    wow.init();

    $('.mdl-button a').click( function() { // Au clic sur un �l�ment
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Dur�e de l'animation (en ms)
        var scroll = $(page).offset().top - 100;
        $('html, body').animate( { scrollTop: scroll }, speed ); // Go
        return false;
    });
});