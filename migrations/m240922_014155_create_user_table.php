<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m240922_014155_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey()->unsigned(),
            'login' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
