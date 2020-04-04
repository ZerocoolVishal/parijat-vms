<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_admins".
 *
 * @property int $admin_id
 * @property string $name
 * @property string $email
 * @property string $passowrd
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_admins';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'passowrd'], 'required'],
            [['name', 'email', 'passowrd'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'name' => 'Name',
            'email' => 'Email',
            'passowrd' => 'Passowrd',
        ];
    }
}
