<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%attendees}}`.
 */
class m190226_131957_create_attendees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attendees}}', [
            'id' => Schema::TYPE_PK,
            'firstName' => Schema::TYPE_STRING,
            'lastName' => Schema::TYPE_STRING,
            'position' => Schema::TYPE_STRING,
            'city' => Schema::TYPE_STRING,
            'vk' => Schema::TYPE_STRING,
            'twitter' => Schema::TYPE_STRING,
            'facebook' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'phone' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_STRING,
            'externalImagePath' => Schema::TYPE_STRING,
            'externalThumbnailPath' => Schema::TYPE_STRING,
            'company' => Schema::TYPE_STRING,
            'language' => Schema::TYPE_STRING,
            'networkingCode' => Schema::TYPE_STRING,
            'privateInfo' => Schema::TYPE_STRING,
            'showEmail' => Schema::TYPE_BOOLEAN,
            'showPhone' => Schema::TYPE_BOOLEAN,
            'isSpeaker' => Schema::TYPE_BOOLEAN,
            'authorized' => Schema::TYPE_BOOLEAN,
            'confirmed' => Schema::TYPE_BOOLEAN,
            'moderated' => Schema::TYPE_BOOLEAN,
            'withdrawed' => Schema::TYPE_BOOLEAN,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%attendees}}');
    }
}
