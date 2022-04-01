<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_empresa_tipo".
 *
 * @property int $adm_empresa_tipo_id identificador de la tabla
 * @property string $adm_empresa_tipo_nombre tipo de empresa
 * @property string $adm_empresa_tipo_descripcion descripcion del tipo de empresa
 *
 * @property AdmEmpresa[] $admEmpresas
 */
class AdmEmpresaTipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_empresa_tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_empresa_tipo_nombre', 'adm_empresa_tipo_descripcion'], 'required'],
            [['adm_empresa_tipo_nombre', 'adm_empresa_tipo_descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_empresa_tipo_id' => 'identificador de la tabla',
            'adm_empresa_tipo_nombre' => 'tipo de empresa',
            'adm_empresa_tipo_descripcion' => 'descripcion del tipo de empresa',
        ];
    }

    /**
     * Gets query for [[AdmEmpresas]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresas()
    {
        return $this->hasMany(AdmEmpresa::className(), ['adm_empresa_tipo' => 'adm_empresa_tipo_id']);
    }

    /**
     * {@inheritdoc}
     * @return AdmEmpresaTipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmEmpresaTipoQuery(get_called_class());
    }
}
