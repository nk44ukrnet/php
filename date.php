<?php
//define timesone

date_default_timezone_set('America/New_York');

//echo date('h-'); //hour
//echo date('i-'); //min
//echo date('s-'); //seconds
//echo date('a'); //am / pm


$timestamp = mktime(10,14,54,9,10,1981);

//echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('next Sunday');
$timestamp4 = strtotime('+2 Days');

echo date('m/d/Y h:i:sa', $timestamp4);