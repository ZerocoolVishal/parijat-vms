<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Visitors;

/**
 * VisitorsSearch represents the model behind the search form of `app\models\Visitors`.
 */
class VisitorsSearch extends Visitors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visitor_id', 'security_id', 'flat_id'], 'integer'],
            [['name', 'contact_no', 'coming_from', 'date', 'image'], 'safe'],
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
        $query = Visitors::find();

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
            'visitor_id' => $this->visitor_id,
            'security_id' => $this->security_id,
            'flat_id' => $this->flat_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contact_no', $this->contact_no])
            ->andFilterWhere(['like', 'coming_from', $this->coming_from])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
