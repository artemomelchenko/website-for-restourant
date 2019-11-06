<?php

use yii\db\Migration;

/**
 * Class m191106_111744_about_us_block
 */
class m191106_111744_about_us_block extends Migration
{
    public static function tableName(){
        return '{{%about_us_block}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'img' => $this->string(255)->null(),
            'title' => $this->string(20)->null(),
            'text' => $this->string(340)->null(),
            'pages_id' => $this->integer(11)->null(),
        ]);

        $this->createIndex(
            'idx-about_us_block-pages_id',
            'about_us_block',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-about_us_block-pages_id',
            'about_us_block',
            'pages_id',
            'pages',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-about_us_block-pages_id',
            'about_us_block'
        );
        $this->dropIndex(
            'idx-about_us_block-pages_id',
            'about_us_block'
        );

        $this->dropTable(self::tableName());
    }
}
