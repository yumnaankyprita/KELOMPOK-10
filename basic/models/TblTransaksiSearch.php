<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblTransaksi;

/**
 * TblTransaksiSearch represents the model behind the search form of `app\models\TblTransaksi`.
 */
class TblTransaksiSearch extends TblTransaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Transaksi'], 'integer'],
            [['Tgl_Pembelian', 'Nama_Pembeli'], 'safe'],
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
        $query = TblTransaksi::find();

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
            'Id_Transaksi' => $this->Id_Transaksi,
            'Tgl_Pembelian' => $this->Tgl_Pembelian,
        ]);

        $query->andFilterWhere(['like', 'Nama_Pembeli', $this->Nama_Pembeli]);

        return $dataProvider;
    }
}
