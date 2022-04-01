<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\GenTasaCambioBcv;

/**
 * GenTasaCambioBcvSearch represents the model behind the search form of `frontend\models\GenTasaCambioBcv`.
 */
class GenTasaCambioBcvSearch extends GenTasaCambioBcv
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_tasa_cambio_bcv_id'], 'integer'],
            [['gen_tasa_cambio_bcv_usd', 'gen_tasa_cambio_bcv_eur'], 'number'],
            [['gen_tasa_cambio_bcv_fecha'], 'safe'],
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
        $query = GenTasaCambioBcv::find();

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
            'gen_tasa_cambio_bcv_id' => $this->gen_tasa_cambio_bcv_id,
            'gen_tasa_cambio_bcv_usd' => $this->gen_tasa_cambio_bcv_usd,
            'gen_tasa_cambio_bcv_eur' => $this->gen_tasa_cambio_bcv_eur,
            'gen_tasa_cambio_bcv_fecha' => $this->gen_tasa_cambio_bcv_fecha,
        ]);

        return $dataProvider;
    }
}
