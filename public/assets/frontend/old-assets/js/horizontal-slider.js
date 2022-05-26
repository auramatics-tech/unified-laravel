(function ($) {

	$(".cata-sub-nav").on('scroll', function () {
		$val = $(this).scrollLeft();

		if ($(this).scrollLeft() + $(this).innerWidth() >= $(this)[0].scrollWidth) {
			//   $(".nav-next").hide();
			$(".nav-next").css("background", "#DBDBDB");
		} else {
			// $(".nav-next").show();
			$(".nav-next").css("background", "#008BCF")
		}

		if ($val == 0) {
			// $(".nav-prev").hide();
			$(".nav-prev").css("background", "#DBDBDB");
		} else {
			// $(".nav-prev").show();
			$(".nav-prev").css("background", "#008BCF")
		}
	});
	console.log('init-scroll: ' + $(".nav-next").scrollLeft());
	$(".nav-next").on("click", function () {
		$(".cata-sub-nav").animate({ scrollLeft: '+=560' }, 200);

	});
	$(".nav-prev").on("click", function () {
		$(".cata-sub-nav").animate({ scrollLeft: '-=1000' }, 200);
	});



})(jQuery);