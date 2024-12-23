<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_memasukkan}}".
 *
 * @property int $Id_MasukMenu
 * @property string|null $Tgl_MasukMenu
 * @property int|null $Id_Menu
 * @property int|null $Id_Kasir
 *
 * @property TblKasir $kasir
 * @property TblMenu $menu
 */
class TblMemasukkan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_memasukkan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_MasukMenu'], 'required'],
            [['Id_MasukMenu', 'Id_Menu', 'Id_Kasir'], 'integer'],
            [['Tgl_MasukMenu'], 'safe'],
            [['Id_MasukMenu'], 'unique'],
            [['Id_Menu'], 'exist', 'skipOnError' => true, 'targetClass' => TblMenu::class, 'targetAttribute' => ['Id_Menu' => 'Id_Menu']],
            [['Id_Kasir'], 'exist', 'skipOnError' => true, 'targetClass' => TblKasir::class, 'targetAttribute' => ['Id_Kasir' => 'Id_Kasir']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_MasukMenu' => 'Id Masuk Menu',
            'Tgl_MasukMenu' => 'Tgl Masuk Menu',
            'Id_Menu' => 'Id Menu',
            'Id_Kasir' => 'Id Kasir',
        ];
    }

    /**
     * Gets query for [[Kasir]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKasir()
    {
        return $this->hasOne(TblKasir::class, ['Id_Kasir' => 'Id_Kasir']);
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
