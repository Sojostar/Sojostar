<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_estado".
 *
 * @property int $inv_producto_estado_id identificador de la tabla
 * @property string $inv_producto_estado estado del producto
 * @property string $inv_producto_estado_descripcion descripcion del estado del producto
 * @property int $adm_empresa_id identificador de la empresa
 *
 * @property AdmEmpresa $admEmpresa
 * @property InvProducto[] $invProductos
 */
class InvProductoEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_estado', 'inv_producto_estado_descripcion', 'adm_empresa_id'], 'required'],
            [['adm_empresa_id'], 'integer'],
            [['inv_producto_estado'], 'string', 'max' => 100],
            [['inv_producto_estado_descripcion'], 'string', 'max' => 255],
            [['adm_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresa::className(), 'targetAttribute' => ['adm_empresa_id' => 'adm_empresa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_estado_id' => 'identificador de la tabla',
            'inv_producto_estado' => 'estado del producto',
            'inv_producto_estado_descripcion' => 'descripcion del estado del producto',
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
        return $this->hasMany(InvProducto::className(), ['inv_producto_estado' => 'inv_producto_estado_id']);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoEstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvProductoEstadoQuery(get_called_class());
    }
}
