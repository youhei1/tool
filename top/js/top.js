$(function() {

	$('.news_line__date').filter(function() {
		var date = new Date($(this).text());
		date.setDate(date.getDate() + 7);
		var today = new Date();
		return date > today;
	}).each(function() {
		$(this).closest('.news_line').find('.news_line__text').append($(`<div class="badge badge-primary">NEW</div>`));
	});

});