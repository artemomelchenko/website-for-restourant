<?php

use yii\db\Migration;

/**
 * Class m191107_130702_leads
 */
class m191107_130702_leads extends Migration
{
    public function up(){
        $this->alterColumn('leads', 'datetime', $this->string(255));
    }

    public function down() {
        $this->alterColumn('leads','datetime', $this->string(255));
    }
}
