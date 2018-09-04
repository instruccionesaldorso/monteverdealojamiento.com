<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'base_powermail',
    'Configuration/TypoScript',
    'Powermail Custom Settings'
);
