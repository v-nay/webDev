<?php

$getMethod = 'get';
$postMethod = 'post';
$putMethod = 'put';
$deleteMethod = 'delete';

$homeBaseUrl = '/home';
$userBaseUrl = '/users';
$roleBaseUrl = '/roles';
$loginLogsBaseUrl = '/login-logs';
$activityLogsBaseUrl = '/activity-logs';
$languagesBaseUrl = '/languages';
$translationBaseUrl = '/translations';
$emailTemplateBaseUrl = '/email-templates';
$configBaseUrl = '/configs';
$contactsBaseUrl = '/contacts';
$profileBaseUrl = '/profile';
$mailtestBaseUrl = '/mail-test';
$headingBaseUrl = '/headings';

return [
    // routes entered in this array are accessible by any user no matter what role is given
    'permissionGrantedbyDefaultRoutes' => [
        [
            'url' => $homeBaseUrl,
            'method' => $getMethod,
        ],
        [
            'url' => '/logout',
            'method' => $getMethod,
        ],
        [
            'url' => '/languages/set-language/*',
            'method' => $getMethod,
        ],
        [
            'url' => '/miscellaneous/scrap',
            'method' => $getMethod,
        ],
        [
            'url' => $profileBaseUrl,
            'method' => $getMethod,
        ],
        [
            'url' => $profileBaseUrl . '/*',
            'method' => $putMethod,
        ],
        [
            'url' => '/change-password',
            'method' => $getMethod,
        ],
    ],

    // All the routes are accessible by super user by default
    // routes entered in this array are not accessible by super user
    'permissionDeniedToSuperUserRoutes' => [],

    'modules' => [
        [
            'name' => 'Dashboard',
            'icon' => "<i class='fa fa-home'></i>",
            'hasSubmodules' => false,
            'route' => $homeBaseUrl,
        ],
        [
            'name' => 'User Management',
            'icon' => "<i class='fa fa-user'></i>",
            'hasSubmodules' => true,
            'submodules' => [
                [
                    'name' => 'Users',
                    'icon' => "<i class='fa fa-users'></i>",
                    'hasSubmodules' => false,
                    'route' => $userBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Users',
                            'route' => [
                                'url' => $userBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Users',
                            'route' => [
                                'url' => $userBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                        [
                            'name' => 'Reset Password',
                            'route' => [
                                'url' => $userBaseUrl . '/reset-password/*',
                                'method' => $postMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Roles',
                    'icon' => "<i class='fa fa-tags'></i>",
                    'hasSubmodules' => false,
                    'route' => '/roles',
                    'permissions' => [
                        [
                            'name' => 'View Roles',
                            'route' => [
                                'url' => $roleBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Roles',
                            'route' => [
                                'url' => $roleBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'name' => 'Log Management',
            'icon' => "<i class='fa fa-history'></i>",
            'hasSubmodules' => true,
            'submodules' => [
                [
                    'name' => 'Login Logs',
                    'icon' => "<i class='fas fa-sign-in-alt'></i>",
                    'hasSubmodules' => false,
                    'route' => $loginLogsBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Login logs',
                            'route' => [
                                'url' => $loginLogsBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Activity logs',
                    'icon' => "<i class='fas fa-chart-line'></i>",
                    'hasSubmodules' => false,
                    'route' => $activityLogsBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Activity logs',
                            'route' => [
                                'url' => $activityLogsBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],

        [
            'name' => 'System configs',
            'icon' => "<i class='fa fa-cogs' aria-hidden='true'></i>",
            'hasSubmodules' => true,
            'submodules' => [
                [
                    'name' => 'Email Templates',
                    'icon' =>
                        "<i class='fa fa-envelope' aria-hidden='true'></i>",
                    'route' => $emailTemplateBaseUrl,
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Email Templates',
                            'route' => [
                                'url' => $emailTemplateBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Edit Email Templates',
                            'route' => [
                                [
                                    'url' => $emailTemplateBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $emailTemplateBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Email Templates',
                            'route' => [
                                'url' => $emailTemplateBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Configs',
                    'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                    'route' => $configBaseUrl,
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Configs',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Config',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $postMethod,
                            ],
                        ],
                        [
                            'name' => 'Edit Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $putMethod,
                            ],
                        ],
                        [
                            'name' => 'Delete Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'name' => 'Contact Management',
            'icon' => "<i class='fa fa-list'></i>",
            'hasSubmodules' => false,
            'route' => $contactsBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Contact',
                    'route' => [
                        'url' => $contactsBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Contact',
                    'route' => [
                        [
                            'url' => $contactsBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $contactsBaseUrl,
                            'method' => $postMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Edit Contact',
                    'route' => [
                        [
                            'url' => $contactsBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $contactsBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Contact',
                    'route' => [
                        'url' => $contactsBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],
        [
            'name' => 'Heading Management',
            'icon' => "<i class='fa fa-list'></i>",
            'hasSubmodules' => false,
            'route' => $headingBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Heading',
                    'route' => [
                        'url' => $headingBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Heading',
                    'route' => [
                        [
                            'url' => $headingBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $headingBaseUrl,
                            'method' => $postMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Edit Heading',
                    'route' => [
                        [
                            'url' => $headingBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $headingBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Heading',
                    'route' => [
                        'url' => $headingBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],
    ],
];
