<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblPembelian;

/**
 * TblPembelianSearch represents the model behind the search form of `app\models\TblPembelian`.
 */
class TblPembelianSearch extends TblPembelian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembelian', 'Id_Transaksi', 'Id_Menu', 'Jumlah_Dibeli', 'Total_Harga'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblPembelian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_Pembelian' => $this->Id_Pembelian,
            'Id_Transaksi' => $this->Id_Transaksi,
            'Id_Menu' => $this->Id_Menu,
            'Jumlah_Dibeli' => $this->Jumlah_Dibeli,
            'Total_Harga' => $this->Total_Harga,
        ]);

        return $dataProvider;
    }
}
