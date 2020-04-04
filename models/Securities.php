<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_securities".
 *
 * @property int $security_id
 * @property int $name
 * @property int $email
 * @property int $password
 *
 * @property Visitors[] $tblVisitors
 */
class Securities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_securities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name', 'email', 'password'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'security_id' => 'Security ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[TblVisitors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblVisitors()
    {
        return $this->hasMany(Visitors::className(), ['security_id' => 'security_id']);
    }
}
