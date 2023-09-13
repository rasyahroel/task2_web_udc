<?php

// REQUIRED
// Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
date_default_timezone_set('Asia/Jakarta');
// Include the store hours class
require __DIR__ . '/StoreHours.class.php';

// REQUIRED
// Define daily open hours
// Must be in 24-hour format, separated by dash
// If closed for the day, leave blank (ex. sunday)
// If open multiple times in one day, enter time ranges separated by a comma
$hours = array(
    'mon' => array('13:00-22:00'),
    'tue' => array('13:00-22:00'),
    'wed' => array('13:00-22:00'),
    'thu' => array('13:00-22:00'),
    'fri' => array('14:00-22:00'),
    'sat' => array('00:00-00:00'),
    'sun' => array('00:00-00:00')
);

// OPTIONAL
// Add exceptions (great for holidays etc.)
// MUST be in a format month/day[/year] or [year-]month-day
// Do not include the year if the exception repeats annually
$exceptions = array(
    '2/24'  => array('11:00-18:00'),
    '10/18' => array('11:00-16:00', '18:00-20:30')
);

$config = array(
    'separator'  => ' - ',
    'join'   => ' and ',
    'format' => 'g:ia',
    'overview_weekdays'  => array(
        'Mon' => 'Monday',
        'Tue' => 'Tuesday',
        'Wed' => 'Wednesday',
        'Thu' => 'Thursday',
        'Fri' => 'Friday',
        'Sat' => 'Saturday',
        'Sun' => 'Sunday'
    )
);

// Instantiate class
$store_hours = new StoreHours($hours, $exceptions, $config);

// Display open / closed message
if ($store_hours->is_open()) {
    echo "<h2 class='open'><em>Yes, we're open!<br>Today's hours are " . $store_hours->hours_today() . ".</em></h2>";
} else {
    echo "<h2 class='close'><em>Sorry, we're closed.<br>Today's hours are " . $store_hours->hours_today() . ".</em></h2>";
}
