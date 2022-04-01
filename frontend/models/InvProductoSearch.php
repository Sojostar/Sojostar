<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InvProducto;

/**
 * InvProductoSearch represents the model behind the search form of `frontend\models\InvProducto`.
 */
class InvProductoSearch extends InvProducto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_id', 'inv_producto_unidad', 'inv_producto_impuesto_valor', 'inv_producto_vence', 'inv_producto_costo_moneda', 'inv_producto_precio_moneda', 'inv_producto_cantidad_actual', 'inv_producto_cantidad_minima', 'inv_producto_cantidad_media', 'inv_producto_estado', 'inv_producto_ubicacion', 'adm_empresa_id'], 'integer'],
            [['inv_producto_nombre', 'inv_producto_np', 'inv_producto_ns', 'inv_producto_vence_fecha', 'logistica_producto_fecha_fabricacion', 'inv_producto_comentario', 'inv_producto_imagen'], 'safe'],
            [['inv_producto_costo', 'inv_producto_precio'], 'number'],
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
        $query = InvProducto::find();

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
            'inv_producto_id' => $this->inv_producto_id,
            'inv_producto_unidad' => $this->inv_producto_unidad,
            'inv_producto_impuesto_valor' => $this->inv_producto_impuesto_valor,
            'inv_producto_vence' => $this->inv_producto_vence,
            'inv_producto_vence_fecha' => $this->inv_producto_vence_fecha,
            'inv_producto_costo' => $this->inv_producto_costo,
            'inv_producto_costo_moneda' => $this->inv_producto_costo_moneda,
            'inv_producto_precio' => $this->inv_producto_precio,
            'inv_producto_precio_moneda' => $this->inv_producto_precio_moneda,
            'inv_producto_cantidad_actual' => $this->inv_producto_cantidad_actual,
            'inv_producto_cantidad_minima' => $this->inv_producto_cantidad_minima,
            'inv_producto_cantidad_media' => $this->inv_producto_cantidad_media,
            'inv_producto_estado' => $this->inv_producto_estado,
            'inv_producto_ubicacion' => $this->inv_producto_ubicacion,
            'logistica_producto_fecha_fabricacion' => $this->logistica_producto_fecha_fabricacion,
            'adm_empresa_id' => $this->adm_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'inv_producto_nombre', $this->inv_producto_nombre])
            ->andFilterWhere(['like', 'inv_producto_np', $this->inv_producto_np])
            ->andFilterWhere(['like', 'inv_producto_ns', $this->inv_producto_ns])
            ->andFilterWhere(['like', 'inv_producto_comentario', $this->inv_producto_comentario])
            ->andFilterWhere(['like', 'inv_producto_imagen', $this->inv_producto_imagen]);

        return $dataProvider;
    }
}
