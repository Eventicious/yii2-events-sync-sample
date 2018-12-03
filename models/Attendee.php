<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendees".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $position
 * @property string $city
 * @property string $vk
 * @property string $twitter
 * @property string $facebook
 * @property string $email
 * @property bool $showEmail
 * @property string $phone
 * @property bool $showPhone
 * @property string $description
 * @property string $externalImagePath
 * @property string $externalThumbnailPath
 * @property bool $isSpeaker
 * @property string $company
 * @property string $language
 * @property string $networkingCode
 * @property bool $authorized
 * @property bool $confirmed
 * @property bool $moderated
 * @property bool $withdrawed
 * @property string $privateInfo
 */
class Attendee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'position', 'city', 'vk', 'twitter', 'facebook', 'email', 'phone', 'description', 'externalImagePath', 'externalThumbnailPath', 'company', 'language', 'networkingCode', 'privateInfo'], 'string'],
            [['showEmail', 'showPhone', 'isSpeaker', 'authorized', 'confirmed', 'moderated', 'withdrawed'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'position' => 'Position',
            'city' => 'City',
            'vk' => 'Vk',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'email' => 'Email',
            'showEmail' => 'Show Email',
            'phone' => 'Phone',
            'showPhone' => 'Show Phone',
            'description' => 'Description',
            'externalImagePath' => 'External Image Path',
            'externalThumbnailPath' => 'External Thumbnail Path',
            'isSpeaker' => 'Is Speaker',
            'company' => 'Company',
            'language' => 'Language',
            'networkingCode' => 'Networking Code',
            'authorized' => 'Authorized',
            'confirmed' => 'Confirmed',
            'moderated' => 'Moderated',
            'withdrawed' => 'Withdrawed',
            'privateInfo' => 'Private Info',
        ];
    }
}
