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

    $(".BC-values").single_double_click(function () {
        var val = parseInt($(this).find('.value').text());
        var max = parseInt($(this).find('.max').text());
        if(val < max) {
            $(this).find('.value').text(val + 1 );
            fieldGuideTotal = fieldGuideTotal + parseInt($(this).find('.field-guide').text());
            ministryManualTotal = ministryManualTotal + parseInt($(this).find('.ministry-manual').text());
        }
    }, function () {
        var val = parseInt($(this).find('.value').text());
        if(val > 0) {
            $(this).find('.value').text(val - 1 );
            fieldGuideTotal = fieldGuideTotal - parseInt($(this).find('.field-guide').text());
            ministryManualTotal = ministryManualTotal - parseInt($(this).find('.ministry-manual').text());
        }
    })


});