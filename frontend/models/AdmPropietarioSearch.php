<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AdmPropietario;

/**
 * AdmPropietarioSearch represents the model behind the search form of `frontend\models\AdmPropietario`.
 */
class AdmPropietarioSearch extends AdmPropietario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_propietario_id', 'adm_propietario_tipo_identificacion', 'adm_propietario_operadora_a', 'adm_propietario_operadora_b', 'adm_propietario_estado', 'adm_propietario_tipo'], 'integer'],
            [['adm_propietario_nombre', 'adm_propietario_apellido', 'adm_propietario_identificacion', 'adm_propietario_email', 'adm_propietario_telefono_principal', 'adm_propietario_telefono_secundario', 'adm_propietario_documentacion_a', 'adm_propietario_documentacion_b', 'adm_propietario_documentacion_c', 'adm_propietario_direccion', 'adm_propietario_fecha_cre', 'adm_propietario_fecha_upd'], 'safe'],
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
        $query = AdmPropietario::find();

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
            'adm_propietario_id' => $this->adm_propietario_id,
            'adm_propietario_tipo_identificacion' => $this->adm_propietario_tipo_identificacion,
            'adm_propietario_operadora_a' => $this->adm_propietario_operadora_a,
            'adm_propietario_operadora_b' => $this->adm_propietario_operadora_b,
            'adm_propietario_estado' => $this->adm_propietario_estado,
            'adm_propietario_tipo' => $this->adm_propietario_tipo,
            'adm_propietario_fecha_cre' => $this->adm_propietario_fecha_cre,
            'adm_propietario_fecha_upd' => $this->adm_propietario_fecha_upd,
        ]);

        $query->andFilterWhere(['like', 'adm_propietario_nombre', $this->adm_propietario_nombre])
            ->andFilterWhere(['like', 'adm_propietario_apellido', $this->adm_propietario_apellido])
            ->andFilterWhere(['like', 'adm_propietario_identificacion', $this->adm_propietario_identificacion])
            ->andFilterWhere(['like', 'adm_propietario_email', $this->adm_propietario_email])
            ->andFilterWhere(['like', 'adm_propietario_telefono_principal', $this->adm_propietario_telefono_principal])
            ->andFilterWhere(['like', 'adm_propietario_telefono_secundario', $this->adm_propietario_telefono_secundario])
            ->andFilterWhere(['like', 'adm_propietario_documentacion_a', $this->adm_propietario_documentacion_a])
            ->andFilterWhere(['like', 'adm_propietario_documentacion_b', $this->adm_propietario_documentacion_b])
            ->andFilterWhere(['like', 'adm_propietario_documentacion_c', $this->adm_propietario_documentacion_c])
            ->andFilterWhere(['like', 'adm_propietario_direccion', $this->adm_propietario_direccion]);

        return $dataProvider;
    }
}
