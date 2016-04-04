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
class ModuleContaoPiwikVisitorOptout extends Module {

	protected $strTemplate = 'contao_piwik_visitor_optout';

	public function generate() {
		if(TL_MODE == 'BE') {
			$t = new BackendTemplate('be_wildcard');
			$t->wildcard = '### Contao Piwik Visitor Optout ###';
			return($t->parse());
		}

		return parent::generate();
	}

	public function compile(){}

}