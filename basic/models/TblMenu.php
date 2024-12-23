<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_menu}}".
 *
 * @property int $Id_Menu
 * @property string|null $Nama_Menu
 * @property int|null $Harga_Menu
 *
 * @property TblKebutuhan[] $tblKebutuhans
 * @property TblMemasukkan[] $tblMemasukkans
 * @property TblPembelian[] $tblPembelians
 */
class TblMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_menu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Menu'], 'required'],
            [['Id_Menu', 'Harga_Menu'], 'integer'],
            [['Nama_Menu'], 'string', 'max' => 45],
            [['Id_Menu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Menu' => 'Id Menu',
            'Nama_Menu' => 'Nama Menu',
            'Harga_Menu' => 'Harga Menu',
        ];
    }

    /**
     * Gets query for [[TblKebutuhans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblKebutuhans()
    {
        return $this->hasMany(TblKebutuhan::class, ['Id_Menu' => 'Id_Menu']);
    }

    /**
     * Gets query for [[TblMemasukkans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMemasukkans()
    {
        return $this->hasMany(TblMemasukkan::class, ['Id_Menu' => 'Id_Menu']);
    }

    /**
     * Gets query for [[TblPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPembelians()
    {
        return $this->hasMany(TblPembelian::class, ['Id_Menu' => 'Id_Menu']);
    }
}
