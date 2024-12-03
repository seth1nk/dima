<?php

use yii\db\Migration;

/**
 * Handles the creation of table `oboryd`.
 */
class m241203_021739_create_oboryd_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('oboryd', [
            'id' => $this->primaryKey(),
            'название' => $this->string(),
            'IP_адрес' => $this->string(),
            'mac_адрес' => $this->string(),
            'Местоположение' => $this->string(),
            'Дата_установки' => $this->date(),
            'Время_установки' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('oboryd');
    }
}
