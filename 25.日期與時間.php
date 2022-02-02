// Print current date
echo date('Y-m-d H:i:s').'<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s');

// Print current timestamp
echo time().'<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php