<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_ubicacion".
 *
 * @property int $inv_ubicacion_id identificador de la tabla
 * @property string|null $inv_ubicacion_nombre especifica la ubicacion
 * @property string|null $inv_ubicacion_codigo especifica el codigo de la ubicacion
 * @property string|null $inv_ubicacion_descripcion especifica la descripcion de la ubicacion
 * @property int|null $adm_empresa_id identificador de la empresa
 *
 * @property AdmEmpresa $admEmpresa
 * @property InvProducto[] $invProductos
 */
class InvUbicacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_ubicacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_empresa_id'], 'integer'],
            [['inv_ubicacion_nombre', 'inv_ubicacion_codigo'], 'string', 'max' => 100],
            [['inv_ubicacion_descripcion'], 'string', 'max' => 255],
            [['adm_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresa::className(), 'targetAttribute' => ['adm_empresa_id' => 'adm_empresa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_ubicacion_id' => 'identificador de la tabla',
            'inv_ubicacion_nombre' => 'especifica la ubicacion',
            'inv_ubicacion_codigo' => 'especifica el codigo de la ubicacion',
            'inv_ubicacion_descripcion' => 'especifica la descripcion de la ubicacion',
            'adm_empresa_id' => 'identificador de la empresa',
        ];
    }

    /**
     * Gets query for [[AdmEmpresa]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresa()
    {
        return $this->hasOne(AdmEmpresa::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_ubicacion' => 'inv_ubicacion_id']);
    }

    /**
     * {@inheritdoc}
     * @return InvUbicacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvUbicacionQuery(get_called_class());
    }
}
