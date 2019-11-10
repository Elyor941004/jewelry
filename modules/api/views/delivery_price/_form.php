<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Regions;

/* @var $this yii\web\View */
/* @var $model app\models\DeliveryPrice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="delivery-price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'region_id')->dropDownList(Arrayhelper::map(Regions::find()->all(), 'id', 'name_ru'),['prompt' => 'Select regions']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
