<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dishes}}`.
 */
class m191016_075017_create_dishes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dishes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'price' => $this->string(255),
            'menu_category_id'=>$this->integer(11)->notNull(),
        ]);
        $this->createIndex(
            'idx-dishes-menu_category_id',
            'dishes',
            'menu_category_id'
        );

        $this->addForeignKey(
            'fk-dishes-menu_category_id',
            'dishes',
            'menu_category_id',
            'menu_category',
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
            'fk-dishes-menu_category_id',
            'dishes'
        );
        $this->dropIndex(
            'idx-dishes-menu_category_id',
            'dishes'
        );
        $this->dropTable('{{%dishes}}');
    }
}
