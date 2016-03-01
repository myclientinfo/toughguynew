/*
 * Application
 *

 */

/*
 * Bootstrap
 *
=require ../vendor/bootstrap/js/transition
=require ../vendor/bootstrap/js/alert
=require ../vendor/bootstrap/js/button
=require ../vendor/bootstrap/js/carousel
=require ../vendor/bootstrap/js/collapse
=require ../vendor/bootstrap/js/dropdown
=require ../vendor/bootstrap/js/modal
=require ../vendor/bootstrap/js/tooltip
=require ../vendor/bootstrap/js/popover
=require ../vendor/bootstrap/js/scrollspy
=require ../vendor/bootstrap/js/tab
=require ../vendor/bootstrap/js/affix
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
});


$( document ).ready(function() {
    $(window).on('resize', positionLogo);
    positionLogo();
    //mainContentHeight();
    if($('#OctoDevelOctoSliderSimpleHacked').length){
	    setInterval(runSlider, 8000);
	}

});


var runSlider = function(){

	var next = $('#OctoDevelOctoSliderSimpleHacked li.on').next();

	if(next.length === 0){
		next = $('#OctoDevelOctoSliderSimpleHacked li').first();
	}

	$('#OctoDevelOctoSliderSimpleHacked li.on').removeClass('on');

	next.addClass('on');

}


var positionLogo = function(){
    var logo = $('#logo');
    var logo_half = (logo.width()/2);

    logo.css('top', 20 - logo_half);

    $('.sidenav-outer').css('margin-top', logo_half - 100);
};

var mainContentHeight = function(){

    var mainContent = $('.main-content');

    var vpHeight = $(window).height();

    var mcBottom = mainContent.position().top + mainContent.outerHeight();

    if(mcBottom < (vpHeight)){
      $('#layout-content').height(vpHeight - mainContent.position().top);
    }


}
