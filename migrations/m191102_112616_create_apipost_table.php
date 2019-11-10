<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apipost}}`.
 */
class m191102_112616_create_apipost_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{apipost}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'text' => $this ->text(),
            'page' =>$this->string(),
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{apipost}}');
    }
}
