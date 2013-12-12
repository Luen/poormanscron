$(document).ready(function() {
	$(window).bind('load', function() {
		var interval = 1; //Seconds between requests/check
		function cron() {
			$.get("poormanscron.php?action=cron", function( data ) {
				//document.write("Checked "+Date()+"<br>"+data);
			});
		}
		cron();
		window.setInterval(function () {cron();}, interval * 1000);
	});
});