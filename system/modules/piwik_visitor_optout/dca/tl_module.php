<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao-Piwik-Visitor-OptOut
 * Copyright (C) 2013 Nils Poltmann
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  Nils Poltmann
 * @author     Nils Poltmann
 * @package    Contao-Piwik-Visitor-OptOut
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['contao_piwik_visitor_optout'] = 'name,type;{title_legend},headline;{piwik_visitor_optout_settings},piwik_visitor_optout_url;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['piwik_visitor_optout_url'] = array
(
	'exclude'	=> true,
	'label'		=> &$GLOBALS['TL_LANG']['tl_module']['piwik_visitor_optout_url'],
	'exclude'	=> true,
	'inputType'	=> 'text',
	'eval'		=> array(
		'mandatory'	=> true,
		'rgxp'		=> 'url '
	)
);