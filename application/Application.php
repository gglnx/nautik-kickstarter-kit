<?php
/**
 * @package     PROJECT NAME
 * @version     VERSION
 * @link        URL
 * @author      YOUR NAME <YOUR MAIL>
 * @copyright   Copyright YEAR, YOUR NAME
 */

/**
 * Namespace
 */
namespace Application;

/**
 * Application main class
 */
class Application extends \Nautik\Nautik {
	/**
	 * With this configuration variable you can enable the debug mode
	 * of the application. All errors will be displayed.
	 */
	public static $debug = true;

	/**
	 * Default timezone of the application
	 * See the php.net docs for configuration options
	 *
	 * @see http://www.php.net/timezones
	 */
	public static $defaultTimezone = "GMT";
	
	/**
	 * Locale of the application
	 * See the php.net docs for configuration options
	 *
	 * @see http://www.php.net/setlocale
	 */
	public static $locale = "";
	
	/**
	 * Default route
	 * Used to catch not found routes and display an 404 error page
	 */
	public static $defaultRoute = ['_controller' => 'Errors', '_action' => '404'];
}
