<?php
    //$this->title = 'Одна статья';
    use app\components\MyWidget;
?>

<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show action</h1>
<?php //echo MyWidget::widget(); ?>

<?php MyWidget::begin(); ?>
    <h1>привет, мир</h1>
<?php MyWidget::end(); ?>

<?php foreach ($cats as $cat): ?>
    <h2><?php echo $cat->title;?></h2>
    <?php
    $products = $cat->products;
    foreach ($products as $product) {
        echo '<ul>';
            echo '<li>' . $product->title . '</li>';
        echo '</ul>';
    }
    ;?>
<?php endforeach; ?>
<?php debug($cats); ?>

<?php //echo count($cats->products); ?>

<?php //debug($cats); ?>

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