<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_mengelola}}".
 *
 * @property int $Id_Kelola
 * @property int|null $Id_Barang
 * @property int|null $Id_Karyawan
 * @property string|null $Tgl_Kelola
 *
 * @property TblStokbarang $barang
 * @property TblKaryawangudang $karyawan
 * @property TblKelolabarang[] $tblKelolabarangs
 */
class TblMengelola extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_mengelola}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Kelola'], 'required'],
            [['Id_Kelola', 'Id_Barang', 'Id_Karyawan'], 'integer'],
            [['Tgl_Kelola'], 'safe'],
            [['Id_Kelola'], 'unique'],
            [['Id_Barang'], 'exist', 'skipOnError' => true, 'targetClass' => TblStokbarang::class, 'targetAttribute' => ['Id_Barang' => 'Id_Barang']],
            [['Id_Karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => TblKaryawangudang::class, 'targetAttribute' => ['Id_Karyawan' => 'Id_Karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Kelola' => 'Id Kelola',
            'Id_Barang' => 'Id Barang',
            'Id_Karyawan' => 'Id Karyawan',
            'Tgl_Kelola' => 'Tgl Kelola',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(TblStokbarang::class, ['Id_Barang' => 'Id_Barang']);
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(TblKaryawangudang::class, ['Id_Karyawan' => 'Id_Karyawan']);
    }

    /**
     * Gets query for [[TblKelolabarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblKelolabarangs()
    {
        return $this->hasMany(TblKelolabarang::class, ['Id_Kelola' => 'Id_Kelola']);
    }
}
