<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Template extension',
    'description' => 'It builds a Foundation Zurb layout',
    'category' => 'frontend',
    'author' => 'Sergio Catalá',
    'author_email' => 'instruccionesaldorso@gmail.com',
    'author_company' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.99.99',
            'php' => '7.0.0-7.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
);
