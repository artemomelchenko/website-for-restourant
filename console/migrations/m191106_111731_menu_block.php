<?php

use yii\db\Migration;

/**
 * Class m191106_111731_menu_block
 */
class m191106_111731_menu_block extends Migration
{
    public static function tableName(){
        return '{{%menu_block}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'img' => $this->string(255)->null(),
            'text' => $this->string(340)->null(),
            'pages_id' => $this->integer(11)->null(),
        ]);

        $this->createIndex(
            'idx-menu_block-pages_id',
            'menu_block',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-menu_block-pages_id',
            'menu_block',
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
            'fk-menu_block-pages_id',
            'menu_block'
        );
        $this->dropIndex(
            'idx-menu_block-pages_id',
            'menu_block'
        );

        $this->dropTable(self::tableName());
    }
}
