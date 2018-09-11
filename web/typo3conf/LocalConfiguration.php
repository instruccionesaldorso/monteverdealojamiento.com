<?php
return [
    'BE' => [
        'debug' => '',
        'explicitADmode' => 'explicitAllow',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:5:{s:9:"loginLogo";s:52:"EXT:tmpl_foundation/Resources/Public/Images/logo.png";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'base_powermail' => 'a:0:{}',
            'belog' => 'a:0:{}',
            'beuser' => 'a:0:{}',
            'context_help' => 'a:0:{}',
            'css_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'filemetadata' => 'a:0:{}',
            'fluid_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'func' => 'a:0:{}',
            'go_maps_ext' => 'a:4:{s:15:"include_library";s:0:"";s:16:"include_manually";s:1:"0";s:8:"footerJS";s:0:"";s:17:"googleMapsLibrary";s:0:"";}',
            'gridelements' => 'a:3:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";}',
            'info' => 'a:0:{}',
            'info_pagetsconfig' => 'a:0:{}',
            'linkvalidator' => 'a:0:{}',
            'lowlevel' => 'a:0:{}',
            'mask' => 'a:9:{s:4:"json";s:62:"typo3conf/ext/tmpl_foundation/Resources/Private/Data/mask.json";s:18:"backendlayout_pids";s:3:"0,1";s:7:"content";s:74:"typo3conf/ext/tmpl_foundation/Resources/Private/Templates/Extensions/mask/";s:7:"layouts";s:72:"typo3conf/ext/tmpl_foundation/Resources/Private/Layouts/Extensions/mask/";s:8:"partials";s:73:"typo3conf/ext/tmpl_foundation/Resources/Private/Partials/Extensions/mask/";s:7:"backend";s:82:"typo3conf/ext/tmpl_foundation/Resources/Private/Templates/Extensions/mask/backend/";s:15:"layouts_backend";s:80:"typo3conf/ext/tmpl_foundation/Resources/Private/Layouts/Extensions/mask/backend/";s:16:"partials_backend";s:81:"typo3conf/ext/tmpl_foundation/Resources/Private/Partials/Extensions/mask/backend/";s:7:"preview";s:0:"";}',
            'min' => 'a:0:{}',
            'news' => 'a:22:{s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"1";s:21:"contentElementPreview";s:1:"1";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:4:"none";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"dateTimeNotRequired";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"mediaPreview";s:1:"1";s:20:"advancedMediaPreview";s:1:"0";s:24:"showAdministrationModule";s:1:"1";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:317:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,categories,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:25:"showMediaDescriptionField";s:1:"0";s:6:"useFal";s:1:"1";}',
            'phpmyadmin' => 'a:5:{s:12:"hideOtherDBs";s:1:"1";s:9:"uploadDir";s:21:"uploads/tx_phpmyadmin";s:10:"allowedIps";s:0:"";s:12:"useDevIpMask";s:1:"0";s:10:"ajaxEnable";s:1:"1";}',
            'powermail' => 'a:9:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";s:28:"enableTableGarbageCollection";s:1:"0";}',
            'realurl' => 'a:7:{s:10:"configFile";s:34:"typo3conf/RealURLConfiguration.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:17:"segTitleFieldList";s:0:"";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"2";s:19:"enableChashUrlDebug";s:1:"0";}',
            'reports' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rsgoogleanalytics' => 'a:0:{}',
            'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:5:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";s:30:"listShowTaskDescriptionAsHover";s:1:"1";}',
            'setup' => 'a:0:{}',
            't3editor' => 'a:0:{}',
            'tmpl_foundation' => 'a:0:{}',
            'tstemplate' => 'a:0:{}',
            'version' => 'a:0:{}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
            'wizard_crpages' => 'a:0:{}',
            'workspaces' => 'a:0:{}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'ca',
                'fr',
                'es',
            ],
        ],
    ],
    'FE' => [
        'debug' => '',
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => 1,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'INSTALL' => [],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => '1',
        'enableDeprecationLog' => '',
        'encryptionKey' => 'dummyEncriptionKey',
        'fileCreateMask' => '0660',
        'folderCreateMask' => '2770',
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Monte Verde',
        'sqlDebug' => '0',
        'systemLogLevel' => '2',
    ],
];
