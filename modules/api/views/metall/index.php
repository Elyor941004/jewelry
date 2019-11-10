<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metalls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metall-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Metall', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'metal_uz',
            'metal_ru',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {view}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {

                        return  Html::a('<span class="fa fa-pencil-alt text-success"></span>', $url, ['class' => 'mr-2']);

                    },
                    'view' => function ($url, $model, $key) {

                        return  Html::a('<span class="fa fa-eye text-success"></span>', $url, ['class' => 'mr-2']);

                    },
                    'delete' => function($url, $model){
                        return Html::a('<span class="fa fa-trash text-danger"></span>', ['delete', 'id' => $model->id], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ],
        ],
        ],
    ]); ?>


</div>
