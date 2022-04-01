<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoDetalle;

/**
 * InvProductoDetalleSearch represents the model behind the search form of `frontend\models\InvProductoDetalle`.
 */
class InvProductoDetalleSearch extends InvProductoDetalle
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_detalle_id', 'inv_producto_id'], 'integer'],
            [['inv_producto_detalle', 'inv_producto_detalle_descripcion'], 'safe'],
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
        $query = InvProductoDetalle::find();

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
            'inv_producto_detalle_id' => $this->inv_producto_detalle_id,
            'inv_producto_id' => $this->inv_producto_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_detalle', $this->inv_producto_detalle])
            ->andFilterWhere(['like', 'inv_producto_detalle_descripcion', $this->inv_producto_detalle_descripcion]);

        return $dataProvider;
    }
}
