jQuery(document).ready(function ($) {
	$('.show-modal1').on('click', function () {
		$.showYtVideo({
			videoId: 'm7KaqMzdtmE'
		});
	});
});
jQuery(document).ready(function ($) {
	$('.show-modal2').on('click', function () {
		$.showYtVideo({
			videoId: 'FCgBB1jbQJg'
		});
	});
});
jQuery(document).ready(function ($) {
	$('.show-modal3').on('click', function () {
		$.showYtVideo({
			videoId: 'xFRm9HiZfMs'
		});
	});
});

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);
		
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();