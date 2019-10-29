<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property int $menu_id
 * @property string $img
 *
 * @property Menu $menu
 * @property Item[] $items
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['menu_id'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
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
            'menu_id' => Yii::t('app', 'Menu ID'),
            'img' => Yii::t('app', 'Img'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['category_id' => 'id']);
    }

    public function getImg()
    {
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
        if (is_null($image)) {
            $this->img = $old_img;
        } else {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }
}
