<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property int $id
 * @property string $color_uz
 * @property string $color_ru
 *
 * @property Products[] $products
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color_uz', 'color_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color_uz' => 'Color Uz',
            'color_ru' => 'Color Ru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['color_id' => 'id']);
    }
}
