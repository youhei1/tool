$(function() {

	var htmlEscape = function(str) {
		if (!str) return '';
		return str.replace(/[<>&"'`]/g, function(match) {
			var escape = {
				'<': '&lt;',
				'>': '&gt;',
				'&': '&amp;',
				'"': '&quot;',
				"'": '&#39;',
				'`': '&#x60;'
			};
			return escape[match];
		});
	};

	// リセット
	$('#reset_btn').on('click', function(e) {
		e.preventDefault();
		$('#result').text('');
		return false;
	})

	// 追加
	$('#form').on('submit', function(e) {
		e.preventDefault();

		var page = htmlEscape($('[name=page]').val());
		var url = htmlEscape($('[name=url]').val());
		var target = htmlEscape($('[name=target]').val());

		var gtag_type = $('[name=gtag_type]').val();
		var category = $('[name=category]').val();
		var action = $('[name=action]').val();
		var label = $('[name=label]').val();
		var value = $('[name=value]').val();

		var tag = '';

		switch (gtag_type) {
			case 'gtag.js':
				var event = 'event';
				var params = {};
				if (category) {
					params.event_category = category;
				}
				if (label) {
					params.event_label = label;
				}
				if (value) {
					params.value = value;
				}
				params = JSON.stringify(params).replace(/"/gi, "'");
				tag = `onclick="gtag('${event}', '${action}', ${params} );"`;
				break;

			case 'analytics.js':
				tag = `onclick="ga('send', 'event', '${category}', '${action}', '${label}');"`;
				break;

			case 'ga.js':
				tag = `onclick="_gaq.push(['_trackEvent', '${category}', '${action}', '${label}']);"`;
				break;
				
			default:
				break;
		}

		var result = [$('#result').text()];
		result.push(tag);
		result = result.filter(e => !!e).join("\n");
		$('#result').text(result);
	
		var count = $('#result_table tbody tr').length;

		var $tr = $(`
			<tr>
				<td class="cell_no" contentEditable>${count+1}</td>
				<td class="cell_page" contentEditable>${page}</td>
				<td class="cell_url" contentEditable>${url}</td>
				<td class="cell_target" contentEditable>${target}</td>
				<td class="cell_gtag" contentEditable>${tag}</td>
				<td class="cell_btn"><input type="button" class="del_btn btn btn-primary" value="削除"></td>
			</tr>
		`);

		$('#result_table tbody').append($tr);
		$tr.hide().fadeIn(100);
		return false;
	});

	// 削除
	$(document).on('click', '.del_btn', function(e) {
		e.preventDefault();
		var $tr = $(this).closest('tr').fadeOut(100, function() {
			$(this).remove();
			$('#result_table tbody .cell_no').each(function(i) {
				$(this).text(i+1);
			});
		});
		return false;
	});

	// 完了
	$(document).on('click', '.mod_end_btn', function(e) {
		e.preventDefault();
		$(e.target).closest('td').find('input[type=button]').toggleClass('active');
		$(e.target).closest('tr').find('td').each(function(i, elm) {
			if ($(elm).find('.mod_btn').length) return true;
			if ($(elm).find('.del_btn').length) return true;
			var val = $(elm).find('input[type=text]').val();
			$(elm).text(val);
		});
		return false;
	});

	// 編集
	$(document).on('click', '.mod_btn', function(e) {
		e.preventDefault();
		$(e.target).closest('td').find('input[type=button]').toggleClass('active');
		$(e.target).closest('tr').find('td').each(function(i, elm) {
			if ($(elm).find('.mod_btn').length) return true;
			if ($(elm).find('.del_btn').length) return true;
			var text = $(elm).text();
			var $input = $(`<input type="text" value="">`).val(text);
			$(elm).html($input);
		});
		return false;
	});

	$('#all_delete_btn').on('click', function(e) {
		e.preventDefault();
		$('#result_table tbody').empty();
		return false;
	});

});
