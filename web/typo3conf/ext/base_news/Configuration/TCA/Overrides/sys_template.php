<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'base_news',
    'Configuration/TypoScript',
    'News Custom Settings'
);
