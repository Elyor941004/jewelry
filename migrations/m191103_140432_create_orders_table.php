<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m191103_140432_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'created_by' => $this->integer(),
            'deliveryman' => $this->integer(),
            'delivery_address_id' => $this->integer(),
            'created_at' => $this->integer(),
            'status' => $this->string(),
            'comment' => $this->string(),
            'region_id' => $this->integer(),
            'city_id' => $this->integer(),
            'map_lat' => $this->text(),
            'map_lan' => $this->text(),
            'phone' => $this->integer(),
            'f_name' => $this->string(),
            'f_name' => $this->string(),
            'delivery_price' => $this->float(),
        ]);
         $this->createIndex(
            'idx-web_orders-created_by',
            '{{%orders}}',
            'created_by'
        );
        $this->addForeignKey(
            'fk-web_orders-created_by',
            '{{%orders}}',
            'created_by',
            '{{%users}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_orders-deliveryman',
            '{{%orders}}',
            'deliveryman'
        );
        $this->addForeignKey(
            'fk-web_orders-deliveryman',
            '{{%orders}}',
            'deliveryman',
            '{{%users}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_orders-region_id',
            '{{%orders}}',
            'region_id'
        );
        $this->addForeignKey(
            'fk-web_orders-region_id',
            '{{%orders}}',
            'region_id',
            '{{%regions}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_orders-city_id',
            '{{%orders}}',
            'city_id'
        );
        $this->addForeignKey(
            'fk-web_orders-city_id',
            '{{%orders}}',
            'city_id',
            '{{%cities}}',
            'id',
            'CASCADE'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-web_orders-created_by',
            '{{%orders}}'
        );
        $this->dropIndex(
            'idx-web_orders-created_by',
            '{{%orders}}'
        );
        $this->dropForeignKey(
            'fk-web_orders-deliveryman',
            '{{%orders}}'
        );
        $this->dropIndex(
            'idx-web_orders-deliveryman',
            '{{%orders}}'
        );
        $this->dropForeignKey(
            'fk-web_orders-region_id',
            '{{%orders}}'
        );
        $this->dropIndex(
            'idx-web_orders-region_id',
            '{{%orders}}'
        );
        $this->dropForeignKey(
            'fk-web_orders-city_id',
            '{{%orders}}'
        );
        $this->dropIndex(
            'idx-web_orders-city_id',
            '{{%orders}}'
        );
    }
}
