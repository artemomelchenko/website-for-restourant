<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%item}}`.
 */
class m191023_142711_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%item}}', [
            'id' => $this->primaryKey()->null(),
            'name' => $this->string(255)->null(),
            'price' => $this->string(255)->null(),
            'category_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-item-category_id',
            'item',
            'category_id'
        );
        $this->addForeignKey(
            'fk-item-category_id',
            'item',
            'category_id',
            'category',
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
            'fk-item-category_id',
            'item'
        );
        $this->dropIndex(
            'idx-item-category_id',
            'item'
        );
        $this->dropTable('{{%item}}');
    }
}
