<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Отправка письма с подтверждением аккаунта.';
?>

<div class="col-lg-4">
</div>

<div class="col-lg-4">
<h4><?= Html::encode($this->title) ?></h4>
<?php if ($mess != ''): ?>
<h2 style="color:green;"><?= $mess ?></h2>
<?php else: ?>
<?php if(isset($mess1)){echo $mess1;} ?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email') ?>
    <?= Html::submitButton('Отправить письмо') ?>
<?php ActiveForm::end(); ?>
<?php endif; ?>
</div>

<div class="col-lg-4">
</div>