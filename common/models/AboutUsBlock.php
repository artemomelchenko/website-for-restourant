<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%about_us_block}}".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $text
 * @property int $pages_id
 *
 * @property Pages $pages
 */
class AboutUsBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%about_us_block}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pages_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 20],
            [['text'], 'string', 'max' => 340],
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
            'img' => Yii::t('app', 'Img'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
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

    public function getImg(){
        $image = UploadedFile::getInstance($this, 'img');
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }

    public function getUpdate($id)
    {
        $old_img = self::findOne($id)->img;
        $image = UploadedFile::getInstance($this, 'img');
        if (is_null($image)){
            $this->img = $old_img;
        }else{
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString().".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }
}
