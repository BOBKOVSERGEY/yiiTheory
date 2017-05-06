<?php

namespace app\controllers;


class PostController extends AppController
{
    public $layout = 'basic';
    public function actionIndex()
    {
        if(\Yii::$app->request->isAjax) {
            $this->debug($_GET);
            $this->debug($_POST);
            return 'test';
        }
        return $this->render('test');
    }

    public function actionShow()
    {
        //$this->layout = 'basic';
        $this->view->title = 'Одна статья!'; // вывод тайтла
        return $this->render('show');
    }
}