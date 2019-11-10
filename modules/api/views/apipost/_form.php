<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\Apipost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apipost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
