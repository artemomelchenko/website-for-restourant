<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_category".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property int $pages_id
 *
 * @property Dishes[] $dishes
 * @property Pages $pages
 */
class MenuCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pages_id'], 'required'],
            [['pages_id'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
            [['pages_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pages::className(), 'targetAttribute' => ['pages_id' => 'id']],
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
            'img' => Yii::t('app', 'Img'),
            'pages_id' => Yii::t('app', 'Pages ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDishes()
    {
        return $this->hasMany(Dishes::className(), ['menu_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasOne(Pages::className(), ['id' => 'pages_id']);
    }
}
