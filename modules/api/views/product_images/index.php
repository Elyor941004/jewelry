<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-images-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image' => [
                    'format'=>'html',
                    'value'=>function ($model) {
                        return  Html::img(Url::to('@web/uploads/product_images/'.$model->photo), ['alt' => 'My logo', 'width'=>140]);
                    }
            ],

            'product_id',
            'updated_at',
            'created_at',
            //'is_main',

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
