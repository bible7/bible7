
$(document).ready(function(){
	var bgIndex = 1;
	setInterval(function() {
		$('#my-bg .img'+bgIndex).fadeOut('normal', function() {
			bgIndex = bgIndex % 5 + 1;
			$('#my-bg .img'+bgIndex).fadeIn();
		});
	}, 3000);
});
