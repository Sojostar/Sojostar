<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_empresa_estado".
 *
 * @property int $adm_empresa_estado_id identificador de la tabla
 * @property string $adm_empresa_estado_nombre estado de la empresa
 * @property string $adm_empresa_estado_descripcion descripcion del estado de la empresa
 *
 * @property AdmEmpresa[] $admEmpresas
 */
class AdmEmpresaEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_empresa_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_empresa_estado_nombre', 'adm_empresa_estado_descripcion'], 'required'],
            [['adm_empresa_estado_nombre', 'adm_empresa_estado_descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_empresa_estado_id' => 'identificador de la tabla',
            'adm_empresa_estado_nombre' => 'estado de la empresa',
            'adm_empresa_estado_descripcion' => 'descripcion del estado de la empresa',
        ];
    }

    /**
     * Gets query for [[AdmEmpresas]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresas()
    {
        return $this->hasMany(AdmEmpresa::className(), ['adm_empresa_estado' => 'adm_empresa_estado_id']);
    }

    /**
     * {@inheritdoc}
     * @return AdmEmpresaEstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmEmpresaEstadoQuery(get_called_class());
    }
}
