<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Branches;

/**
 * BranchesSearch represents the model behind the search form about `app\modules\admin\models\Branches`.
 */
class BranchesSearch extends Branches
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_created'], 'integer'],
            [['name', 'country', 'address', 'email', 'phone', 'website', 'twiter', 'facebook', 'likein', 'instagram', 'other', 'image', 'priority', 'date_created', 'show_homepage'], 'safe'],
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
        $query = Branches::find();

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
            'show_homepage' => $this->show_homepage,
            'date_created' => $this->date_created,
            'user_created' => $this->user_created,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'twiter', $this->twiter])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'likein', $this->likein])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
