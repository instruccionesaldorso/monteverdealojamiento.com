<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'tmpl_foundation',
    'Configuration/TSconfig/page.tsconfig',
    'Boilerplate Settings'
);
