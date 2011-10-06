<?php

########################################################################
# Extension Manager/Repository config file for ext "wec_ebible".
#
# Auto generated 05-10-2011 17:09
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'WEC eBible Tools',
	'description' => 'Provides access to eBible.com toolkit which includes Scripture parsing and Verse of the Day.',
	'category' => 'plugin',
	'author' => 'Web-Empowered Church Team',
	'author_email' => 'ebible@webempoweredchurch.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'Christian Technology Ministries International Inc.',
	'version' => '3.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:26:"class.tx_wecebible_api.php";s:4:"5b3c";s:36:"class.tx_wecebible_itemsProcFunc.php";s:4:"1276";s:12:"ext_icon.gif";s:4:"da4e";s:17:"ext_localconf.php";s:4:"7cb9";s:14:"ext_tables.php";s:4:"85eb";s:14:"ext_tables.sql";s:4:"8e6d";s:16:"locallang_db.xml";s:4:"713c";s:29:"csh/locallang_csh_feusers.xml";s:4:"2b15";s:14:"doc/manual.sxw";s:4:"b34c";s:14:"pi2/ce_wiz.gif";s:4:"7a47";s:30:"pi2/class.tx_wecebible_pi2.php";s:4:"8b23";s:38:"pi2/class.tx_wecebible_pi2_wizicon.php";s:4:"eb9b";s:17:"pi2/locallang.xml";s:4:"5895";s:20:"pi2/translation.tmpl";s:4:"11e0";s:20:"static/constants.txt";s:4:"312c";s:16:"static/setup.txt";s:4:"513f";}',
	'suggests' => array(
	),
);

?>