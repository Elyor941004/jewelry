<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metall".
 *
 * @property int $id
 * @property string $metal_uz
 * @property string $metal_ru
 *
 * @property Products[] $products
 */
class Metall extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metall';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metal_uz', 'metal_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'metal_uz' => 'Metal Uz',
            'metal_ru' => 'Metal Ru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['metal_id' => 'id']);
    }
}
