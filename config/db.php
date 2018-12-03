<?php
$dbPath = dirname(__DIR__).'/dev.sqlite3';
return [
    'class' => 'yii\db\Connection',
    'dsn' => "sqlite:{$dbPath}",
    // 'username' => 'root',
    // 'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
