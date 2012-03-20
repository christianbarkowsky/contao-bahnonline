<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Christian Barkowsky 2008-2012
 * @author     Christian Barkowsky <http://www.christianbarkowsky.de>
 * @package    BahnOnline
 * @license    LGPL
 * @filesource
 */


class ModuleBahnOnline extends Module
{
	protected $strTemplate = 'mod_bahn_online';


	/**
	 * Display a wildcard in the back end
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### Bahn online ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Compile
	 */
	protected function compile()
	{
		if (version_compare('2.9.0', $GLOBALS['TL_CONFIG']['latestVersion'], '<'))
		{
			$GLOBALS['TL_CSS'][] = 'plugins/calendar/css/calendar.css';
			$GLOBALS['TL_JAVASCRIPT'][] = 'plugins/calendar/js/calendar.js';
		}
		else
		{
			$GLOBALS['TL_CSS'][] = 'plugins/calendar/calendar.css';
			$GLOBALS['TL_JAVASCRIPT'][] = 'plugins/calendar/calendar.js';
		}

		$this->Template->bahnonline_from = $GLOBALS['TL_LANG']['MSC']['bahnonline_from'];
		$this->Template->bahnonline_from_alt = $GLOBALS['TL_LANG']['MSC']['bahnonline_from_alt'];
		$this->Template->bahnonline_to = $GLOBALS['TL_LANG']['MSC']['bahnonline_to'];
		$this->Template->bahnonline_to_alt = $GLOBALS['TL_LANG']['MSC']['bahnonline_to_alt'];
		$this->Template->bahnonline_date = $GLOBALS['TL_LANG']['MSC']['bahnonline_date'];
		$this->Template->bahnonline_date_alt = $GLOBALS['TL_LANG']['MSC']['bahnonline_date_alt'];
		$this->Template->bahnonline_time = $GLOBALS['TL_LANG']['MSC']['bahnonline_time'];
		$this->Template->bahnonline_time_alt = $GLOBALS['TL_LANG']['MSC']['bahnonline_time_alt'];
		$this->Template->bahnonline_departure = $GLOBALS['TL_LANG']['MSC']['bahnonline_departure'];
		$this->Template->bahnonline_arrival = $GLOBALS['TL_LANG']['MSC']['bahnonline_arrival'];
		$this->Template->bahnonline_search = $GLOBALS['TL_LANG']['MSC']['bahnonline_search'];
		$this->Template->bahnonline_from_input = $GLOBALS['TL_LANG']['MSC']['bahnonline_from_input'];
		$this->Template->bahnonline_to_input = $GLOBALS['TL_LANG']['MSC']['bahnonline_to_input'];
	}
}

?>