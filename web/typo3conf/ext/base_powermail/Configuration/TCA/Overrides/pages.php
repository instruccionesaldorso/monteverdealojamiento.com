<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'base_powermail',
    'Configuration/TSconfig/page.tsconfig',
    'Powermail Custom Settings'
);
