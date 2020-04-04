<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_members".
 *
 * @property int $member_id
 * @property int $flat_id
 * @property string $name
 * @property string|null $contact
 * @property int|null $age
 *
 * @property Flats $flat
 * @property Flats $flat0
 */
class Members extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flat_id', 'name'], 'required'],
            [['flat_id', 'age'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 14],
            [['flat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flats::className(), 'targetAttribute' => ['flat_id' => 'flat_id']],
            [['flat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flats::className(), 'targetAttribute' => ['flat_id' => 'flat_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'flat_id' => 'Flat ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'age' => 'Age',
        ];
    }

    /**
     * Gets query for [[Flat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFlat()
    {
        return $this->hasOne(Flats::className(), ['flat_id' => 'flat_id']);
    }

    /**
     * Gets query for [[Flat0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFlat0()
    {
        return $this->hasOne(Flats::className(), ['flat_id' => 'flat_id']);
    }
}
