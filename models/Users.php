<?php

namespace app\models;
use yii\helpers\Url;
use yii\web\UploadedFile;


use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $t_name
 * @property string $l_name
 * @property int $phone
 * @property int $region_id
 * @property int $city_id
 * @property string $adress
 * @property string $map_lat
 * @property string $map_lan
 * @property string $login
 * @property string $password
 * @property int $created_at
 * @property int $updated_at
 * @property int $amount_purchases
 *
 * @property Favorites[] $favorites
 * @property Orders[] $orders
 * @property Orders[] $orders0
 * @property Products[] $products
 * @property Cities $city
 * @property Regions $region
 */
class Users extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['phone', 'region_id', 'city_id', 'created_at', 'updated_at', 'amount_purchases'], 'integer'],
            [['map_lat', 'map_lan', 'password'], 'string'],
            [['t_name', 'l_name', 'adress', 'login'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/users/' . $fileName);
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
            't_name' => 'T Name',
            'l_name' => 'L Name',
            'phone' => 'Phone',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'adress' => 'Adress',
            'map_lat' => 'Map Lat',
            'map_lan' => 'Map Lan',
            'login' => 'Login',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'amount_purchases' => 'Amount Purchases',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders0()
    {
        return $this->hasMany(Orders::className(), ['deliveryman' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['created_at' => 'id']);
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
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id']);
    }
}
