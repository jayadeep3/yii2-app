<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->renderContent('<h1>Welcome to Yii2 in Docker Swarm!</h1>');
    }
}