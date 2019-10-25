<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $button_text
 * @property string $button_link
 * @property string $main_img
 * @property string $background_img
 * @property int $pages_id
 *
 * @property Pages $pages
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pages_id'], 'integer'],
            [['title', 'text', 'main_img', 'background_img'], 'string', 'max' => 255],
            [['button_text', 'button_link'], 'string', 'max' => 100],
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
            'button_text' => Yii::t('app', 'Button Text'),
            'button_link' => Yii::t('app', 'Button Link'),
            'main_img' => Yii::t('app', 'Main Img'),
            'background_img' => Yii::t('app', 'Background Img'),
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
    public function getFiles1(){
        $image = UploadedFile::getInstance($this, 'main_img');
//            VarDumper::dump($image,10,1);
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->main_img = $avatar;
        }
    }
    public function getFiles2(){
        $image = UploadedFile::getInstance($this, 'background_img');
//            VarDumper::dump($image,10,1);
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->background_img = $avatar;
        }
    }
    public function getUpdate1($id)
    {
        $old_img = self::findOne($id)->main_img;
//        VarDumper::dump($old_img,10,1);
        $image = UploadedFile::getInstance($this, 'main_img');
        if (is_null($image)){
            $this->main_img = $old_img;
        }else{
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString().".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->main_img = $avatar;
        }
    }
    public function getUpdate2($id)
    {
        $old_img = self::findOne($id)->background_img;
        $image = UploadedFile::getInstance($this, 'background_img');
        if (is_null($image)){
            $this->background_img = $old_img;
        }else{
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString().".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->background_img = $avatar;
        }
    }
}
