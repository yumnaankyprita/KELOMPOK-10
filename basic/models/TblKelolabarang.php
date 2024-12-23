<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_kelolabarang}}".
 *
 * @property int $Id_KelolaBarang
 * @property int|null $Id_Kelola
 * @property int|null $Jumlah_Barang
 *
 * @property TblMengelola $kelola
 */
class TblKelolabarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_kelolabarang}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_KelolaBarang'], 'required'],
            [['Id_KelolaBarang', 'Id_Kelola', 'Jumlah_Barang'], 'integer'],
            [['Id_KelolaBarang'], 'unique'],
            [['Id_Kelola'], 'exist', 'skipOnError' => true, 'targetClass' => TblMengelola::class, 'targetAttribute' => ['Id_Kelola' => 'Id_Kelola']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_KelolaBarang' => 'Id Kelola Barang',
            'Id_Kelola' => 'Id Kelola',
            'Jumlah_Barang' => 'Jumlah Barang',
        ];
    }

    /**
     * Gets query for [[Kelola]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelola()
    {
        return $this->hasOne(TblMengelola::class, ['Id_Kelola' => 'Id_Kelola']);
    }
}
