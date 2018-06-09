<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/user/config/themes/quark-open-publishing.yaml',
    'modified' => 1528568920,
    'data' => [
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/quark-open-publishing',
                            1 => 'user/themes/quark'
                        ]
                    ]
                ]
            ]
        ],
        'chromeless' => [
            'enabled' => false
        ],
        'display_of_git_sync_repo_link' => 'none',
        'type_of_git_sync_repo_link' => 'view',
        'git_sync_edit_note_text' => 'Have a suggestion or correction?',
        'h5pembedrootpath' => 'https://h5p.org/h5p/embed/',
        'cc_license' => [
            'enabled' => true,
            'type' => 'ccby',
            'icon' => false
        ],
        'displaycustommenus' => [
            'enabled' => false
        ],
        'menu' => [
            0 => [
                'target' => '_self'
            ]
        ],
        'hidehomemenulink' => true,
        'production-mode' => true,
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => false,
        'header-transparent' => false,
        'sticky-footer' => true,
        'blog-page' => '/personaggi',
        'spectre' => [
            'exp' => false,
            'icons' => false
        ]
    ]
];
