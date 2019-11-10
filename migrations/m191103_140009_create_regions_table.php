<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%regions}}`.
 */
class m191103_140009_create_regions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%regions}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
        ]);
    }

    
    public function safeDown()
    {
        $this->dropTable('{{%regions}}');
    }
}
