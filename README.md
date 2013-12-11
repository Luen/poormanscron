Poormanscron
============

Internal scheduler for users without a cron application.

Description
-----------

An AJAX/JS script which runs a cron operation from file using normal browser/page requests instead of having to set up a cronjob to request the "cron.php" script. This script inserts a small amount of JavaScript on each page of your site that when a certain amount of time has passed since the last cron run, calls an AJAX request to run the cron tasks. Your users should not notice any kind of delay or disruption when viewing your site. However, this approach requires that your site gets regular traffic/visitors in order to trigger the cron request.

Installation
-----------
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
  <script src="poormanscron.js" type="text/javascript"></script>

Attribution
-----------
Original idea from the Drupal Poormanscron module which is now part of Drupal core. 
https://drupal.org/project/poormanscron
