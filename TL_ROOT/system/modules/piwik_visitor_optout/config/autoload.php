<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Piwik_visitor_optout
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModuleContaoPiwikVisitorOptout' => 'system/modules/piwik_visitor_optout/ModuleContaoPiwikVisitorOptout.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'contao_piwik_visitor_optout' => 'system/modules/piwik_visitor_optout/templates',
));
