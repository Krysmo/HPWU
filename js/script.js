$( document ).ready(function() {
    var fieldGuideTotal = 0;
    var ministryManualTotal = 0;

    $('.BC-values').click( function () {
        var val = parseInt($(this).find('.value').text());
        var max = parseInt($(this).find('.max').text());
        if(val < max) {
            $(this).find('.value').text(val + 1 );
            fieldGuideTotal = fieldGuideTotal + parseInt($(this).find('.field-guide').text());
            ministryManualTotal = ministryManualTotal + parseInt($(this).find('.ministry-manual').text());
        }
    })

});