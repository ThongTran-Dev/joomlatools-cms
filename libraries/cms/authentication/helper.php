<?php
/**
 * @package     Joomla.Libraries
 * @subpackage  Authentication
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

use Joomla\Registry\Registry;

/**
 * Authentication helper class
 *
 * @since  3.6.3
 */
abstract class JAuthenticationHelper
{
	/**
	 * Get the Two Factor Authentication Methods available.
	 *
	 * @return  array  Two factor authentication methods.
	 *
	 * @since   3.6.3
	 * @deprecated
	 */
	public static function getTwoFactorMethods()
	{
		return array();
	}
}
