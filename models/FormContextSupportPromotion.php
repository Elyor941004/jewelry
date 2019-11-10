<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_form_context_support_promotion".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 */
class FormContextSupportPromotion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_form_context_support_promotion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
        ];
    }
}
