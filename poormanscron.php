<?php 
$cronfile = "cron.txt"; //place to store last cron time
$cronjob = "cron.php"; //file to run for cron
$interval = 60*15;// between cron


$currenttime = time();
if (!file_exists($cronfile)) { // If cron.txt does not exist
	cron(); // run cron job
	file_put_contents($cronfile,$currenttime); // Create cron.txt
}
$lastcron = intval(file_get_contents($cronfile));
$nextcron = $lastcron + $interval;

if ($_GET["action"] = "cron") {
	if ($currenttime >= $nextcron) { // Success
		cron();// Run cron
		file_put_contents($cronfile,$currenttime); // Write the cron time to file
	} 
} 

function cron() {
	global $cronjob; //file to run for cron
	//if (file_exists($cronjob)) {
		include($cronjob);
	//}
	echo "<b style='color:red;'>success</b><br>";
}


//echo "lastcron ".$lastcron."<br>";
//echo "currenttime ".$currenttime."<br>";
//echo "nextcron ".$nextcron."<br>";

?>