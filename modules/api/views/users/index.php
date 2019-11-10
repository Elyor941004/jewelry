<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            't_name',
            'l_name',
            'phone',
            'region_id',
            'city_id',
            'adress',
            'map_lat' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/users/'.$model->map_lat), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],
            'map_lan' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/users/'.$model->map_lan), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],
            'login',
            'password:ntext',
            'created_at',
            'updated_at',
            'amount_purchases',

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
