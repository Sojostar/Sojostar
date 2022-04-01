<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoImpuestoValor;

/**
 * InvProductoImpuestoValorSearch represents the model behind the search form of `frontend\models\InvProductoImpuestoValor`.
 */
class InvProductoImpuestoValorSearch extends InvProductoImpuestoValor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_impuesto_valor_id', 'adm_empresa_id'], 'integer'],
            [['inv_producto_impuesto_valor_nombre', 'inv_producto_impuesto_valor_detalle'], 'safe'],
            [['inv_producto_impuesto'], 'number'],
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
        $query = InvProductoImpuestoValor::find();

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
            'inv_producto_impuesto_valor_id' => $this->inv_producto_impuesto_valor_id,
            'inv_producto_impuesto' => $this->inv_producto_impuesto,
            'adm_empresa_id' => $this->adm_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_impuesto_valor_nombre', $this->inv_producto_impuesto_valor_nombre])
            ->andFilterWhere(['like', 'inv_producto_impuesto_valor_detalle', $this->inv_producto_impuesto_valor_detalle]);

        return $dataProvider;
    }
}
