<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_by',
            'deliveryman',
            'delivery_address_id',
            'created_at',
            'status',
            'comment',
            'region_id',
            'city_id',
            'map_lat' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/orders/'.$model->photo), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],

            'map_lan' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/orders/'.$model->photo), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],

            'phone',
            'f_name',
            'delivery_price',

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
