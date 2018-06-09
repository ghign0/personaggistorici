<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/im2u4zhy/public_html/user/plugins/markdown-fontawesome/blueprints.yaml',
    'modified' => 1528559663,
    'data' => [
        'name' => 'Markdown Font Awesome',
        'version' => '1.0.1',
        'description' => 'Adds support for Font Awesome icons in Markdown using :emoji: syntax',
        'icon' => 'flag',
        'author' => [
            'name' => 'Joshua Lotz',
            'email' => 'joshualotz@gmail.com',
            'url' => 'https://github.com/yoshikin'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];