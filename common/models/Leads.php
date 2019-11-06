<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%leads}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $datetime
 * @property string $people
 * @property string $comment
 * @property int $page_id
 * @property string $section
 */
class Leads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%leads}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime'], 'safe'],
            [['page_id'], 'integer'],
            [['name', 'phone', 'people', 'section'], 'string', 'max' => 255],
            [['comment'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name L'),
            'phone' => Yii::t('app', 'Phone'),
            'datetime' => Yii::t('app', 'Datetime'),
            'people' => Yii::t('app', 'People'),
            'comment' => Yii::t('app', 'Comment'),
            'page_id' => Yii::t('app', 'Page ID'),
            'section' => Yii::t('app', 'Section'),
        ];
    }
}
