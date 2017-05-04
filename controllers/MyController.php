<?php

namespace app\controllers;


use yii\base\Controller;

class MyController extends Controller
{
    public function actionIndex()
    {
        $hi = 'Hello, World!';
        return $this->render('index', ['hello' => $hi]);
        //return 'Action Index';
    }
}