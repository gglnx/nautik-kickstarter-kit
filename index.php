<?php
/**
 * @package     PROJECT NAME
 * @version     VERSION
 * @link        URL
 * @author      YOUR NAME <YOUR MAIL>
 * @copyright   Copyright YEAR, YOUR NAME
 */

// Paths
define('APP', dirname(__FILE__) . '/application/');
define('VENDOR', dirname(__FILE__) . '/vendor/');

// Load composer autoloader
$composer = include VENDOR . 'autoload.php';
$composer->set("Application", array(dirname(__FILE__)));

// Start application
\Application\Application::run();
