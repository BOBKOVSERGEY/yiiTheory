<?php

namespace app\controllers;


class PostController extends AppController
{
    public function actionTest()
    {
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

//       $this->debug($names);

        return $this->render('test');

    }
}