<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\api\models\Apipost */

$this->title = 'Create Apipost';
$this->params['breadcrumbs'][] = ['label' => 'Apiposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apipost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
