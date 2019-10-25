<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m191023_142659_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'menu_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-category-menu_id',
            'category',
            'menu_id'
        );

        $this->addForeignKey(
            'fk-category-menu_id',
            'category',
            'menu_id',
            'menu',
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
            'fk-category-menu_id',
            'category'
        );
        $this->dropIndex(
            'idx-category-menu_id',
            'category'
        );
        $this->dropTable('{{%category}}');
    }
}
