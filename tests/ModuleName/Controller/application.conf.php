<?php
return [
    "modules" => [
        "ModuleName",
    ],
    'module_listener_options' => [
        "module_paths" => [
            "ModuleName" => dirname(dirname(dirname(__DIR__))),
        ],
        'config_glob_paths' => [],
    ],
];
