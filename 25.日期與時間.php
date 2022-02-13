<?

// echo date('d'); // Day
// echo date('m'); // Month
// echo date('Y'); // Year
// echo date('l'); // Day of the week

// echo date('h'); // Hour
// echo date('i'); // Min
// echo date('s'); // Seconds
// echo date('a'); // AM or PM

// Print current date
echo date('Y-m-d H:i:s') . '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);

// Print current timestamp
echo time() . '<br>';

// Set Time Zone
date_default_timezone_set("Asia/Taipei");
