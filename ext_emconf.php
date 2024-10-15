<?php
$EM_CONF['preview'] = [
    'title' => 'Preview',
    'description' => 'Generate URLs that grant access to hidden languages without a backend login',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearCacheOnLoad' => 0,
    'author' => 'Marc Willmann',
    'author_email' => 'mw@f7.de',
    'author_company' => 'F7 Media GmbH',
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '13.1.0-13.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
