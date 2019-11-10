<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\Apipost */

$this->title = 'Update Apipost: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apiposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apipost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
