<?php 
$cronfile = 'cron.txt'; //place to store last cron time
$cronjob = "cron.php"; //file to run for cron
$interval = 60;//seconds between cron

$currenttime = time();
$lastcron = file_get_contents($cronfile);
$nextcron = $lastcron+$interval;

if ($_GET["action"] = "cron") {
	if ($currenttime >= $nextcron) { // Success
		// Run cron
		include($cronjob);
		// Write the crontime to file
		file_put_contents($cronfile,$currenttime);
		echo "<b style='color:red;'>success</b><br>";
	} 
} 
//echo "lastcron ".$lastcron."<br>";
//echo "currenttime ".$currenttime."<br>";
//echo "nextcron ".$nextcron."<br>";

?>