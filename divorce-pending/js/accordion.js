$(function() {

	function accordion() {
		$(this).next().slideToggle(300);
	}

	$(".simple .toggle").click(accordion);


});
