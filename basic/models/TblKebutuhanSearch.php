<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblKebutuhan;

/**
 * TblKebutuhanSearch represents the model behind the search form of `app\models\TblKebutuhan`.
 */
class TblKebutuhanSearch extends TblKebutuhan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Kebutuhan', 'Id_Menu', 'Id_Barang', 'Jumlah'], 'integer'],
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
        $query = TblKebutuhan::find();

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
            'Id_Kebutuhan' => $this->Id_Kebutuhan,
            'Id_Menu' => $this->Id_Menu,
            'Id_Barang' => $this->Id_Barang,
            'Jumlah' => $this->Jumlah,
        ]);

        return $dataProvider;
    }
}
