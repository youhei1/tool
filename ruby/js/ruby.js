$(function() {

	var convertToRuby = function(kanji, yomi, kakko1, kakko2) {
		var rp1 = '';
		var rp2 = '';
		if (!kanji || !yomi) {
			return '';
		}
		if (kakko1 && kakko2) {
			rp1 = `<rp>${kakko1}</rp>`;
			rp2 = `<rp>${kakko2}</rp>`;
		}
		return `<ruby><rb>${kanji}</rb>${rp1}<rt>${yomi}</rt>${rp2}</ruby>`;
	};

	$('#input input').on('change', function() {
		var kanji = $('#input [name=kanji]').val();
		var yomi = $('#input [name=yomi]').val();
		var kakko1 = $('#input [name=kakko1]').val();
		var kkakko2 = $('#input [name=kkakko2]').val();
		var ruby = convertToRuby(kanji,yomi,kakko1,kkakko2);
		$('#after').val(ruby);
	});

});