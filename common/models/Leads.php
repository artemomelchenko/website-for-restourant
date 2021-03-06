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
 * @property string $create_at
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
            [['datetime', 'create_at'], 'safe'],
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
            'create_at' => Yii::t('app', 'Create At'),
        ];
    }

    public function allSend($post, $page)
    {

        $this->savingToDb($post, $page);
        $this->sendToTelegram($post, $page);
        $this->sendEmail($post, $page);
    }

    public function savingToDb($post, $page)
    {

        $this->name = !empty($post['name']) ? $post['name'] : '';
        $this->phone = !empty($post['phone']) ? $post['phone'] : '';
        $this->datetime = !empty($post['null']) ? $post['null'] : '';
        $this->people = !empty($post['people']) ? $post['people'] : '';
        $this->comment = !empty($post['comment']) ? $post['comment'] : '';
        if ($page == 'index') {
            $this->page_id = 1;
        } elseif ($page == 'menu') {
            $this->page_id = 2;
        }
        $this->section = $post['id'];
        $this->create_at = new \yii\db\Expression('NOW()');
        $this->save();
    }

    public function sendToTelegram($post, $page)
    {

        $token = '1066944297:AAFi4YA478zmCREWWe738QO_nMvAoKiBpVE';
        $chat_id = '-396342927';

        $arrayTelegram = [
            '????????????????' => $page == 'index' ? '??????????????' : ($page == 'menu' ? '????????' : ''),
            '????????????' => $post['id'] == 'reserv' ? '"?????????????????????? ????????"' : ($post['id'] == 'footer' ? '"????????????????"' : ''),
            '????\'??' => !empty($post['name']) ? $post['name'] : '',
            '??????????????' => !empty($post['phone']) ? $post['phone'] : '',
            '???????? ?? ??????' => !empty($post['null']) ? $post['null'] : '',
            '??-?????? ??????????' => !empty($post['people']) ? $post['people'] : '',
            '????????????????' => !empty($post['comment']) ? $post['comment'] : '',
        ];

        $txt = '';
        foreach ($arrayTelegram as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };

        return $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
    }

    public function sendEmail($post, $page)
    {

        if ($page == 'index') {
            $page = '??????????????';
        } elseif ($page == 'menu') {
            $page = '????????';
        }

        if ($post['id'] == 'reserv') {
            $post['id'] = '"?????????????????????? ????????"';
        } elseif ($post['id'] == 'footer') {
            $post['id'] = '"????????????????"';
        }

        $post2 = ['post' => [$post, 'page' => $page]];
        return Yii::$app->mailer->compose([
            'html' => 'message',
            'text' => 'message',

        ], $post2)
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['adminEmail'] => 'test'])
            ->setSubject('?????????????????????? ????????')
            ->send();
    }
}
