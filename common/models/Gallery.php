<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $img
 * @property int $pages_id
 * @property string $small_img
 *
 * @property Pages $pages
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pages_id'], 'integer'],
            [['img', 'small_img'], 'string', 'max' => 255],
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
            'pages_id' => Yii::t('app', 'Pages ID'),
            'small_img' => Yii::t('app', 'Small Img'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasOne(Pages::className(), ['id' => 'pages_id']);
    }

    public function getImg()
    {
        $image = UploadedFile::getInstance($this, 'img');
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/gallery/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }

    public function getImg2()
    {
        $image = UploadedFile::getInstance($this, 'small_img');
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/gallery/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->small_img = $avatar;
        }
    }

    public function getUpdate($id)
    {
        $old_img = self::findOne($id)->img;
        $image = UploadedFile::getInstance($this, 'img');
        if (is_null($image)) {
            $this->img = $old_img;
        } else {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/gallery/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }

    public function getUpdate2($id)
    {
        $old_img = self::findOne($id)->small_img;
        $image = UploadedFile::getInstance($this, 'small_img');
        if (is_null($image)) {
            $this->img = $old_img;
        } else {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/gallery/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->small_img = $avatar;
        }
    }
}
