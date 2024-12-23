<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblMenu;

/**
 * TblMenuSearch represents the model behind the search form of `app\models\TblMenu`.
 */
class TblMenuSearch extends TblMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Menu', 'Harga_Menu'], 'integer'],
            [['Nama_Menu'], 'safe'],
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
        $query = TblMenu::find();

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
            'Id_Menu' => $this->Id_Menu,
            'Harga_Menu' => $this->Harga_Menu,
        ]);

        $query->andFilterWhere(['like', 'Nama_Menu', $this->Nama_Menu]);

        return $dataProvider;
    }
}
