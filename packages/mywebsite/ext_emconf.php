<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'MyWebsite',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Malik\\Mywebsite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Muhammad Tayyab',
    'author_email' => 'Tayyab@gmail.com',
    'author_company' => 'Malik',
    'version' => '1.0.0',
];
