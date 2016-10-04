<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Project specific theme extension',
    'description' => 'Description for ext',
    'category' => 'Theme',
    'author' => 'Josef Glatz',
    'author_email' => 'jousch@jousch.com',
    'author_company' => 'http://jousch.com',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'excludeFromUpdates',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.0.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '8.3.0-8.99.99',
                ],
            'conflicts' =>
                [
                    'css_styled_content' => '',
                ],
            'suggests' =>
                [
                    'felogin' => '',
                    'fluid_styled_content' => '',
                    'form' => '',
                    'formhandler' => '',
                    'realurl' => '',
                    'logging' => '',
                    'news' => '',
                    'piwik' => '',
                    'gridelements' => '',
                    'page_speed' => '',
                    'rx_shariff' => '',
                    'sourceopt' => '',
                    'static_info_tables' => '',
                    't3monitoring_client' => '',
                    'tt_address' => '',
                    'vhs' => '',
                ],
        ],
    'autoload' =>
        [
            'psr-4' =>
                [
                    'JosefGlatz\\Theme\\' => 'Classes',
                ],
        ],
    'autoload-dev' =>
        [
            'psr-4' =>
                [
                    'JosefGlatz\\Theme\\Tests\\' => 'Tests',
                ],
        ],
];
