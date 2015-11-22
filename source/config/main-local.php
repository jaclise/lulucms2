<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.31.193;dbname=lulucms2',
            'username' => 'cms',
            'password' => 'cms',
            'charset' => 'utf8',
			'tablePrefix' => 'lulu_',
            'enableSchemaCache' => true,
            'schemaCache' => 'schemaCache',
        ],

    ],
];
