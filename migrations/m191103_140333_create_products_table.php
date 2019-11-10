<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m191103_140333_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'size_id' => $this->integer(),
            'color_id' => $this->integer(),
            'metal_id' => $this->integer(),
            'manufacturer_id' => $this->integer(),
            'price' => $this->float(),
            'sale_price' => $this->float()->defaultValue(0),
            'sale_from_date' => $this->integer(),
            'sale_to_date' => $this->integer(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'available_count' => $this->integer(),
            'netto' => $this->float(),
            'url' => $this->string(),
            'viewed' => $this->integer()->defaultValue(0),
            'buyed' => $this->integer()->defaultValue(0),
            'description_uz' => $this->string(),
            'description_ru' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->string(),
        ]);
        $this->createIndex(
            'idx-web_products-category_id',
            '{{%products}}',
            'category_id'
        );
        $this->addForeignKey(
            'fk-web_products-category_id',
            '{{%products}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_products-size_id',
            '{{%products}}',
            'size_id'
        );
        $this->addForeignKey(
            'fk-web_products-size_id',
            '{{%products}}',
            'size_id',
            '{{%size}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_products-color_id',
            '{{%products}}',
            'color_id'
        );
        $this->addForeignKey(
            'fk-web_products-color_id',
            '{{%products}}',
            'color_id',
            '{{%color}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_products-metal_id',
            '{{%products}}',
            'metal_id'
        );
        $this->addForeignKey(
            'fk-web_products-metal_id',
            '{{%products}}',
            'metal_id',
            '{{%metall}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_products-manufacturer_id',
            '{{%products}}',
            'manufacturer_id'
        );
        $this->addForeignKey(
            'fk-web_products-manufacturer_id',
            '{{%products}}',
            'manufacturer_id',
            '{{%manufacturer}}',
            'id',
            'CASCADE'
        );
         $this->createIndex(
            'idx-web_products-created_by',
            '{{%products}}',
            'created_at'
        );
        $this->addForeignKey(
            'fk-web_products-created_by',
            '{{%products}}',
            'created_at',
            '{{%users}}',
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
            'fk-web_products-category_id',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-category_id',
            '{{%products}}'
        );
        $this->addForeignKey(
            'fk-web_products-size_id',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-size_id',
            '{{%products}}'
        );
        $this->addForeignKey(
            'fk-web_products-color_id',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-color_id',
            '{{%products}}'
        );
        $this->addForeignKey(
            'fk-web_products-metal_id',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-metal_id',
            '{{%products}}'
        );
         $this->addForeignKey(
            'fk-web_products-manfacturer_id',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-manfacturer_id',
            '{{%products}}'
        );
        $this->addForeignKey(
            'fk-web_products-created_by',
            '{{%products}}'
        );
        $this->createIndex(
            'idx-web_products-created_by',
            '{{%products}}'
        );
       $this->dropTable('{{%size}}');
    }
}
