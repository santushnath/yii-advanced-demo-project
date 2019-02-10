<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_form}}`.
 */
class m190209_081939_create_contact_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'subject' => $this->string(),
            'body' => $this->text(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_form}}');
    }
}
