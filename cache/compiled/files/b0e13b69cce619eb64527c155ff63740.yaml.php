<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/user/config/plugins/git-sync.yaml',
    'modified' => 1528570000,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/ghign0/personaggistorici.git',
        'user' => 'ghign0',
        'password' => 'gitsync-def502009e445085ca31285b914bab12d8c497bea11d689f7d18b42d335baab82d3bbf45f68e23ff1593847762d83bbff3004eaf8b333fa08dec6b3c6d278d20baecc9f08f58d4dca570bb1b08a03c90e5dfd343697eb7ae38a529c6',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
