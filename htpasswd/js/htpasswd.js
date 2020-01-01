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


	$('#pw_rand_btn').off('click').on('click', function() {
		event.preventDefault();
		var pwlen = $('#pw_rand_menu > .dropdown-item.active').data('pwlen') - 0;
		var pw = Math.random().toString(36).slice(-pwlen);
		$('input[name=pw]').val(pw);
		return false;
	});

	$('#pw_rand_menu > .dropdown-item').off('click').on('click', function() {
		event.preventDefault();
		$('#pw_rand_menu > .dropdown-item').removeClass('active');
		$(this).addClass('active');
		return false;
	});
	
});