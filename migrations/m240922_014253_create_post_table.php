<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240922_014253_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'user_id' => $this->integer()->notNull()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
