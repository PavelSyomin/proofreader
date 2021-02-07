<?php
/**
 * Proofreader
 *
 * @package     Proofreader
 * @author      Sergey M. Litvinov (smart@joomlatune.com)
 * @copyright   Copyright (C) 2013-2015 by Sergey M. Litvinov. All rights reserved.
 * @copyright   Copyright (C) 2005-2007 by Alexandr Balashov. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Proofreader master display controller.
 *
 * @package     Proofreader
 */
class ProofreaderController extends JControllerLegacy
{
	/**
	 * The default view for the display method.
	 *
	 * @var string
	 */
	protected $default_view = 'typos';
}