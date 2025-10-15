$(window).on('scroll', function(){
	var scroll = $(window).scrollTop();    
    if (scroll >= 32) {				
		$(".main-header").addClass("main-header--light");
    $(".sidebar").addClass("sidebar--scroll");
    } else if(scroll <= 32) {
		$(".main-header").removeClass("main-header--light");
    $(".sidebar").removeClass("sidebar--scroll");
	}
});
$(document).ready(function() {
  $('.hidden-box').on('click', function() {
    $('.page-content').toggleClass('isOpen');
  });
});