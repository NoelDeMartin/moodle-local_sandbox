<?php

$addons = [
    'local_sandbox' => [
        'handlers' => [
            'index' => [
                'delegate' => 'CoreMainMenuDelegate',
                'method' => 'view_index',
                'displaydata' => [
                    'title' => 'pluginname',
                    'icon' => 'flask',
                ],
            ],
        ],
        'lang' => [
            ['pluginname', 'local_sandbox'],
        ],
    ],
];
