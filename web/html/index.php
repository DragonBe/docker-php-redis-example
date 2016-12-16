<?php 

ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://devcache1:6379,tcp://devcache1:6379');

session_name('FOOBAR');
session_start();
echo nl2br('<pre>' . session_save_path() . '</pre>' . PHP_EOL);

echo nl2br('Running PHP version: ' . phpversion() . PHP_EOL);

if (!array_key_exists('visit', $_SESSION)) {
    $_SESSION['visit'] = 0;
}
$_SESSION['visit']++;

echo nl2br('You have been here ' . $_SESSION['visit'] . ' times.');
