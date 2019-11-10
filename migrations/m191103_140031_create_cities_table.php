<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cities}}`.
 */
class m191103_140031_create_cities_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cities}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('{{%cities}}');
    }
}
