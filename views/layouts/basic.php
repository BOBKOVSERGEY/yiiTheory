<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo Html::csrfMetaTags(); ?>
    <title><?php echo $this->title; ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">

            <ul class="nav nav-pills">
                <li role="presentation" class="active">
                    <?php echo Html::a('Главная', '/web/'); ?>
                </li>
                <li role="presentation">
                    <?php echo Html::a('Статьи', ['post/index']); ?>
                </li>
                <li role="presentati(isset($this->blocks['block1']))on">
                    <?php echo Html::a('Статья', ['post/show']); ?>
                </li>
            </ul>
            <?php if (isset($this->blocks['block1'])) : ?>
                <?php echo $this->blocks['block1'];?>
            <?php endif;?>
            <?php echo $content; ?>
        </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

