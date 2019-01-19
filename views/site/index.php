<?php
    $this->title = 'Catpost 2 официальный сайт';
    if (!Yii::$app->user->isGuest)
    {
        $this->title = 'Кабинет пользователя ' . Yii::$app->user->identity->email;
        echo '<h3>' . $this->title . '</h3>';
        echo '<h3>На вашем счету <b style="color:green;">' .  $money . ' рублей</b>.<br>Пополнить счет вы можете ниже.</h3>';
?>
<h3 style="color:red;">Внимание при оплате указывайте email <span style="color:black;"><?= Yii::$app->user->identity->email ?></span>, иначе оплата не пройдет!</h3>

<?php
    }
?>
