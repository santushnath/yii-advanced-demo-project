<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pictures".
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property string $created_at
 */
class Pictures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pictures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'image'], 'required'],
            [['product_id'], 'integer'],
            [['created_at'], 'safe'],
            [['image'], 'file', 'extensions' => 'jpg,png,gif', 'maxFiles'  => 5, 'skipOnEmpty' => false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }
}
