<?php
/**
 * @package     Nautik Kickstarter
 * @version     1.0-$Id$
 * @link        http://github.com/gglnx/nautik-kickstarter
 * @author      Dennis Morhardt <info@dennismorhardt.de>
 * @copyright   Copyright 2012, Dennis Morhardt
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

namespace App;

/**
 * Application main class
 */
class Application extends \Nautik\Core\Application {
	/**
	 * With this configuration variable you can enable the debug mode
	 * of the application. All errors will be displayed.
	 */
	public static $debug = true;

	/**
	 * Your MongoDB configuration settings, server location and database
	 */
	public static $database = array("mongodb://localhost", "nautik");

	/**
	 * Default timezone of the application
	 * See the php.net docs for configuration options
	 * @see http://www.php.net/timezones
	 */
	public static $defaultTimezone = "GMT";
	
	/**
	 * Locale of the application
	 * See the php.net docs for configuration options
	 * @see http://www.php.net/setlocale
	 */
	public static $locale = "";

	/**
	 * The location of your application
	 */
	public static $urlBase = "/nautik/";
}
