<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Orders;
use app\models\Products;


/* @var $this yii\web\View */
/* @var $model app\models\OrderProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->dropDownList(Arrayhelper::map(Orders::find()->all(), 'id', 't_name'),['prompt' => 'Select Orders']) ?>

    <?= $form->field($model, 'product_id')->dropDownList(Arrayhelper::map(Products::find()->all(), 'id', 'description_ru'),['prompt' => 'Select Orders']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price_sale')->textInput() ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
