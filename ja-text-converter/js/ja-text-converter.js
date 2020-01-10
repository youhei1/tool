
var current_setting;
var settings = {};

var clear_options = function () {
	localStorage.clear();
	$('.option').prop('checked', false);
	return false;
};
var get_setting = function (db = '前回の設定') {
	var setting_json = localStorage.getItem(db);
	var setting = setting_json ? JSON.parse(setting_json) : {};
	return setting;
};
var get_settings = function () {
	var tmp_settings = {};
	for (var key in localStorage) {
		tmp_settings[key] = localStorage.getItem(key)
	}
	return tmp_settings;
};
var save_setting = function (db = '前回の設定') {
	localStorage.setItem(db, JSON.stringify(current_setting));
};
var load_setting = function (db = '前回の設定') {

	current_setting = get_setting(db);

	$('.option').each(function () {
		var id = $(this).attr('id');
		var val = current_setting[id] || false;
		if (JSON.parse(val)) {
			$(this).prop('checked', val);
		}
	});

	$('.option_input').each(function () {
		var id = $(this).attr('id');
		var val = current_setting[id] || false;
		if (val) {
			$(this).val(val);
		}
	});

};

$(function () {
	'use strict';

	load_setting();
	settings = get_settings();

	$('.option').click(function () {
		var id = $(this).attr('id');
		var val = $(this).prop('checked');
		current_setting[id] = val;
		save_setting();
	})

	$('.option_input').blur(function () {
		var id = $(this).attr('id');
		var val = $(this).val();
		current_setting[id] = val;
		save_setting();
	});

	$('#before').blur(function () {
		var text = $(this).val();
		// var text = $(this).html();
		if (!text) {
			$('#before').val("");
			$('#after').val("");
			$('#diff').html("");
			// $('#before').text("");
			// $('#after').text("");
			return;
		}

		$('#diff').html("");

		var converted = text.trim();
		var converted_diff = text.trim();
		var logs = [];
		if ($('#is_half:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function (s) { return String.fromCharCode(s.charCodeAt(0) - 65248); });
			console.log(converted_diff);
			console.log(converted);
			if (converted !== converted_diff) {
				logs.push('全角を半角にしました。');
			}
		}
		if ($('#is_ja_full:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/JA/g, 'ＪＡ');
			if (converted !== converted_diff) {
				logs.push('JAを全角にしました。');
			}
		}
		if ($('#is_jittai:checked').length) {
			var replaceChars = [
				['℃', '&#8451;'],
				['ℓ', '&#8467;'],
				['№', '&#8470;'],
				['℡', '&#8481;'],
				['Ⅰ', '&#8544;'],
				['Ⅱ', '&#8545;'],
				['Ⅲ', '&#8546;'],
				['Ⅳ', '&#8547;'],
				['Ⅴ', '&#8548;'],
				['Ⅵ', '&#8549;'],
				['Ⅶ', '&#8550;'],
				['Ⅷ', '&#8551;'],
				['Ⅸ', '&#8552;'],
				['Ⅹ', '&#8553;'],
				['Ⅺ', '&#8554;'],
				['Ⅻ', '&#8555;'],
				['Ⅼ', '&#8556;'],
				['Ⅽ', '&#8557;'],
				['Ⅾ', '&#8558;'],
				['Ⅿ', '&#8559;'],
				['㈠', '&#12832;'],
				['㈡', '&#12833;'],
				['㈢', '&#12834;'],
				['㈣', '&#12835;'],
				['㈤', '&#12836;'],
				['㈥', '&#12837;'],
				['㈦', '&#12838;'],
				['㈧', '&#12839;'],
				['㈨', '&#12840;'],
				['㈩', '&#12841;'],
				['㈪', '&#12842;'],
				['㈫', '&#12843;'],
				['㈬', '&#12844;'],
				['㈭', '&#12845;'],
				['㈮', '&#12846;'],
				['㈯', '&#12847;'],
				['㈰', '&#12848;'],
				['㈱', '&#12849;'],
				['㈲', '&#12850;'],
				['㈳', '&#12851;']
			];
			converted_diff = converted;
			for (var charSet of replaceChars) {
				converted = converted.replace(new RegExp(charSet[0], 'g'), charSet[1]);
			}
			if (converted !== converted_diff) {
				logs.push('特殊文字を実態参照にしました。');
			}
		}
		if ($('#is_special:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/№/gi, 'No.');
			converted = converted.replace(/：/gi, ' : ');
			converted = converted.replace(/，/g, ",");
			converted = converted.replace(/．/g, ".");
			converted = converted.replace(/\(/g, "（");
			converted = converted.replace(/\)/g, "）");
			converted = converted.replace(/\~/g, "～");
			converted = converted.replace(/™/g, "<sup>TM</sup>");
			converted = converted.replace(/㍉/g, "ミリ");
			converted = converted.replace(/㎝/g, "cm");
			converted = converted.replace(/㎡/g, "m<sup>2</sup>");
			converted = converted.replace(/Ⅰ/g, "1");
			converted = converted.replace(/Ⅱ/g, "2");
			converted = converted.replace(/Ⅲ/g, "3");
			converted = converted.replace(/Ⅳ/g, "4");
			converted = converted.replace(/Ⅴ/g, "5");
			converted = converted.replace(/Ⅵ/g, "6");
			converted = converted.replace(/Ⅶ/g, "7");
			converted = converted.replace(/Ⅷ/g, "8");
			converted = converted.replace(/Ⅸ/g, "9");
			converted = converted.replace(/Ⅹ/g, "10");
			converted = converted.replace(/①/g, "（1）");
			converted = converted.replace(/②/g, "（2）");
			converted = converted.replace(/③/g, "（3）");
			converted = converted.replace(/④/g, "（4）");
			converted = converted.replace(/⑤/g, "（5）");
			converted = converted.replace(/⑥/g, "（6）");
			converted = converted.replace(/⑦/g, "（7）");
			converted = converted.replace(/⑧/g, "（8）");
			converted = converted.replace(/⑨/g, "（9）");
			converted = converted.replace(/⑩/g, "（10）");
			converted = converted.replace(/⑪/g, "（11）");
			converted = converted.replace(/⑫/g, "（12）");
			converted = converted.replace(/⑬/g, "（13）");
			converted = converted.replace(/⑭/g, "（14）");
			converted = converted.replace(/⑮/g, "（15）");
			converted = converted.replace(/⑯/g, "（16）");
			converted = converted.replace(/⑰/g, "（17）");
			converted = converted.replace(/⑱/g, "（18）");
			converted = converted.replace(/⑲/g, "（19）");
			converted = converted.replace(/⑳/g, "（20）");
			if (converted !== converted_diff) {
				logs.push('特殊文字を普通文字に変更しました。');
			}
		}

		if ($('#is_tel:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/(\d{2,})\-(\d{2,})\-(\d{2,})/gi, "<a href=\"tel:$1$2$3\" class=\"tel_link\">$1-$2-$3</a>");
			converted = converted.replace(/（(\d{2,})）(\d{2,})\-(\d{2,})/gi, "<a href=\"tel:$1$2$3\" class=\"tel_link\">（$1）$2-$3</a>");
			if (converted !== converted_diff) {
				logs.push('電話番号をリンクにしました。');
			}
		}

		if ($('#is_br_after_maru:checked').length) {
			converted_diff = converted;
			let m = converted.match(/。[^\n]/g);
			if (m) {
				m.forEach(e => {
					converted = converted.replace(new RegExp(e, 'g'), e.replace('。', '。\n'));
				});
			}
			if (converted !== converted_diff) {
				logs.push('「。」のあとは改行しました。');
			}
		}
		if ($('#is_br:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/\n/g, "<br>\n");
			if (converted !== converted_diff) {
				logs.push('改行をBRにしました。');
			}
		}
		if ($('#is_remove_attr:checked').length) {
			converted_diff = converted;
			var target_attrs = $('#remove_target_attrs').val() || '';
			target_attrs.split(',').map(e => {
				return e.trim();
			}).forEach(e => {
				var regex = new RegExp(` ${e}=(".*?")`, 'gi');
				converted = converted.replace(regex, '');
			});
			if (converted !== converted_diff) {
				logs.push('属性を削除しました。');
			}
		}
		if ($('#is_p:checked').length) {
			converted_diff = converted;
			converted = `<p>${converted}</p>`;
			if (converted !== converted_diff) {
				logs.push('pタグで囲みました。');
			}
		}
		if ($('#is_remove_tab:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/\t/g, "");
			if (converted !== converted_diff) {
				logs.push('タブを取り除きました。');
			}
		}
		if ($('#is_line:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/\n/g, "");
			if (converted !== converted_diff) {
				logs.push('1行にしました。');
			}
		}
		if ($('#is_start_space:checked').length) {
			converted_diff = converted;
			converted = converted.replace(/<br>/g, "<br>　");
			converted = converted.replace(/<br>(　+)/g, "<br>　");
			converted = converted.replace(/<p>/g, "<p>　");
			converted = converted.replace(/<p>(　+)/g, "<p>　");
			if (converted !== converted_diff) {
				logs.push('BRとPのあとに全角スペースを入れました。');
			}
		}
		$('#after').val(converted);
		var log_class = 'alert-success';
		if (logs.length === 0) {
			log_class = 'alert-warning';
			logs.push('変更はありません');
		}
		var $logs_wrapper = $('<div class="alert ' + log_class + '" role="alert"></div>');
		$logs_wrapper.html(logs.join('<br>'));
		$('#diff').append($logs_wrapper);
	});

});