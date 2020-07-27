$( document ).ready(function() {

    $('.BC-values').click( function () {
        var val = parseInt($(this).find('.value').text());
        var max = parseInt($(this).find('.max').text());
        if(val < max) {
            $(this).find('.value').text(val + 1 );
        }
    })

});