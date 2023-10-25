<?php
return [
    'employeePolicy' => [
        'create' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'view' => ['admin','employee','supervisor']
    ],
    'rolePolicy' => [
        'create' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'view' => ['admin']
    ],
    'positionPolicy' => [
        'create' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'view' => ['admin','employee','supervisor']
    ]
];
