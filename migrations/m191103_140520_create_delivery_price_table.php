<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%delivery_price}}`.
 */
class m191103_140520_create_delivery_price_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%delivery_price}}', [
           'id' => $this->primaryKey(),
            'region_id' => $this->integer(),
            'price' =>$this->float(),
        ]);
         $this->createIndex(
            'idx-web_delivery_price-region_id',
            '{{%delivery_price}}',
            'region_id'
        );
        $this->addForeignKey(
            'fk-web_delivery_price-region_id',
            '{{%delivery_price}}',
            'region_id',
            '{{%regions}}',
            'id',
            'CASCADE'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addForeignKey(
            'fk-web_delivery_price-region_id',
            '{{%delivery_price}}'
        );
        $this->createIndex(
            'idx-web_delivery_price-region_id',
            '{{%delivery_price}}'
        );
        $this->dropTable('{{%delivery_price}}');
    }
}
