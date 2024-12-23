<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_karyawangudang".
 *
 * @property int $Id_Karyawan
 * @property string|null $Nama_Karyawan
 * @property string|null $Alamat_Karyawan
 *
 * @property TblMengelola[] $tblMengelolas
 */
class TblKaryawangudang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_karyawangudang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Karyawan'], 'required'],
            [['Id_Karyawan'], 'integer'],
            [['Nama_Karyawan', 'Alamat_Karyawan'], 'string', 'max' => 45],
            [['Id_Karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Karyawan' => 'Id Karyawan',
            'Nama_Karyawan' => 'Nama Karyawan',
            'Alamat_Karyawan' => 'Alamat Karyawan',
        ];
    }

    /**
     * Gets query for [[TblMengelolas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMengelolas()
    {
        return $this->hasMany(TblMengelola::class, ['Id_Karyawan' => 'Id_Karyawan']);
    }
}
