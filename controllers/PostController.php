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
        $post = TestForm::findOne(3);
        $post->email = 'example@example.com';
        $post->save();

        $model = new TestForm();
        //$model->name = 'Автор';
        //$model->email = '111';
        //$model->text = 'Текст сообщения';
        //$model->save();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
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

        $cats = Category::find()->all(); // линивая или отложенная загрузка
        $cats = Category::find()->with('products')->all(); // жадная

        return $this->render('show', compact('cats'));
    }
}