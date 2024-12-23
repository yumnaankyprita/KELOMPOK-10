<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblKasir;

/**
 * TblKasirSearch represents the model behind the search form of `app\models\TblKasir`.
 */
class TblKasirSearch extends TblKasir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Kasir'], 'integer'],
            [['Nama_Kasir', 'Alamat_Kasir'], 'safe'],
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
        $query = TblKasir::find();

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
            'Id_Kasir' => $this->Id_Kasir,
        ]);

        $query->andFilterWhere(['like', 'Nama_Kasir', $this->Nama_Kasir])
            ->andFilterWhere(['like', 'Alamat_Kasir', $this->Alamat_Kasir]);

        return $dataProvider;
    }
}
