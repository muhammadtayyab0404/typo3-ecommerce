<?php
return [
    \Malik\Mywebsite\Domain\Model\FrontendUser::class => [
        'tableName' => 'fe_users',
        'properties' => [
            'username' => [
                'fieldName' => 'username',
            ],
            'firstName' => [
                'fieldName' => 'first_name', // 👈 important
            ],
            'lastName' => [
                'fieldName' => 'last_name',
            ],
            'email' => [
                'fieldName' => 'email',
            ],
        ],
    ],
];
