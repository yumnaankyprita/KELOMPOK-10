<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblMemasukkan;

/**
 * TblMemasukkanSearch represents the model behind the search form of `app\models\TblMemasukkan`.
 */
class TblMemasukkanSearch extends TblMemasukkan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_MasukMenu', 'Id_Menu', 'Id_Kasir'], 'integer'],
            [['Tgl_MasukMenu'], 'safe'],
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
        $query = TblMemasukkan::find();

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
            'Id_MasukMenu' => $this->Id_MasukMenu,
            'Tgl_MasukMenu' => $this->Tgl_MasukMenu,
            'Id_Menu' => $this->Id_Menu,
            'Id_Kasir' => $this->Id_Kasir,
        ]);

        return $dataProvider;
    }
}
