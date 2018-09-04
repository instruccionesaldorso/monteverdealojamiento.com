<?php

$currentApplicationContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . strtoupper((string)$currentApplicationContext) . ']';

$contextConfigFile = PATH_site . '../Configuration/' . (string)$currentApplicationContext . '/Settings.php';
if (file_exists($contextConfigFile)) {
    require($contextConfigFile);
}
