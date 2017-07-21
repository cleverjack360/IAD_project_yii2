<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Gameinfo;

/**
 * GameinfoSearch represents the model behind the search form about `backend\models\Gameinfo`.
 */
class GameinfoSearch extends Gameinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_id', 'companies_company_id'], 'integer'],
            [['game_name', 'game_release', 'game_category'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Gameinfo::find();

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
            'game_id' => $this->game_id,
            'companies_company_id' => $this->companies_company_id,
            'game_release' => $this->game_release,
        ]);

        $query->andFilterWhere(['like', 'game_name', $this->game_name])
            ->andFilterWhere(['like', 'game_category', $this->game_category]);

        return $dataProvider;
    }
}
