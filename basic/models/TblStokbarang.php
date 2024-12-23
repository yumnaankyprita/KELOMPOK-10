<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_stokbarang}}".
 *
 * @property int $Id_Barang
 * @property string|null $Nama_Barang
 * @property int|null $Jumlah_Barang
 *
 * @property TblKebutuhan[] $tblKebutuhans
 * @property TblMengelola[] $tblMengelolas
 */
class TblStokbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_stokbarang}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Barang'], 'required'],
            [['Id_Barang', 'Jumlah_Barang'], 'integer'],
            [['Nama_Barang'], 'string', 'max' => 45],
            [['Id_Barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Barang' => 'Id Barang',
            'Nama_Barang' => 'Nama Barang',
            'Jumlah_Barang' => 'Jumlah Barang',
        ];
    }

    /**
     * Gets query for [[TblKebutuhans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblKebutuhans()
    {
        return $this->hasMany(TblKebutuhan::class, ['Id_Barang' => 'Id_Barang']);
    }

    /**
     * Gets query for [[TblMengelolas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMengelolas()
    {
        return $this->hasMany(TblMengelola::class, ['Id_Barang' => 'Id_Barang']);
    }
}
