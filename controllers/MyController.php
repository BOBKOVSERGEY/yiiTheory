<?php

namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        if (!$id) $id = 'nick';
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
       // return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
        // my/blog-post and my/blog-post-next
        return 'BlogPost';
    }
}