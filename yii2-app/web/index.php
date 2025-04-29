<?php

use yii\web\Application;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = [
    'id' => 'yii2-basic',
    'basePath' => dirname(__DIR__),
    'components' => [
        'request' => [
            'cookieValidationKey' => 'testkey',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
];

(new Application($config))->run();

