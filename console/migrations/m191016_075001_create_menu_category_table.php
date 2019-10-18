<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu_category}}`.
 */
class m191016_075001_create_menu_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu_category}}', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255),
            'img' => $this->string(255),
            'pages_id' => $this->integer(11)->notNull()
        ]);
        $this->createIndex(
            'idx-menu_category-pages_id',
            'menu_category',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-menu_category-pages_id',
            'menu_category',
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
            'fk-menu_category-pages_id',
            'menu_category'
        );
        $this->dropIndex(
            'idx-menu_category-pages_id',
            'menu_category'
        );
        $this->dropTable('{{%menu_category}}');
    }
}
