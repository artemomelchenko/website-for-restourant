<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider}}`.
 */
class m191015_104751_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->null(),
            'text' => $this->string(255)->null(),
            'button_text' => $this->string(100)->null(),
            'button_link' => $this->string(100)->null(),
            'main_img' => $this->string(255)->null(),
            'background_img' => $this->string(255)->null(),
            'pages_id' => $this->integer(11),
        ]);
        $this->createIndex(
            'idx-slider-pages_id',
            'slider',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-slider-pages_id',
            'slider',
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
            'fk-slider-pages_id',
            'slider'
        );
        $this->dropIndex(
            'idx-slider-pages_id',
            'slider'
        );
        $this->dropTable('{{%slider}}');
    }
}
