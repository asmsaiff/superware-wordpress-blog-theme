; (function ($) {
	$(document).ready(function () {
        $(window).scroll(function() {
            var offsetTop = $(".hideshare").offset()
            var topOfOthDiv = offsetTop.top;

            if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
                $(".share").hide(); //reached the desired point -- show div
            }
            else{
                $(".share").show();
            }
        });
    });
}(jQuery));