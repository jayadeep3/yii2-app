<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
];