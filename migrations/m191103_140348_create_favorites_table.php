<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%favorites}}`.
 */
class m191103_140348_create_favorites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%favorites}}', [
            'id' => $this->primaryKey(),
            'created_by' => $this->integer(),
            'product_id' => $this->integer(),
        ]);
         $this->createIndex(
            'idx-web_favorites-created_by',
            '{{%favorites}}',
            'created_by'
        );
        $this->addForeignKey(
            'fk-web_favorites-created_by',
            '{{%favorites}}',
            'created_by',
            '{{%users}}',
            'id',
            'CASCADE' 
        );
        $this->createIndex(
            'idx-web_favorites-product_id',
            '{{%favorites}}',
            'product_id'
        );
        $this->addForeignKey(
            'fk-web_favorites-product_id',
            '{{%favorites}}',
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
        $this->dropForeignKey(
            'fk-web_favorites-created_by',
            '{{%favorites}}'
        );
        $this->dropIndex(
            'idx-web_favorites-created_by',
            '{{%favorites}}'
        );
        $this->dropForeignKey(
            'fk-web_favorites-product_id',
            '{{%favorites}}'
        );
        $this->dropIndex(
            'idx-web_favorites-product_id',
            '{{%favorites}}'
        );
    }
}
