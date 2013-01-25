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
include VENDOR . 'autoload.php';

// Load application
include APP . 'Application.php';

// Start application
\App\Application::run();
