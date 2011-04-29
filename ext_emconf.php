<?php

########################################################################
# Extension Manager/Repository config file for ext "piwik".
#
# Auto generated 17-02-2011 19:25
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Piwik - web analytics, new API',
	'description' => 'Adds Piwik JS-Code (http://piwik.org/) to your pages',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.0.4',
	'dependencies' => 'typo3',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Kay Strobach',
	'author_email' => 'typo3@kay-strobach.de',
	'author_company' => 'www.kay-strobach.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-4.6.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:18:"class.tx_piwik.php";s:4:"aee8";s:12:"ext_icon.gif";s:4:"d803";s:17:"ext_localconf.php";s:4:"a9b8";s:14:"ext_tables.php";s:4:"e80b";s:14:"doc/manual.sxw";s:4:"7706";s:21:"static/notracker.html";s:4:"b38e";s:28:"static/notracker_beuser.html";s:4:"3482";s:19:"static/tracker.html";s:4:"4932";s:26:"static/piwik/constants.txt";s:4:"8e03";s:22:"static/piwik/setup.txt";s:4:"f522";}',
	'suggests' => array(
	),
);

?>