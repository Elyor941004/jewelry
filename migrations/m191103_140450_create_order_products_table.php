<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_products}}`.
 */
class m191103_140450_create_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_products}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'price' => $this->float(),
            'price_sale' =>$this->integer(),
            'count' => $this->integer(),
        ]);
         $this->createIndex(
            'idx-web_order_products-order_id',
            '{{%order_products}}',
            'order_id'
        );
        $this->addForeignKey(
            'fk-web_order_products-order_id',
            '{{%order_products}}',
            'order_id',
            '{{%orders}}',
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
            'fk-web_order_products-order_id',
            '{{%order_products}}'
        );
        $this->createIndex(
            'idx-web_order_products-order_id',
            '{{%order_products}}'
        );
        $this->dropTable('{{%order_products}}');
    }
}
