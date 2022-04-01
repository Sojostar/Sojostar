<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_propietario_tipo".
 *
 * @property int $adm_propietario_tipo_id identificacion de la tabla
 * @property string|null $adm_propietario_tipo_nombre indica el tipo de propietario
 * @property string|null $adm_propietario_tipo_descripcion descripcion del tipo
 * @property string|null $adm_propietario_tipo_upd fecha en la que se realizo actualizacion al registro
 * @property string|null $adm_propietario_tipo_cre fecha en la que se creo el registro
 *
 * @property AdmPropietario[] $admPropietarios
 */
class AdmPropietarioTipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_propietario_tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_propietario_tipo_upd', 'adm_propietario_tipo_cre'], 'safe'],
            [['adm_propietario_tipo_nombre'], 'string', 'max' => 100],
            [['adm_propietario_tipo_descripcion'], 'string', 'max' => 255],
            [['adm_propietario_tipo_nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_propietario_tipo_id' => 'identificacion de la tabla',
            'adm_propietario_tipo_nombre' => 'indica el tipo de propietario',
            'adm_propietario_tipo_descripcion' => 'descripcion del tipo',
            'adm_propietario_tipo_upd' => 'fecha en la que se realizo actualizacion al registro',
            'adm_propietario_tipo_cre' => 'fecha en la que se creo el registro',
        ];
    }

    /**
     * Gets query for [[AdmPropietarios]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmPropietarios()
    {
        return $this->hasMany(AdmPropietario::className(), ['adm_propietario_tipo' => 'adm_propietario_tipo_id']);
    }

    /**
     * {@inheritdoc}
     * @return AdmPropietarioTipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmPropietarioTipoQuery(get_called_class());
    }
}
