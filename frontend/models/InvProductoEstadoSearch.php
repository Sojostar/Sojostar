<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoEstado;

/**
 * InvProductoEstadoSearch represents the model behind the search form of `frontend\models\InvProductoEstado`.
 */
class InvProductoEstadoSearch extends InvProductoEstado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_estado_id', 'adm_empresa_id'], 'integer'],
            [['inv_producto_estado', 'inv_producto_estado_descripcion'], 'safe'],
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
        $query = InvProductoEstado::find();

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
            'inv_producto_estado_id' => $this->inv_producto_estado_id,
            'adm_empresa_id' => $this->adm_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_estado', $this->inv_producto_estado])
            ->andFilterWhere(['like', 'inv_producto_estado_descripcion', $this->inv_producto_estado_descripcion]);

        return $dataProvider;
    }
}
