<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190209_090457_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'user_email' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'ikey' => $this->string(),
            'amount' => $this->string()->defaultValue(0),
            'quantity' => $this->integer()->notNull(),
            'availability' => $this->string(),
            'prod_condition' => $this->string(),
            'brand' => $this->string(),
            'stock' => $this->integer(),
            'image' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
            'updated_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
