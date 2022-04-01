<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProductoCategoriaJerarquia;

/**
 * InvProductoCategoriaJerarquiaSearch represents the model behind the search form of `frontend\models\InvProductoCategoriaJerarquia`.
 */
class InvProductoCategoriaJerarquiaSearch extends InvProductoCategoriaJerarquia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_categoria_jerarquia_id', 'inv_producto_categoria_jerarquia_padre', 'inv_producto_categoria_jerarquia_hijo'], 'integer'],
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
        $query = InvProductoCategoriaJerarquia::find();

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
            'inv_producto_categoria_jerarquia_id' => $this->inv_producto_categoria_jerarquia_id,
            'inv_producto_categoria_jerarquia_padre' => $this->inv_producto_categoria_jerarquia_padre,
            'inv_producto_categoria_jerarquia_hijo' => $this->inv_producto_categoria_jerarquia_hijo,
        ]);

        return $dataProvider;
    }
}
