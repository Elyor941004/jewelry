<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Size */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="size-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList(Arrayhelper::map(Category::find()->all(), 'id', 'name_ru'),['prompt' => 'Select Category']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
