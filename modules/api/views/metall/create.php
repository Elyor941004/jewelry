<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Metall */

$this->title = 'Create Metall';
$this->params['breadcrumbs'][] = ['label' => 'Metalls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metall-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
