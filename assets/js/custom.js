$('.main-nav').on('click', '.nav-btn', function(event) {
	$('.site-menu').toggle();
});

$('.home-gallery__slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  nextArrow: '<button class="btn-next"><span class="fa fa-arrow-circle-right"></span></button>',
  prevArrow: '<button class="btn-prev"><span class="fa fa-arrow-circle-left"></span></button>',
});