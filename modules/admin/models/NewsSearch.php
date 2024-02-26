<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\News;

/**
 * NewsSearch represents the model behind the search form about `app\modules\admin\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['code', 'catelogies', 'title', 'slug', 'summary', 'content', 'date_created',                 
               'post_status', 'site_keywords', 'is_static'], 'safe'],
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
    public function search($params, $lang, $static)
    {
        $query = News::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder'=>[
                    'date_updated' => SORT_DESC, 
                    'date_created' => SORT_DESC,                     
                    'id' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);
        
        if($static == 'true'){
            $this->is_static = 1;
        } else 
            $this->is_static = 0;

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date_created' => $this->date_created,
            'post_status' => $this->post_status,
            'lang' => $lang,
            'is_static' => $this->is_static
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'catelogies', $this->catelogies])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'site_keywords', $this->site_keywords]);

        return $dataProvider;
    }
}
