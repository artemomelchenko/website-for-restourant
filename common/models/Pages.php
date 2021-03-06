<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name
 *
 * @property Gallery[] $galleries
 * @property Recipes[] $recipes
 * @property Slider[] $sliders
 * @property AboutUsBlock[] $aboutUs
 * @property MenuBlock[] $menuBlock
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalleries()
    {
        return $this->hasMany(Gallery::className(), ['pages_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecipes()
    {
        return $this->hasMany(Recipes::className(), ['pages_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSliders()
    {
        return $this->hasMany(Slider::className(), ['pages_id' => 'id']);
    }

    public function getAboutUs()
    {
        return $this->hasOne(AboutUsBlock::className(), ['pages_id' => 'id']);
    }

    public function getMenuBlock()
    {
        return $this->hasOne(MenuBlock::className(), ['pages_id' => 'id']);
    }

    public function getMenu()
    {
        return $this->hasMany(Menu::className(), ['pages_id' => 'id']);
    }
}
