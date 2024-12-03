<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Oboryd;

/**
 * OborydSearch represents the model behind the search form of `app\models\Oboryd`.
 */
class OborydSearch extends Oboryd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['название', 'IP_адрес', 'mac_адрес', 'Местоположение', 'Дата_установки', 'Время_установки'], 'safe'],
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
        $query = Oboryd::find();

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
            'id' => $this->id,
            'Дата_установки' => $this->Дата_установки,
            'Время_установки' => $this->Время_установки,
        ]);

        $query->andFilterWhere(['like', 'название', $this->название])
            ->andFilterWhere(['like', 'IP_адрес', $this->IP_адрес])
            ->andFilterWhere(['like', 'mac_адрес', $this->mac_адрес])
            ->andFilterWhere(['like', 'Местоположение', $this->Местоположение]);

        return $dataProvider;
    }
}
