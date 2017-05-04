<?php

namespace app\controllers;


use yii\base\Controller;

class MyController extends Controller
{
    public function actionIndex()
    {
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        return $this->render('index', ['hello' => $hi, 'names' => $names]);
        //return 'Action Index';
    }
}