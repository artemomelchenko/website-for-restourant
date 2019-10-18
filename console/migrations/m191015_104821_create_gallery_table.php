<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 */
class m191015_104821_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255)->null(),
            'pages_id' => $this->integer(11),
        ]);
        $this->createIndex(
            'idx-gallery-pages_id',
            'gallery',
            'pages_id'
        );

        $this->addForeignKey(
            'fk-gallery-pages_id',
            'gallery',
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
            'fk-gallery-pages_id',
            'gallery'
        );
        $this->dropIndex(
            'idx-gallery-pages_id',
            'gallery'
        );
        $this->dropTable('{{%gallery}}');
    }
}
