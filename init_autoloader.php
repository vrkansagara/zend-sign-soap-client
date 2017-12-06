<?php
// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}else{
    throw new RuntimeException('Unable to load autoload file. Run `php composer.phar install`');
}

