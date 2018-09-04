<?php
defined('TYPO3_MODE') or die();

/**
 * Fieldtypes
 * 		RangeSlider
 */
$typeSettingsMultiple =
    'pages, title, type, settings,
--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_fields.palette1;1,
--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_fields.sheet1,
--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_fields.validation_title;21,
--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_fields.prefill_title;33,
--palette--;Layout;41,
description,
--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_fields.marker_title;5,
--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, sys_language_uid;;;;1-1-1,
l10n_parent, l10n_diffsource, hidden;;1,starttime, endtime';

$TCA['tx_powermail_domain_model_fields']['types']['RangeSlider']['showitem'] = $typeSettingsMultiple;