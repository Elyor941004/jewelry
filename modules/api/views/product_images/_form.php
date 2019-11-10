<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use app\models\Products;
/* @var $this yii\web\View */
/* @var $model app\models\ProductImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-images-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'product_id')->dropDownList(Arrayhelper::map(Products::find()->all(), 'id', 'description_ru'),['prompt' => 'Select Products']) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'is_main')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
