<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gen_tipo_identificacion".
 *
 * @property int $gen_tipo_identificador_id identificador de la tabla
 * @property string|null $gen_tipo_identificacion_acronimo especifica el acronimo
 * @property string|null $gen_tipo_identificacion_nombre especifica el nombre del tipo de identificacion
 * @property string|null $gen_tipo_identificacion_descripcion descripcion del tipo de identificador
 *
 * @property AdmEmpresa[] $admEmpresas
 * @property AdmPropietario[] $admPropietarios
 */
class GenTipoIdentificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_tipo_identificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_tipo_identificacion_acronimo'], 'string', 'max' => 1],
            [['gen_tipo_identificacion_nombre'], 'string', 'max' => 100],
            [['gen_tipo_identificacion_descripcion'], 'string', 'max' => 250],
            [['gen_tipo_identificacion_acronimo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gen_tipo_identificador_id' => 'identificador de la tabla',
            'gen_tipo_identificacion_acronimo' => 'especifica el acronimo',
            'gen_tipo_identificacion_nombre' => 'especifica el nombre del tipo de identificacion',
            'gen_tipo_identificacion_descripcion' => 'descripcion del tipo de identificador',
        ];
    }

    /**
     * Gets query for [[AdmEmpresas]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresas()
    {
        return $this->hasMany(AdmEmpresa::className(), ['adm_empresa_identificacion_tipo' => 'gen_tipo_identificador_id']);
    }

    /**
     * Gets query for [[AdmPropietarios]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmPropietarios()
    {
        return $this->hasMany(AdmPropietario::className(), ['adm_propietario_tipo_identificacion' => 'gen_tipo_identificador_id']);
    }

    /**
     * {@inheritdoc}
     * @return GenTipoIdentificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenTipoIdentificacionQuery(get_called_class());
    }
}
