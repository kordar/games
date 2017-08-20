<?php

namespace backend\modules\res\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\res\models\ResourcesMain;

/**
 * ResourcesMainSearch represents the model behind the search form about `backend\modules\res\models\ResourcesMain`.
 */
class ResourcesMainSearch extends ResourcesMain
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'categroy', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'alt', 'desc', 'url'], 'safe'],
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
        $query = ResourcesMain::find();

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
            'categroy' => $this->categroy,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'alt', $this->alt])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
