<?php

    // echo date('d'); // day(number)
    // echo date('m'); //month (number)
    // echo date('Y'); //Year (long) - y for short

    // echo date('D'); // day of week (short) ex. Mon
    // echo date('M'); // Month (short) ex. Mar
    // echo date('y'); // Year (short) ex. 23

    // echo date ('l'); // Day of week 

    // echo date('h'); // Hour
    // echo date('m'); // Minutes
    // echo date('s'); // Seconds
    // echo date('a') // AM / PM

    //Set Time Zone
    date_default_timezone_set('America/Toronto'); //Americas / Toronto timezone

    // echo date('h:i:sa'); // 12:05:42pm (12 hour , 5 seconds, 42 milliseconds : pm)

    
    # Unix Timestamp
            // Jan 1st 1970 -> Number of SECONDS passed since this date - makes all timezones around the world not matter when storing time

    $timestamp = mktime(1, 22, 33, 5, 11, 1991); // Hours / Mins/ Seconds / months/ Days/ Years

    echo 'Timestamp: ' . $timestamp . '<br>';

    echo 'Date Converted from Timestamp: ' . date('m/d/Y h:i:sa', $timestamp) . '<br>';

    //Converting Dates to timestamps

    $timestamp2 = strtotime('7:00pm March 13 2023');

    echo 'Timestamp Converted from date : ' . $timestamp2 . '<br>'; 

    echo 'Converted from above timestamp : ' . date('m/d/Y h:i:sa' , $timestamp2) . '<br>';

    $timestamp3 = strtotime('tomorrow');

    echo 'What is the date tomorrow: ' . date('m/d/Y' , $timestamp3) . '<br>'; // Tomorrow

    $timestamp4 = strtotime('Next Sunday');

    echo "What is the date 'Next Sunday' : " . date('m/d/Y', $timestamp4) . '<br>';

    $timestamp5 = strtotime('+2 months');
    $timestamp6 = strtotime('+2 days');

    echo 'What is the date in 2 Days/Months : ' . $timestamp6;
