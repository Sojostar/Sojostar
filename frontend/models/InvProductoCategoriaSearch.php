<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoCategoria;

/**
 * InvProductoCategoriaSearch represents the model behind the search form of `frontend\models\InvProductoCategoria`.
 */
class InvProductoCategoriaSearch extends InvProductoCategoria
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_categoria_id'], 'integer'],
            [['inv_producto_categoria', 'inv_producto_categoria_descripcion'], 'safe'],
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
        $query = InvProductoCategoria::find();

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
            'inv_producto_categoria_id' => $this->inv_producto_categoria_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_categoria', $this->inv_producto_categoria])
            ->andFilterWhere(['like', 'inv_producto_categoria_descripcion', $this->inv_producto_categoria_descripcion]);

        return $dataProvider;
    }
}
