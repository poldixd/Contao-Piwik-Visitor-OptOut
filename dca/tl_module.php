<?php

/**
 * contao-piwik-visitor-optout
 *
 * Copyright (c) 2011, 2014 agentur fipps e.K
 *
 * @copyright 2016 Nils Poltmann
 * @author Nils Poltmann
 * @package poldixd/contao-piwik-visitor-optout
 * @license LGPL
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['contao_piwik_visitor_optout'] = 'name,type;{title_legend},headline;{piwik_visitor_optout_settings},piwik_visitor_optout_url;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['piwik_visitor_optout_url'] = array
(
	'exclude'	=> true,
	'label'		=> &$GLOBALS['TL_LANG']['tl_module']['piwik_visitor_optout_url'],
	'inputType'	=> 'text',
	'eval'		=> array(
		'mandatory'	=> true,
		'rgxp'		=> 'url'
	),
	'sql'                     => "varchar(255) NOT NULL default ''"
);