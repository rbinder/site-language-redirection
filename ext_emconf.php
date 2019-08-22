<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Language Redirection',
    'description' => 'PSR-15 middleware to redirect user to correct site language via HTTP headers (Accept-Language)',
    'category' => 'misc',
    'shy' => 0,
    'version' => '1.0.3',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearcacheonload' => 0,
    'author' => 'Harald Atteneder',
    'author_email' => 'harald@urbantrout.io',
    'author_company' => 'UT urban trout Software e.U.',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.9.99',
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
