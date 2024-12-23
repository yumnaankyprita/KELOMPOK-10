<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblStokbarang;

/**
 * TblStokbarangSearch represents the model behind the search form of `app\models\TblStokbarang`.
 */
class TblStokbarangSearch extends TblStokbarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Barang', 'Jumlah_Barang'], 'integer'],
            [['Nama_Barang'], 'safe'],
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
        $query = TblStokbarang::find();

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
            'Id_Barang' => $this->Id_Barang,
            'Jumlah_Barang' => $this->Jumlah_Barang,
        ]);

        $query->andFilterWhere(['like', 'Nama_Barang', $this->Nama_Barang]);

        return $dataProvider;
    }
}
