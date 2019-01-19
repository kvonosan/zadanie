<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация нового пользователя.';
?>

<div class="col-lg-4">
</div>

<div class="col-lg-4">
<h2><?= Html::encode($this->title) ?></h2>
<?php if ($mess != ''): ?>
<h2 style="color:green;"><?= $mess ?></h2>
<?php else: ?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($register_model, 'email') ?>
    <?= $form->field($register_model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Регистрация') ?>
<?php ActiveForm::end(); ?>
<?php endif; ?>
</div>

<div class="col-lg-4">
</div>