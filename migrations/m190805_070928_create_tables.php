<?php

use yii\db\Migration;

/**
 * Class m190805_070928_create_tables
 */
class m190805_070928_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', array(
            'id' => 'pk',
            'parent_id' => 'int',
            'name' => 'string NOT NULL',
            'keywords' => 'string NOT NULL',
            'description' => 'string NOT NULL',
        ));
        $this->insert('categories', [
            'parent_id' => 0,
            'name' => 'Гибкие навыки Soft skills',
            'keywords' => 'тренинг,коучинг,навыки,компетенции,soft skills',
            'description' => 'Гибкие навыки soft skills',
        ]);
        $this->insert('categories', [
            'parent_id' => 0,
            'name' => 'Жесткие навыки Hard skills',
            'keywords' => 'тренинг,коучинг,навыки,компетенции,hard skills',
            'description' => 'Жесткие навыки Hard skills',
        ]);

        $this->createTable('courses', array(
            'id' => 'pk',
            'category_id' => 'int',
            'name' => 'string NOT NULL',
            'content' => 'text',
            'price' => 'float',
            'keywords' => 'string NOT NULL',
            'description' => 'string NOT NULL',
            'img' => 'string NOT NULL',
            'hit' => 'int',
            'new' => 'int',
            'sale' => 'int',
        ));

        $this->createTable('orders', array(
            'id' => 'pk',
            'fio' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'tel' => 'string NOT NULL',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('categories');
        $this->dropTable('courses');
        $this->dropTable('orders');

 //       echo "m190805_070928_create_tables cannot be reverted.\n";

  //      return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190805_070928_create_tables cannot be reverted.\n";

        return false;
    }
    */
}
