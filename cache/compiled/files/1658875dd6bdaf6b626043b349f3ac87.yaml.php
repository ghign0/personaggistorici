<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/im2u4zhy/public_html/user/config/site.yaml',
    'modified' => 1528560099,
    'data' => [
        'title' => 'Personaggi Storici',
        'default_lang' => 'it',
        'author' => [
            'name' => 'marco',
            'email' => 'info@personaggistorici.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Personaggi storici ',
            'keywords' => '\'personaggi,storici,personaggi storici, storia,'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
