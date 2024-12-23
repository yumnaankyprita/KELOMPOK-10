<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_pembelian}}".
 *
 * @property int $Id_Pembelian
 * @property int|null $Id_Transaksi
 * @property int|null $Id_Menu
 * @property int|null $Jumlah_Dibeli
 * @property int|null $Total_Harga
 *
 * @property TblMenu $menu
 * @property TblTransaksi $transaksi
 */
class TblPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_pembelian}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembelian'], 'required'],
            [['Id_Pembelian', 'Id_Transaksi', 'Id_Menu', 'Jumlah_Dibeli', 'Total_Harga'], 'integer'],
            [['Id_Pembelian'], 'unique'],
            [['Id_Transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => TblTransaksi::class, 'targetAttribute' => ['Id_Transaksi' => 'Id_Transaksi']],
            [['Id_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => TblMenu::class, 'targetAttribute' => ['Id_Menu' => 'Id_Menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pembelian' => 'Id Pembelian',
            'Id_Transaksi' => 'Id Transaksi',
            'Id_Menu' => 'Id Menu',
            'Jumlah_Dibeli' => 'Jumlah Dibeli',
            'Total_Harga' => 'Total Harga',
        ];
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(TblMenu::class, ['Id_Menu' => 'Id_Menu']);
    }

    /**
     * Gets query for [[Transaksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(TblTransaksi::class, ['Id_Transaksi' => 'Id_Transaksi']);
    }
}
