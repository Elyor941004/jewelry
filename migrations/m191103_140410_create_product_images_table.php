<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_images}}`.
 */
class m191103_140410_create_product_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_images}}', [
            'id' => $this->primaryKey(),
            'image' => $this->text(),
            'product_id' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer(),
            'is_main' => $this->boolean(),
        ]);
        $this->createIndex(
            'idx-web_product_images-product_id',
            '{{%product_images}}',
            'product_id'
        );
        $this->addForeignKey(
            'fk-web_product_images-product_id',
            '{{%product_images}}',
            'product_id',
            '{{%products}}',
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
            'fk-web_product_images-product_id',
            '{{%product_images}}'
        );
        $this->createIndex(
            'idx-web_product_images-product_id',
            '{{%product_images}}'
        );
        $this->dropTable('{{%product_images}}',
            '{{%product_images}}'
        );
    }
}
