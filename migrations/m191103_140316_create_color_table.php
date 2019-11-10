<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%color}}`.
 */
class m191103_140316_create_color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%color}}', [
             'id' => $this->primaryKey(),
            'color_uz' => $this->string(),
            'color_ru' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%color}}');
    }
}
