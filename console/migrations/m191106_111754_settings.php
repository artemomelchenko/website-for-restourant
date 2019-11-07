<?php

use yii\db\Migration;

/**
 * Class m191106_111754_settings
 */
class m191106_111754_settings extends Migration
{
    public static function tableName()
    {
        return '{{%settings}}';
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'phone' => $this->string(255)->null(),
            'address' => $this->string(255)->null(),
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
