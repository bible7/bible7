var notFirst = false;

function play_audio() {
	if (!notFirst) {
		var tmpName = $('.bible-title:first').text();
		tmpName = tmpName.replace(/ /g, '');
		var tmpIndex = $('.bible-title.num:first').text();
		tmpIndex = tmpIndex.replace(/ /g, '');
	    player[0].source({
		    type: 'audio',
		    sources: 'http://otzkd2ox3.bkt.clouddn.com/'+tmpName+'第'+tmpIndex+'章.mp3'
		});
		notFirst = true;
	}
	$('.control').hide();
	$('.control.pause').show();
	player[0].play();
}

if ($(".control").length) {
	var player = plyr.setup();
	player[0].on('ended', function(event) {
		if ($('#switch-auto').prop('checked')) {
			window.location.href =  $('.pevious-next.next').attr('href') + '?auto_next';
		}
		player[0].rewind(0);
		$('.control').hide();
		$('.control.play').show();
    });
}
$(document).ready(function(){
	$('body').on('click', '.bible-type-old', function(event) {
		$('.bible-old').show();
		$('.bible-type-old').addClass('selected');
		$('.bible-new').hide();
		$('.bible-type-new').removeClass('selected');
	});
	$('body').on('click', '.bible-type-new', function(event) {
		$('.bible-new').show();
		$('.bible-type-new').addClass('selected');
		$('.bible-old').hide();
		$('.bible-type-old').removeClass('selected');
	});
	$('body').on('click', '.control.play', function() {
		play_audio();
	});
	$('body').on('click', '.control.pause', function() {
		player[0].pause();
		$('.control').hide();
		$('.control.play').show();
	});
	$('#layout').css('min-height', document.documentElement.clientHeight);
	$('body').on('click', '.bible-title', function() {
		$('.play-pause:visible').click();
	})
	setTimeout(function() {
		$('.bible-content-tips').fadeOut();
	}, 1500);
});
