<?php

/*
Plugin Name: Servicing Schedule
*/

require_once 'vendor/autoload.php';

$shortcode = new \Schedule\ShortCode('sss');

add_action('init', function () use ($shortcode) {
    \Schedule\HelloWorld::log();
    $shortcode->install();
});
