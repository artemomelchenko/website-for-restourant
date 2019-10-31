<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%menu}}`.
 */
class m191030_134214_add_pages_id_column_to_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'pages_id', $this->integer());
        $this->createIndex(
            'idx-menu-pages_id',
            'menu',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-menu-pages_id',
            'menu',
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
            'fk-menu-pages_id',
            'menu'
        );
        $this->dropIndex(
            'idx-menu-pages_id',
            'menu'
        );
        $this->dropColumn('menu', 'pages_id');
    }
}
