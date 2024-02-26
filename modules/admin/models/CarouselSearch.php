<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Carousel;

/**
 * CarouselSearch represents the model behind the search form about `app\modules\admin\models\Carousel`.
 */
class CarouselSearch extends Carousel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_created'], 'integer'],
            [['image', 'title_small', 'title_small_en', 'title_large', 'title_large_en', 'default_button', 'link_button1', 'text_button1', 'link_button2', 'text_button2', 'date_created'], 'safe'],
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
        $query = Carousel::find();

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
            'user_created' => $this->user_created,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'title_small', $this->title_small])
            ->andFilterWhere(['like', 'title_small_en', $this->title_small_en])
            ->andFilterWhere(['like', 'title_large', $this->title_large])
            ->andFilterWhere(['like', 'title_large_en', $this->title_large_en])
            ->andFilterWhere(['like', 'default_button', $this->default_button])
            ->andFilterWhere(['like', 'link_button1', $this->link_button1])
            ->andFilterWhere(['like', 'text_button1', $this->text_button1])
            ->andFilterWhere(['like', 'link_button2', $this->link_button2])
            ->andFilterWhere(['like', 'text_button2', $this->text_button2]);

        return $dataProvider;
    }
}
