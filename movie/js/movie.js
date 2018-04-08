
$(document).ready(function(){
	var bgIndex = 1;
	setInterval(function() {
		$('#my-bg .img'+bgIndex).fadeOut('normal', function() {
			bgIndex = bgIndex % 5 + 1;
			$('#my-bg .img'+bgIndex).fadeIn();
		});
	}, 3000);
	$('body').on('click', '.col-1-2', function(event) {
		var target = $(this).data('target');
		window.location.href = target+'.html';
	});
});
