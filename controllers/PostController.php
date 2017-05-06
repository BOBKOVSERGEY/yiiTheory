<?php

namespace app\controllers;


use app\models\TestForm;

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

        $model = new TestForm();

        $this->view->title = 'Все статьи';

        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
        //$this->layout = 'basic';
        $this->view->title = 'Одна статья!'; // вывод тайтла
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевые слова']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание страницы']);
        return $this->render('show');
    }
}