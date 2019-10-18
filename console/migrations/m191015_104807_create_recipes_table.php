<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recipes}}`.
 */
class m191015_104807_create_recipes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recipes}}', [
            'id' => $this->primaryKey()->notNull(),
            'title' => $this->string(255)->null(),
            'text' => $this->text()->null(),
            'img' => $this->string(255)->null(),
            'pages_id' => $this->integer(11),
        ]);
        $this->createIndex(
            'idx-recipes-pages_id',
            'recipes',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-recipes-pages_id',
            'recipes',
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
            'fk-recipes-pages_id',
            'recipes'
        );
        $this->dropIndex(
            'idx-recipes-pages_id',
            'recipes'
        );
        $this->dropTable('{{%recipes}}');
    }
}
