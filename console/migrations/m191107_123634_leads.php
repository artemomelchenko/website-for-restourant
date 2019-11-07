<?php

use yii\db\Migration;

/**
 * Class m191107_123634_leads
 */
class m191107_123634_leads extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('leads', 'create_at', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('leads', 'create_at');
    }
}
