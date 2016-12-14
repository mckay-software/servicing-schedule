<?php

/*
Plugin Name: Servicing Schedule
*/

require_once 'vendor/autoload.php';

add_action('init', function () {
    \Schedule\HelloWorld::log();
});
