<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");
if(TYPO3_MODE=='FE') {
	require_once(t3lib_extMgm::extPath('piwik').'class.tx_piwik.php');
	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'tx_piwik->contentPostProc_output';
} 
?>