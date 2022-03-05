<?php
require_once __DIR__ . './../../init.php';

use Adianti\Database\TConnection;

$db = TConnection::getDatabaseInfo('database');

return [
    'paths' => [
        'migrations' => './app/database/migrations',
        'seeds' => './app/database/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'dev',
        'dev' => [
            'name' => isset($db['name']) ? $db['name'] : NULL,
            'connection' => TConnection::open('database')
        ],
    ],
];