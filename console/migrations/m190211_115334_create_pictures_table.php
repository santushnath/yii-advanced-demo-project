<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pictures}}`.
 */
class m190211_115334_create_pictures_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pictures}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'image' => $this->string(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pictures}}');
    }
}
