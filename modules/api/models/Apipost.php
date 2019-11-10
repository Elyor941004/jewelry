<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "apipost".
 *
 * @property int $id
 */
class Apipost extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE ='create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apipost';
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['photo', 'text', 'page'];
        return $scenarios;

    }
    public function rules()
    {
        return [
        [['photo', 'text', 'page'],'required'],
        [['photo', 'text', 'page'],'string','max'=>255],
    ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' =>'photo',
            'text' => 'text',
            'page' => 'page',
        ];
    }
}
