<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Services;

/**
 * ServicesSearch represents the model behind the search form about `app\modules\admin\models\Services`.
 */
class ServicesSearch extends Services
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_created'], 'integer'],
            [['name', 'name_en', 'summary', 'summary_en', 'image', 'link', 'link_en', 'priority', 'date_created'], 'safe'],
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
        $query = Services::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date_created' => $this->date_created,
            'user_created' => $this->user_created,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'summary_en', $this->summary_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'link_en', $this->link_en])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
