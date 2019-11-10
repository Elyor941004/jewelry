<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $created_by
 * @property int $deliveryman
 * @property int $delivery_address_id
 * @property int $created_at
 * @property string $status
 * @property string $comment
 * @property int $region_id
 * @property int $city_id
 * @property string $map_lat
 * @property string $map_lan
 * @property int $phone
 * @property string $f_name
 * @property double $delivery_price
 *
 * @property OrderProducts[] $orderProducts
 * @property Cities $city
 * @property Users $createdBy
 * @property Users $deliveryman0
 * @property Regions $region
 */
class Orders extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['created_by', 'deliveryman', 'delivery_address_id', 'created_at', 'region_id', 'city_id', 'phone'], 'integer'],
            [['map_lat', 'map_lan'], 'string'],
            [['delivery_price'], 'number'],
            [['status', 'comment', 'f_name'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['deliveryman'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['deliveryman' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/orders/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_by' => 'Created By',
            'deliveryman' => 'Deliveryman',
            'delivery_address_id' => 'Delivery Address ID',
            'created_at' => 'Created At',
            'status' => 'Status',
            'comment' => 'Comment',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'map_lat' => 'Map Lat',
            'map_lan' => 'Map Lan',
            'phone' => 'Phone',
            'f_name' => 'F Name',
            'delivery_price' => 'Delivery Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProducts::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryman0()
    {
        return $this->hasOne(Users::className(), ['id' => 'deliveryman']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id']);
    }
}
