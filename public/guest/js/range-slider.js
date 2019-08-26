/*----------------------------------
	//------ RANGE SLIDER ------//
	-----------------------------------*/
$(".slider-range").slider({
	range: true,
	min: 5000,
	max: 200000,
	step: 1000,
	values: [60000, 130000],
	slide: function (event, ui) {
		$(".slider_amount").val("cfa" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "cfa1,") + " - cfa" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "cfa1,"));
	}
});
$(".slider_amount").val("Price: cfa" + $(".slider-range").slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "cfa1,") + " - cfa" + $(".slider-range").slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "cfa1,"));
