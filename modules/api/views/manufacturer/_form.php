<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacturer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manufacturer-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]
    	);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <!-- 'logo')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
