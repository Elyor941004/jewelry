<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%manufacturer}}`.
 */
class m191103_140138_create_manufacturer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%manufacturer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'logo' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%manufacturer}}');
    }
}
