<?php
$db_name = 'onepage_site.db';
$email_option = getopt('', ['email:']);

if(!empty($email_option) && filter_var($email_option['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $email_option['email'];
    shell_exec("sqlite3 -header -csv $db_name 'SELECT * FROM contacts WHERE email=\"$email\";' > feedback.csv");
} else {
    shell_exec("sqlite3 -header -csv $db_name 'SELECT * FROM contacts;' > feedback.csv");
}