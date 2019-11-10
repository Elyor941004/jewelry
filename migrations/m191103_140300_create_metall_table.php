<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%metall}}`.
 */
class m191103_140300_create_metall_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%metall}}', [
            'id' => $this->primaryKey(),
            'metal_uz' => $this->string(),
            'metal_ru' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%metall}}');
    }
}
