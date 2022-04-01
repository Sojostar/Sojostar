<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_propietario_estado".
 *
 * @property int $adm_propietario_estado_id identificador de la tabla
 * @property string|null $adm_propietario_estado_nombre indica el nombre del estatus del propietario
 * @property string|null $adm_propietario_estado_descripcion descripcion del estado del propietario
 * @property string|null $adm_propietario_estado_cre fecha de creacion del estado
 * @property string|null $adm_propietario_estado_upd fecha de actualizacion del estado
 *
 * @property AdmPropietario[] $admPropietarios
 */
class AdmPropietarioEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_propietario_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_propietario_estado_cre', 'adm_propietario_estado_upd'], 'safe'],
            [['adm_propietario_estado_nombre'], 'string', 'max' => 100],
            [['adm_propietario_estado_descripcion'], 'string', 'max' => 255],
            [['adm_propietario_estado_nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_propietario_estado_id' => 'identificador de la tabla',
            'adm_propietario_estado_nombre' => 'indica el nombre del estatus del propietario',
            'adm_propietario_estado_descripcion' => 'descripcion del estado del propietario',
            'adm_propietario_estado_cre' => 'fecha de creacion del estado',
            'adm_propietario_estado_upd' => 'fecha de actualizacion del estado',
        ];
    }

    /**
     * Gets query for [[AdmPropietarios]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmPropietarios()
    {
        return $this->hasMany(AdmPropietario::className(), ['adm_propietario_estado' => 'adm_propietario_estado_id']);
    }

    /**
     * {@inheritdoc}
     * @return AdmPropietarioEstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmPropietarioEstadoQuery(get_called_class());
    }
}
