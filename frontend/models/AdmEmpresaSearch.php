<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AdmEmpresa;

/**
 * AdmEmpresaSearch represents the model behind the search form of `frontend\models\AdmEmpresa`.
 */
class AdmEmpresaSearch extends AdmEmpresa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_empresa_id', 'adm_empresa_identificacion_tipo', 'adm_empresa_estado', 'adm_empresa_propietario', 'adm_empresa_tipo', 'adm_empresa_tlf_oper'], 'integer'],
            [['adm_empresa_nombre', 'adm_empresa_identificacion', 'adm_empresa_direccion', 'adm_empresa_telefono', 'adm_empresa_cre', 'adm_empresa_upd'], 'safe'],
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
        $query = AdmEmpresa::find();

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
            'adm_empresa_id' => $this->adm_empresa_id,
            'adm_empresa_identificacion_tipo' => $this->adm_empresa_identificacion_tipo,
            'adm_empresa_estado' => $this->adm_empresa_estado,
            'adm_empresa_propietario' => $this->adm_empresa_propietario,
            'adm_empresa_tipo' => $this->adm_empresa_tipo,
            'adm_empresa_tlf_oper' => $this->adm_empresa_tlf_oper,
            'adm_empresa_cre' => $this->adm_empresa_cre,
            'adm_empresa_upd' => $this->adm_empresa_upd,
        ]);

        $query->andFilterWhere(['like', 'adm_empresa_nombre', $this->adm_empresa_nombre])
            ->andFilterWhere(['like', 'adm_empresa_identificacion', $this->adm_empresa_identificacion])
            ->andFilterWhere(['like', 'adm_empresa_direccion', $this->adm_empresa_direccion])
            ->andFilterWhere(['like', 'adm_empresa_telefono', $this->adm_empresa_telefono]);

        return $dataProvider;
    }
}
