<?php
  // echo date('d'); //Day
  // echo date('m'); //Month
  // echo date('Y'); //year
  // echo date('l'); //day of the JDDayOfWeek

  // echo date('Y/m/d');

  // echo date('h'); //hour
  // echo date('i'); //minute
  //echo date('s'); //seconds
  //echo date('a') //AM or PM


  // Set Time Zone //
  date_default_timezone_set('America/Los_Angeles');
  // echo date('h:i:sa'); Sets real current posix_times

  // $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  // echo $timestamp;

  // echo date('m/d/Y h:i:sa', $timestamp);

  $timestamp2 = strtotime('7:00PM March 22 2016');
  // echo $timestamp2;
  $timestamp3 =  strtotime('tomorrow');
  $timestamp4 =  strtotime('next Sunday');
  $timestamp5 =  strtotime('+2 years');



  echo date('m/d/Y h:i:sa', $timestamp5);

  ?>
