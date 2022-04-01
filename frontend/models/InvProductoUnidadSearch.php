<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoUnidad;

/**
 * InvProductoUnidadSearch represents the model behind the search form of `frontend\models\InvProductoUnidad`.
 */
class InvProductoUnidadSearch extends InvProductoUnidad
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_unidad_id', 'adm_empresa_id'], 'integer'],
            [['inv_producto_unidad_nombre', 'inv_producto_unidad_descripcion', 'inv_producto_unidad'], 'safe'],
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
        $query = InvProductoUnidad::find();

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
            'inv_producto_unidad_id' => $this->inv_producto_unidad_id,
            'adm_empresa_id' => $this->adm_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_unidad_nombre', $this->inv_producto_unidad_nombre])
            ->andFilterWhere(['like', 'inv_producto_unidad_descripcion', $this->inv_producto_unidad_descripcion])
            ->andFilterWhere(['like', 'inv_producto_unidad', $this->inv_producto_unidad]);

        return $dataProvider;
    }
}
