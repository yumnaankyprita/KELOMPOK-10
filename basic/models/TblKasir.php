<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_kasir}}".
 *
 * @property int $Id_Kasir
 * @property string|null $Nama_Kasir
 * @property string|null $Alamat_Kasir
 *
 * @property TblMemasukkan[] $tblMemasukkans
 */
class TblKasir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_kasir}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Kasir'], 'required'],
            [['Id_Kasir'], 'integer'],
            [['Nama_Kasir', 'Alamat_Kasir'], 'string', 'max' => 45],
            [['Id_Kasir'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Kasir' => 'Id Kasir',
            'Nama_Kasir' => 'Nama Kasir',
            'Alamat_Kasir' => 'Alamat Kasir',
        ];
    }

    /**
     * Gets query for [[TblMemasukkans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMemasukkans()
    {
        return $this->hasMany(TblMemasukkan::class, ['Id_Kasir' => 'Id_Kasir']);
    }
}
