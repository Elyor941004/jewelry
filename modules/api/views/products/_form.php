<?php

use yii\helpers\Html;
use yii\helpers\Arrayhelper;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\Size;
use app\models\Color;
use app\models\Metall;
use app\models\Manufacturer;
use app\models\Users;


/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(Arrayhelper::map(Category::find()->all(), 'id', 'name_ru'),['prompt' => 'Select category']) ?>


    <?= $form->field($model, 'size_id')->dropDownList(Arrayhelper::map(Size::find()->all(), 'id', 'size'),['prompt' => 'Select Size']) ?>

    <?= $form->field($model, 'color_id')->dropDownList(Arrayhelper::map(Color::find()->all(), 'id', 'color_ru'),['prompt' => 'Select Color']) ?>

    <?= $form->field($model, 'metal_id')->dropDownList(Arrayhelper::map(Metall::find()->all(), 'id', 'metall_ru'),['prompt' => 'Select Metall']) ?>

    <?= $form->field($model, 'manufacturer_id')->dropDownList(Arrayhelper::map(Manufacturer::find()->all(), 'id', 'name'),['prompt' => 'Select Manufacturer']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'sale_price')->textInput() ?>

    <?= $form->field($model, 'sale_from_date')->textInput() ?>

    <?= $form->field($model, 'sale_to_date')->textInput() ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available_count')->textInput() ?>

    <?= $form->field($model, 'netto')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viewed')->textInput() ?>

    <?= $form->field($model, 'buyed')->textInput() ?>

    <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
