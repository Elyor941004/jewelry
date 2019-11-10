<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Regions;
use yii\helpers\ArrayHelper;
use app\models\Cities;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 't_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'l_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'region_id')->dropDownList(Arrayhelper::map(Regions::find()->all(), 'id', 'name_ru'),['prompt' => 'Select region']) ?>

    <?= $form->field($model, 'city_id')->dropDownList(Arrayhelper::map(Cities::find()->all(), 'id', 'name_ru'),['prompt' => 'Select City']) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <!-- 'map_lan')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'amount_purchases')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end();?>

</div>
