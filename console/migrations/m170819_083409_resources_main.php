<?php

use yii\db\Migration;

class m170819_083409_resources_main extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%resources_main}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('标题'),
            'alt' => $this->string()->comment('作者'),
            'desc' => $this->text()->comment('描述'),
            'url' => $this->string()->comment('图片地址'),
            'categroy' => $this->smallInteger()->notNull()->defaultValue(1),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%resources_main}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170819_083409_resources_main cannot be reverted.\n";

        return false;
    }
    */
}
