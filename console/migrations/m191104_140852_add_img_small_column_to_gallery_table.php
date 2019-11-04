<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%gallery}}`.
 */
class m191104_140852_add_img_small_column_to_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('gallery', 'small_img', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('gallery', 'small_img');
    }
}
