<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product_images".
 *
 * @property int $id
 * @property string $image
 * @property int $product_id
 * @property int $updated_at
 * @property int $created_at
 * @property int $is_main
 *
 * @property Products $product
 */
class ProductImages extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['image'], 'string'],
            [['product_id', 'updated_at', 'created_at', 'is_main'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/product_images' . $fileName);
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
            'image' => 'Image',
            'product_id' => 'Product ID',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'is_main' => 'Is Main',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
}
