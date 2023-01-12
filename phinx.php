<?php

require_once 'resources/bootstrap.php';

$databaseArray = [
    'adapter' => DATABASE['driver'],
    'name' => DATABASE['database'],
    'user' => DATABASE['username'],
    'pass' => DATABASE['password'],
];
$databaseArray = array_merge(DATABASE, $databaseArray);

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_environment' => 'default',
        'default' => $databaseArray
    ],
    'templates' => [
        'file' => 'vendor/robmorgan/phinx/src/Phinx/Migration/Migration.up_down.template.php.dist'
    ],
    'migration_base_class' => '\Database\Migration',
    'version_order' => 'creation'
];
