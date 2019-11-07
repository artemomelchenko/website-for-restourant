<?php

use yii\db\Migration;

/**
 * Class m191106_094754_leads
 */
class m191106_094754_leads extends Migration
{

    public static function tableName()
    {
        return '{{%leads}}';
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->null(),
            'phone' => $this->string(255)->null(),
            'datetime' => $this->dateTime()->null(),
            'people' => $this->string(255)->null(),
            'comment' => $this->string(1000)->null(),
            'page_id' => $this->integer(11)->null(),
            'section' => $this->string(255)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::tableName());
    }
}
