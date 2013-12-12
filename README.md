Poormanscron
============

Poormanscron is a poor man's cron - Internal scheduler for users without a cron application.

Description
-----------

An AJAX/JQUERY/JS & PHP script which runs a cron operation from file using normal browser/page requests instead of having to set up a cronjob to request the "cron.php" script. This script inserts a small amount of JavaScript on each page of your site that when a certain amount of time has passed since the last cron run, calls an AJAX request to run the cron tasks. Your users should not notice any kind of delay or disruption when viewing your site. However, this approach requires that your site gets regular traffic/visitors in order to trigger the cron request.

This Poor Man's Cron script also makes use of spambots, search engine indexing robots and alike to run scheduled tasks in approximately regular intervals which allows the automation of tasks via CRON. Written in jQuery and PHP, this script does not use a database; however it does use a .txt file to store the last cron time to check against.

When to use?
-----------

- Your hosting does not have cron

- Free online cron is limited to a few seconds

Also see other simple, online web based cron services such as http://getcron.com or http://webcron.org

Requirements
-----------
- PHP

- Query

- Regular traffic

How it works
-----------

The poor man's cron script is a js script that runs an inifinite loop while it triggers the php file. It uses a counter which ticks every MINUTE and resets after 1440 cycle which roughly equivalent to 24 hours ++ or so.

The default sleeps for a minute and cycles for 1440 rounds.

Installation
-----------

For the scheduler to work, your site needs regular traffic. Currently, the cron does not work on exact time/date and will never be. It is designed for jobs on certain intervals such as  every 30 minutes, every hour or once a day.
This assumes that your site has a web based cron job that needs to be triggered. Be sure to include security and validation to avoid abuse from malicious users.

- Add both JS scripts in your <head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
  <script src="jquery.poormanscron.js" type="text/javascript"></script>
  
- Point 'jquery.poormanscron.js' to your php file.

- Include the scripts you want to run in your 'cron.php' file.

Attribution
-----------
Original idea from the Drupal Poormanscron module which is now part of Drupal core. 
https://drupal.org/project/poormanscron