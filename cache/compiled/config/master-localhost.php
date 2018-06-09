<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1528570002,
    'checksum' => '498c8286b4b20c953ed8fb7089f58d7c',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1528568920
            ],
            'plugins/git-sync' => [
                'file' => 'user/config/plugins/git-sync.yaml',
                'modified' => 1528570000
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1528568920
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1528568920
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1528568920
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1528568919
            ],
            'themes/quark-open-publishing' => [
                'file' => 'user/config/themes/quark-open-publishing.yaml',
                'modified' => 1528568920
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1528568869
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1528568869
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1528568869
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1528568869
            ]
        ],
        'user/plugins' => [
            'plugins/shortcode-ui' => [
                'file' => 'user/plugins/shortcode-ui/shortcode-ui.yaml',
                'modified' => 1528569132
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1528569117
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1528569083
            ],
            'plugins/auto-date' => [
                'file' => 'user/plugins/auto-date/auto-date.yaml',
                'modified' => 1528569015
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1528569044
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1528569142
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1528569042
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1528569038
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1528569115
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/youtube.yaml',
                'modified' => 1528569164
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1528568924
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1528569014
            ],
            'plugins/git-sync' => [
                'file' => 'user/plugins/git-sync/git-sync.yaml',
                'modified' => 1528569057
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1528569120
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1528569017
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1528569119
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1528569140
            ],
            'plugins/markdown-fontawesome' => [
                'file' => 'user/plugins/markdown-fontawesome/markdown-fontawesome.yaml',
                'modified' => 1528569114
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1528569121
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1528569016
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/external_links.yaml',
                'modified' => 1528569040
            ],
            'plugins/tntsearch' => [
                'file' => 'user/plugins/tntsearch/tntsearch.yaml',
                'modified' => 1528569144
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/page-inject.yaml',
                'modified' => 1528569116
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'shortcode-ui' => [
                'enabled' => true,
                'theme' => [
                    'tabs' => 'default'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'auto-date' => [
                'enabled' => true
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500,
                'enable_json_feed' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'youtube' => [
                'enabled' => true,
                'built_in_css' => true,
                'add_editor_button' => true,
                'player_parameters' => [
                    'autoplay' => 0,
                    'cc_load_policy' => 0,
                    'color' => 'red',
                    'controls' => 1,
                    'disablekb' => 0,
                    'enablejsapi' => 0,
                    'fs' => 1,
                    'hl' => '',
                    'iv_load_policy' => 1,
                    'loop' => 0,
                    'modestbranding' => 0,
                    'origin' => '',
                    'playsinline' => 0,
                    'rel' => 1,
                    'showinfo' => 1,
                    'vq' => 'default'
                ],
                'privacy_enhanced_mode' => false
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both'
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'git-sync' => [
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
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'sendmail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'markdown-fontawesome' => [
                'enabled' => true
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'regex',
                'custom_shortcodes' => NULL,
                'fontawesome' => [
                    'load' => true,
                    'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'
                ]
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'include_current' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'external_links' => [
                'enabled' => true,
                'built_in_css' => true,
                'weight' => 0,
                'exclude' => [
                    'classes' => [
                        0 => 'exclude'
                    ],
                    'domains' => NULL
                ],
                'links' => [
                    'www' => false,
                    'redirects' => false,
                    'schemes' => [
                        0 => 'http',
                        1 => 'https',
                        2 => 'ftp',
                        3 => 'irc',
                        4 => 'mailto',
                        5 => 'news',
                        6 => 'nntp',
                        7 => 'rtsp',
                        8 => 'sftp',
                        9 => 'ssh',
                        10 => 'tel',
                        11 => 'telnet',
                        12 => 'webcal'
                    ]
                ],
                'process' => true,
                'title' => false,
                'no_follow' => true,
                'target' => '_blank',
                'mode' => 'active'
            ],
            'tntsearch' => [
                'enabled' => true,
                'search_route' => '/search',
                'query_route' => '/s',
                'built_in_css' => true,
                'built_in_js' => true,
                'built_in_search_page' => true,
                'search_type' => 'auto',
                'fuzzy' => false,
                'phrases' => true,
                'stemmer' => 'default',
                'display_route' => true,
                'display_hits' => true,
                'display_time' => true,
                'live_uri_update' => true,
                'limit' => 20,
                'min' => 3,
                'snippet' => 300,
                'index_page_by_default' => true,
                'filter' => [
                    'items' => [
                        0 => 'root@.descendants'
                    ]
                ],
                'powered_by' => true,
                'search_object_type' => 'Grav'
            ],
            'page-inject' => [
                'enabled' => true,
                'active' => true,
                'processed_content' => true
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
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
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Europe/Rome',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/personaggi',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'quark-open-publishing',
                'order' => [
                    'by' => 'default',
                    'dir' => 'desc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => 'm/d/Y h:i a',
                    'short' => 'D, d M Y G:i:s',
                    'long' => 'l jS \\of F g:i A'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '1',
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 134217728
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => 'ICXgSbuZyrMQGJ'
        ],
        'themes' => [
            'quark-open-publishing' => [
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
        ]
    ]
];
