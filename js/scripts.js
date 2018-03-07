$(document).ready(function(){
    
    $("#menu-item-303 > a ").click(function () {
         $(".sub-menu").toggle();
    });
	
    $('.responsive-menu').click(function(){
		$('.custom-menu-class ul li').css('display', 'block');
	});
    
    /*$('.module-trigger').click(function(){
		$(this).toggleClass('open');
        $(this).parent().parent().find(".module-dropdown").toggle();
        $(".module-dropdown").toggle();
	});*/
    
    $(document).on('open.zf.reveal', '[data-reveal]', function () {
        $(".home-slides-container").slick({
            speed: '0',
            nextArrow: $('.slick-next'),
            prevArrow: $('.slick-prev'),
        });
        
    });
    
    var $status = $('.pagingInfo');
    
$(".home-slides-container").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
	//currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
	var i = (currentSlide ? currentSlide : 0) + 1;
	$status.text(i + ' / ' + slick.slideCount);
});
    
  /*  $('.press-module-container').slick({
          dots: false,
          infinite: false,
          appendArrows: $('.buttons-container'),
          prevArrow: $('.press-prev'),
          nextArrow: $('.press-next'),
          speed: 0,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 700,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
    $('.press-module-container2').slick({
          dots: false,
          infinite: false,
          appendArrows: $('.buttons-container2'),
          speed: 0,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });*/
})