<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.$url["host"].';dbname='.substr($url["path"], 1),
    'username' => $url["user"],
    'password' => $url["pass"],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
