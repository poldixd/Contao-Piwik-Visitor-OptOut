<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModuleContaoPiwikVisitorOptout' => 'system/modules/piwik-visitor-optout/ModuleContaoPiwikVisitorOptout.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'contao_piwik_visitor_optout' => 'system/modules/piwik-visitor-optout/templates',
));
