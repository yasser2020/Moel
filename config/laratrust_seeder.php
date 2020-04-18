<?php

return [
    'role_structure' => [
        'super_admin' => [
            'projects' => 'c,r,u,d',
            'offers' => 'c,r,u,d',
            'social_networks' => 'c,r,u,d',
            'clientAdvantages' => 'c,r,u,d',
            'freelancerAdvantages' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'freelancers' => 'c,r,u,d',
            'freelancerServices' => 'c,r,u,d',
            'clientServices' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            
        ],
        'administrator' => [],
        'user' => [],
        'client'=>[],
        'freelancer'=>[],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
