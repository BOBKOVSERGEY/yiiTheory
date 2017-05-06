<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Тест Action</h1>

<?php
    //debug($model);
?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
<?php echo $form->field($model, 'name')->label('Имя')->passwordInput(); ?>
<?php echo $form->field($model, 'email')->input('email'); ?>
<?php echo $form->field($model, 'text')->label('Ваше сообщение')->textarea(['rows' => 5]); ?>
<?php echo Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end(); ?>
