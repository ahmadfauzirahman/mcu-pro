<?php

if (YII_ENV_DEV) {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=tims',
        'username' => 'nurikadewi',
        'password' => 'nurikadewi',
        'charset' => 'utf8',
        'schemaMap' => [
            'pgsql' => [
                'class' => 'yii\db\pgsql\Schema',
                'defaultSchema' => 'mcu' //specify your schema here
            ]
        ],

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=tims',
        'username' => 'nurikadewi',
        'password' => 'nurikadewi',
        'charset' => 'utf8',
        'schemaMap' => [
            'pgsql' => [
                'class' => 'yii\db\pgsql\Schema',
                'defaultSchema' => 'mcu' //specify your schema here
            ]
        ],

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}
