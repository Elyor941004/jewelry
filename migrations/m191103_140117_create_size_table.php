<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%size}}`.
 */
class m191103_140117_create_size_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%size}}', [
            'id' => $this->primaryKey(),
            'size' => $this->float(),
            'category_id' => $this->integer(),
        ]);
         $this->createIndex(
            'idx-web_size-category_id',
            '{{%size}}',
            'category_id'
        );
        $this->addForeignKey(
            'fk-web_size-category_id',
            '{{%size}}',
            'category_id',
            '{{%category}}',
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
            'fk-web_size-category_id',
            '{{%size}}'
        );
        $this->createIndex(
            'idx-web_size-category_id',
            '{{%size}}'
        );
       $this->dropTable('{{%size}}');
    }
}
