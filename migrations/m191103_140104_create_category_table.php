<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m191103_140104_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'category_id' => $this->integer(),
            'url' =>$this->string(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer(),
        ]);
         $this->createIndex(
            'idx-web_category-category_id',
            '{{%category}}',
            'category_id'
        );
        $this->addForeignKey(
            'fk-web_category-category_id',
            '{{%category}}',
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
            'fk-web_category-category_id',
            '{{%category}}'
        );
        $this->createIndex(
            'idx-web_category-category_id',
            '{{%category}}'
        );
       $this->dropTable('{{%category}}');
    }
}
