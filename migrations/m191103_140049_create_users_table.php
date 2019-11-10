<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m191103_140049_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            't_name' => $this->string(),
            'l_name' => $this->string(),
            'phone' => $this->integer(),
            'region_id' => $this->integer(),
            'city_id' => $this->integer(),
            'adress' => $this->string(),
            'map_lat' => $this->text(),
            'map_lan' => $this->text(),
            'login' => $this->string(),
            'password' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'amount_purchases' => $this->integer()->defaultValue(0),

        ]);
        $this->createIndex(
            'idx-web_users-region_id',
            '{{%users}}',
            'region_id'
        );
        $this->addForeignKey(
            'fk-web_users-region_id',
            '{{%users}}',
            'region_id',
            '{{%regions}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-web_users-city_id',
            '{{%users}}',
            'city_id'
        );
        $this->addForeignKey(
            'fk-web_users-city_id',
            '{{%users}}',
            'city_id',
            '{{%cities}}',
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
            'fk-web_users-region_id',
            '{{%users}}'
        );
        $this->createIndex(
            'idx-web_users-region_id',
            '{{%users}}'
        );
        $this->addForeignKey(
            'fk-web_users-city_id',
            '{{%users}}'
        );
        $this->createIndex(
            'idx-web_users-city_id',
            '{{%users}}'
        );
       $this->dropTable('{{%cities}}');
    }
}
