<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form about `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['bbk', 'udk', 'author_mark', 'entry_heading', 'main_title', 'title_title', 'author_info', 'edition', 'publisher_location', 'publisher_name', 'publication_year', 'page_number', 'illustration_info', 'attachment_info', 'series_info', 'isbn', 'binding', 'price', 'circulation'], 'safe'],
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
        $query = Book::find();

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
        ]);

        $query->andFilterWhere(['like', 'bbk', $this->bbk])
            ->andFilterWhere(['like', 'udk', $this->udk])
            ->andFilterWhere(['like', 'author_mark', $this->author_mark])
            ->andFilterWhere(['like', 'entry_heading', $this->entry_heading])
            ->andFilterWhere(['like', 'main_title', $this->main_title])
            ->andFilterWhere(['like', 'title_title', $this->title_title])
            ->andFilterWhere(['like', 'author_info', $this->author_info])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'publisher_location', $this->publisher_location])
            ->andFilterWhere(['like', 'publisher_name', $this->publisher_name])
            ->andFilterWhere(['like', 'publication_year', $this->publication_year])
            ->andFilterWhere(['like', 'page_number', $this->page_number])
            ->andFilterWhere(['like', 'illustration_info', $this->illustration_info])
            ->andFilterWhere(['like', 'attachment_info', $this->attachment_info])
            ->andFilterWhere(['like', 'series_info', $this->series_info])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'binding', $this->binding])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'circulation', $this->circulation]);

        return $dataProvider;
    }
}
