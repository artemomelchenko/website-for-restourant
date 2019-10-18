<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "recipes".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property int $pages_id
 *
 * @property Pages $pages
 */
class Recipes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['pages_id'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'img' => Yii::t('app', 'Img'),
            'pages_id' => Yii::t('app', 'Pages ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasOne(Pages::className(), ['id' => 'pages_id']);
    }
}
