<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_flats".
 *
 * @property int $flat_id
 * @property int $flat_no
 * @property int $wing_id
 * @property string $owner_name
 * @property string $contact_no
 * @property string $stay_by
 * @property string $username
 * @property string $password
 * @property string|null $email
 *
 * @property Wings $wing
 * @property Wings $wing0
 * @property Members[] $tblMembers
 * @property Members[] $tblMembers0
 */
class Flats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_flats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flat_no', 'wing_id', 'owner_name', 'contact_no', 'stay_by', 'username', 'password'], 'required'],
            [['flat_no', 'wing_id'], 'integer'],
            [['owner_name', 'username', 'password', 'email'], 'string', 'max' => 255],
            [['contact_no'], 'string', 'max' => 15],
            [['stay_by'], 'string', 'max' => 1],
            [['wing_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wings::className(), 'targetAttribute' => ['wing_id' => 'wing_id']],
            [['wing_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wings::className(), 'targetAttribute' => ['wing_id' => 'wing_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'flat_id' => 'Flat ID',
            'flat_no' => 'Flat No',
            'wing_id' => 'Wing ID',
            'owner_name' => 'Owner Name',
            'contact_no' => 'Contact No',
            'stay_by' => 'Stay By',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Wing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWing()
    {
        return $this->hasOne(Wings::className(), ['wing_id' => 'wing_id']);
    }

    /**
     * Gets query for [[Wing0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWing0()
    {
        return $this->hasOne(Wings::className(), ['wing_id' => 'wing_id']);
    }

    /**
     * Gets query for [[TblMembers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMembers()
    {
        return $this->hasMany(Members::className(), ['flat_id' => 'flat_id']);
    }

    /**
     * Gets query for [[TblMembers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMembers0()
    {
        return $this->hasMany(Members::className(), ['flat_id' => 'flat_id']);
    }
}
