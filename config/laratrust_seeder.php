<?php

return [
    'role_structure' => [
        'super_admin' => [
            'projects' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            
        ],
        'administrator' => [],
        'user' => [],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
