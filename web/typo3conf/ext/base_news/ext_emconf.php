<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Custom news settings',
    'description' => 'It builds the layout for news articles',
    'category' => 'frontend',
    'author' => 'Sergio Catalá',
    'author_email' => 'instruccionesaldorso@gmail.com',
    'author_company' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
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
