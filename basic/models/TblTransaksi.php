<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_transaksi}}".
 *
 * @property int $Id_Transaksi
 * @property string|null $Tgl_Pembelian
 * @property string|null $Nama_Pembeli
 *
 * @property TblPembelian[] $tblPembelians
 */
class TblTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_transaksi}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Transaksi'], 'required'],
            [['Id_Transaksi'], 'integer'],
            [['Tgl_Pembelian'], 'safe'],
            [['Nama_Pembeli'], 'string', 'max' => 45],
            [['Id_Transaksi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Transaksi' => 'Id Transaksi',
            'Tgl_Pembelian' => 'Tgl Pembelian',
            'Nama_Pembeli' => 'Nama Pembeli',
        ];
    }

    /**
     * Gets query for [[TblPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPembelians()
    {
        return $this->hasMany(TblPembelian::class, ['Id_Transaksi' => 'Id_Transaksi']);
    }
}
