<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Users;
use app\models\Regions;
use app\models\Cities;
/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'created_by')->dropDownList(Arrayhelper::map(Users::find()->all(), 'id', 't_name'),['prompt' => 'Select category']) ?>


    <?= $form->field($model, 'deliveryman')->dropDownList(Arrayhelper::map(Users::find()->all(), 'id', 'l_name'),['prompt' => 'Select category']) ?>

    <?= $form->field($model, 'delivery_address_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(Arrayhelper::map(Regions::find()->all(), 'id', 'name_ru'),['prompt' => 'Select Region']) ?>

    <?= $form->field($model, 'city_id')->dropDownList(Arrayhelper::map(Cities::find()->all(), 'id', 'name_ru'),['prompt' => 'Select Cities']) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <!-- 'map_lat')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model,'imageFile')->fileInput() ?> 
        <!-- 'map_lan')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'f_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
