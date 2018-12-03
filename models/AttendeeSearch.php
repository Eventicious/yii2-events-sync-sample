<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Attendee;

/**
 * AttendeeSearch represents the model behind the search form of `app\models\Attendee`.
 */
class AttendeeSearch extends Attendee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['firstName', 'lastName', 'position', 'city', 'vk', 'twitter', 'facebook', 'email', 'phone', 'description', 'externalImagePath', 'externalThumbnailPath', 'company', 'language', 'networkingCode', 'privateInfo'], 'safe'],
            [['showEmail', 'showPhone', 'isSpeaker', 'authorized', 'confirmed', 'moderated', 'withdrawed'], 'boolean'],
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
        $query = Attendee::find();

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
            'showEmail' => $this->showEmail,
            'showPhone' => $this->showPhone,
            'isSpeaker' => $this->isSpeaker,
            'authorized' => $this->authorized,
            'confirmed' => $this->confirmed,
            'moderated' => $this->moderated,
            'withdrawed' => $this->withdrawed,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'vk', $this->vk])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'externalImagePath', $this->externalImagePath])
            ->andFilterWhere(['like', 'externalThumbnailPath', $this->externalThumbnailPath])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'networkingCode', $this->networkingCode])
            ->andFilterWhere(['like', 'privateInfo', $this->privateInfo]);

        return $dataProvider;
    }
}
