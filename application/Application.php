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
namespace App;

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
}
