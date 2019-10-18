<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $menu_category_id
 *
 * @property MenuCategory $menuCategory
 */
class Dishes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_category_id'], 'required'],
            [['menu_category_id'], 'integer'],
            [['name', 'price'], 'string', 'max' => 255],
            [['menu_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuCategory::className(), 'targetAttribute' => ['menu_category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'menu_category_id' => Yii::t('app', 'Menu Category ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuCategory()
    {
        return $this->hasOne(MenuCategory::className(), ['id' => 'menu_category_id']);
    }
}
