<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_kebutuhan}}".
 *
 * @property int $Id_Kebutuhan
 * @property int|null $Id_Menu
 * @property int|null $Id_Barang
 * @property int|null $Jumlah
 *
 * @property TblStokbarang $barang
 * @property TblMenu $menu
 */
class TblKebutuhan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_kebutuhan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Kebutuhan'], 'required'],
            [['Id_Kebutuhan', 'Id_Menu', 'Id_Barang', 'Jumlah'], 'integer'],
            [['Id_Kebutuhan'], 'unique'],
            [['Id_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => TblMenu::class, 'targetAttribute' => ['Id_Menu' => 'Id_Menu']],
            [['Id_Barang'], 'exist', 'skipOnError' => true, 'targetClass' => TblStokbarang::class, 'targetAttribute' => ['Id_Barang' => 'Id_Barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Kebutuhan' => 'Id Kebutuhan',
            'Id_Menu' => 'Id Menu',
            'Id_Barang' => 'Id Barang',
            'Jumlah' => 'Jumlah',
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
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(TblMenu::class, ['Id_Menu' => 'Id_Menu']);
    }
}
