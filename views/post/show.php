<?php
    //$this->title = 'Одна статья';
?>

<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show action</h1>

<? debug($cats); ?>

<button class="btn btn-success" id="btn">Click me...</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php //$this->registerJs('var message = \'Wuff\';
    //$(\'.container\').append(message);', \yii\web\View::POS_LOAD); ?>
<?php $this->registerCss('.container {background: #ccc}');?>

<?php
    $script = <<< JS
    $('#btn').on('click', function() {
      $.ajax({
          url: 'index.php?r=post/index',
          data: {test: '123'},
          type: 'POST',
          success: function(res) {
              console.log(res);
          },
          error: function() {
            alert('Error');
          }
      });
    });
JS;
    $this->registerJs($script);
?>