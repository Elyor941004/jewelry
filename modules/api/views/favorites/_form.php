<?php
use yii\helpers\Arrayhelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Products;
use app\models\Users;


/* @var $this yii\web\View */
/* @var $model app\models\Favorites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="favorites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'product_id')->dropDownList(Arrayhelper::map(Products::find()->all(), 'id', 'description_ru'),['prompt' => 'Select Products']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
