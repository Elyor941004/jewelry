<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category_id
 * @property int $size_id
 * @property int $color_id
 * @property int $metal_id
 * @property int $manufacturer_id
 * @property double $price
 * @property double $sale_price
 * @property int $sale_from_date
 * @property int $sale_to_date
 * @property string $title_ru
 * @property string $title_uz
 * @property int $available_count
 * @property double $netto
 * @property string $url
 * @property int $viewed
 * @property int $buyed
 * @property string $description_uz
 * @property string $description_ru
 * @property int $created_at
 * @property int $updated_at
 * @property string $created_by
 *
 * @property Favorites[] $favorites
 * @property ProductImages[] $productImages
 * @property Category $category
 * @property Color $color
 * @property Users $createdAt
 * @property Manufacturer $manufacturer
 * @property Metall $metal
 * @property Size $size
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'size_id', 'color_id', 'metal_id', 'manufacturer_id', 'sale_from_date', 'sale_to_date', 'available_count', 'viewed', 'buyed', 'created_at', 'updated_at'], 'integer'],
            [['price', 'sale_price', 'netto'], 'number'],
            [['title_ru', 'title_uz', 'url', 'description_uz', 'description_ru', 'created_by'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
            [['created_at'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_at' => 'id']],
            [['manufacturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacturer::className(), 'targetAttribute' => ['manufacturer_id' => 'id']],
            [['metal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Metall::className(), 'targetAttribute' => ['metal_id' => 'id']],
            [['size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'size_id' => 'Size ID',
            'color_id' => 'Color ID',
            'metal_id' => 'Metal ID',
            'manufacturer_id' => 'Manufacturer ID',
            'price' => 'Price',
            'sale_price' => 'Sale Price',
            'sale_from_date' => 'Sale From Date',
            'sale_to_date' => 'Sale To Date',
            'title_ru' => 'Title Ru',
            'title_uz' => 'Title Uz',
            'available_count' => 'Available Count',
            'netto' => 'Netto',
            'url' => 'Url',
            'viewed' => 'Viewed',
            'buyed' => 'Buyed',
            'description_uz' => 'Description Uz',
            'description_ru' => 'Description Ru',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImages::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedAt()
    {
        return $this->hasOne(Users::className(), ['id' => 'created_at']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetal()
    {
        return $this->hasOne(Metall::className(), ['id' => 'metal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSize()
    {
        return $this->hasOne(Size::className(), ['id' => 'size_id']);
    }
}
