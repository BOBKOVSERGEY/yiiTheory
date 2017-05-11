<?php

namespace app\controllers;


use app\models\Category;
use app\models\TestForm;
use Yii;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            $this->debug($_GET);
            $this->debug($_POST);
            return 'test';
        }

        $model = new TestForm();
        if ($model->load(Yii::$app->request->post())) {


            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

            $this->view->title = 'Все статьи';

        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {

        $this->view->title = 'Одна статья!'; // вывод тайтла
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевые слова']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание страницы']);

        //$cats = Category::find()->asArray()->where('parent = 691')->all();
        //$cats = Category::find()->asArray()->where(['parent' => 691])->all();
        $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();

        return $this->render('show', compact('cats'));
    }
}