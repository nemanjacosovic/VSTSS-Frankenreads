$( document ).ready( function() {
    console.log('Page is READY!')

    // Set Events height
    var elHighest = 0
    var elHighestTemp
    $('.vstssfr-events-group-single p').each( function() {
        element = $(this);
        if ( element.outerHeight() > elHighest ) {
            elHighestTemp = element
            elHighest = element.outerHeight()
        }
    })
    $('.vstssfr-events-group-single p').height(elHighestTemp.innerHeight())

    // Smooth Scroll
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});

$( window ).on('load', function() {
    console.log('Page is LOADED!')
    setTimeout( function() {
        $('#vstss-frankenloader').fadeOut('fast')
    }, 500);
});