$('.logo-cm__slider').slick({
	slidesToShow: 6,
	slidesToScroll: 3,
	focusOnSelect: true,
	responsive: [
		{
		  breakpoint: 998, 
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3
		  }
		},
		{
			breakpoint: 568, 
			settings: {
			slidesToShow: 2,
			slidesToScroll: 2
			}
		},
		{
			breakpoint: 380, 
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}
		]
  });

  $(".header-maar24__burgerMobile").click(function(){
	if($(this).children(".menu.btn2").hasClass("active_nv")){
		$(this).children(".menu.btn2").removeClass("active_nv");
		$(".header-maar24__navigation").fadeOut(300);
	}else{
		$(this).children(".menu.btn2").addClass("active_nv");
		$(".header-maar24__navigation").fadeIn(300);
	}
});
$(window).on("resize", function(){
	if($(window).width() > 1100){
		$(".header-maar24__navigation").removeAttr("style");
	}
})