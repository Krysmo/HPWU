$( document ).ready(function() {
    jQuery.fn.single_double_click = function(single_click_callback, double_click_callback, timeout) {
        return this.each(function(){
            var clicks = 0, self = this;
            jQuery(this).click(function(event){
                clicks++;
                if (clicks == 1) {
                    setTimeout(function(){
                        if(clicks == 1) {
                            single_click_callback.call(self, event);
                        } else {
                            double_click_callback.call(self, event);
                        }
                        clicks = 0;
                    }, timeout || 300);
                }
            });
        });
    }

    var fieldGuideTotal = 0;
    var ministryManualTotal = 0;
    var dadaBookTotal = 0;
    var restrictedBookTotal = 0;

    $(".BC-values").single_double_click(function () {
        var val = parseInt($(this).find('.value').text());
        var max = parseInt($(this).find('.max').text());
        if(val < max) {
            $(this).find('.value').text(val + 1 );
            var niveau = '.level' + $(this).find('.value').text();
            if(!isNaN(parseInt($(this).find(niveau).find('.field-guide').text()))) {
                fieldGuideTotal += parseInt($(this).find(niveau).find('.field-guide').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.ministry-manual').text()))) {
                ministryManualTotal += parseInt($(this).find(niveau).find('.ministry-manual').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.dada-book').text()))) {
                dadaBookTotal += parseInt($(this).find(niveau).find('.dada-book').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.restricted-book').text()))) {
                restrictedBookTotal += parseInt($(this).find(niveau).find('.restricted-book').text());
            }
            majTotal();
        }
    }, function () {
        var val = parseInt($(this).find('.value').text());
        if(val > 0) {
            $(this).find('.value').text(val - 1 );
            var niveau = '.level' + val;
            if(!isNaN(parseInt($(this).find(niveau).find('.field-guide').text()))) {
                fieldGuideTotal = fieldGuideTotal - parseInt($(this).find(niveau).find('.field-guide').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.ministry-manual').text()))) {
                ministryManualTotal = ministryManualTotal - parseInt($(this).find(niveau).find('.ministry-manual').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.dada-book').text()))) {
                dadaBookTotal = dadaBookTotal - parseInt($(this).find(niveau).find('.dada-book').text());
            }
            if(!isNaN(parseInt($(this).find(niveau).find('.restricted-book').text()))) {
                restrictedBookTotal = restrictedBookTotal - parseInt($(this).find(niveau).find('.restricted-book').text());
            }
            majTotal();
        }
    })


    function majTotal(){
        $('.field-guide-total span').text(fieldGuideTotal);
        $('.ministry-manual-total span').text(ministryManualTotal);
        $('.dada-book-total span').text(dadaBookTotal);
        $('.restricted-book-total span').text(restrictedBookTotal);
    }

    $('.content-total-fleche').click(function () {
        if($('.content-total-spell').is(':hidden')){
            $('.content-total-spell').show('slow');
            $('.content-total-fleche .fleche img').css('transform','rotate(0deg)');
        } else {
            $('.content-total-spell').hide('slow');
            $('.content-total-fleche .fleche img').css('transform','rotate(180deg)');
        }
    });

});