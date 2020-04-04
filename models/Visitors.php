<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_visitors".
 *
 * @property int $visitor_id
 * @property int $security_id
 * @property int $flat_id
 * @property string $name
 * @property string $contact_no
 * @property string $coming_from
 * @property string $date
 * @property string $image
 *
 * @property Securities $security
 * @property Flats $flat
 */
class Visitors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_visitors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['security_id', 'flat_id', 'name', 'contact_no', 'coming_from', 'date', 'image'], 'required'],
            [['security_id', 'flat_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'contact_no', 'coming_from', 'image'], 'string', 'max' => 255],
            [['security_id'], 'exist', 'skipOnError' => true, 'targetClass' => Securities::className(), 'targetAttribute' => ['security_id' => 'security_id']],
            [['flat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flats::className(), 'targetAttribute' => ['flat_id' => 'flat_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'visitor_id' => 'Visitor ID',
            'security_id' => 'Security ID',
            'flat_id' => 'Flat ID',
            'name' => 'Name',
            'contact_no' => 'Contact No',
            'coming_from' => 'Coming From',
            'date' => 'Date',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Security]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSecurity()
    {
        return $this->hasOne(Securities::className(), ['security_id' => 'security_id']);
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
}
