<h1>Show action</h1>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php $this->registerJs('var message = \'Wuff\';
    $(\'.container\').append(message);'); ?>