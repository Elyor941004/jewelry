<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "delivery_price".
 *
 * @property int $id
 * @property int $region_id
 * @property double $price
 *
 * @property Regions $region
 */
class DeliveryPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivery_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id'], 'integer'],
            [['price'], 'number'],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id']);
    }
}
