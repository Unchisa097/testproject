<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $contact_id
 * @property string $contact_name
 * @property string $contact_surname
 * @property int $contact_tel
 * @property string $contact_email
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_name', 'contact_surname', 'contact_tel', 'contact_email'], 'required'],
            [['contact_tel'], 'integer'],
            [['contact_name', 'contact_surname', 'contact_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'contact_name' => 'Contact Name',
            'contact_surname' => 'Contact Surname',
            'contact_tel' => 'Contact Tel',
            'contact_email' => 'Contact Email',
        ];
    }
}
