$( document ).ready( function() {
    console.log('Page is READY!')
});

$( window ).on('load', function() {
    console.log('Page is LOADED!')
    setTimeout( function() {
        $('#vstss-frankenloader').fadeOut('fast')
    }, 500);
});