$(function() {

	var clipboard = new ClipboardJS('.copy_link');

	$('.copy_link').on('click', function() {
		$(this).addClass('copied').delay(3000).queue(function() {
			$(this).removeClass('copied').dequeue();
		});
	});

	clipboard.on('success', function(e) {
			e.clearSelection();
	});
	
});