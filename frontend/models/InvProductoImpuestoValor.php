<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_impuesto_valor".
 *
 * @property int $inv_producto_impuesto_valor_id identificador de la tabla
 * @property string $inv_producto_impuesto_valor_nombre nombre del impuesto
 * @property float $inv_producto_impuesto valor del impuesto
 * @property string $inv_producto_impuesto_valor_detalle descripcion del impuesto
 * @property int $adm_empresa_id identificador de la empresa
 *
 * @property AdmEmpresa $admEmpresa
 * @property InvProducto[] $invProductos
 */
class InvProductoImpuestoValor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_impuesto_valor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_impuesto_valor_nombre', 'inv_producto_impuesto', 'inv_producto_impuesto_valor_detalle', 'adm_empresa_id'], 'required'],
            [['inv_producto_impuesto'], 'number'],
            [['adm_empresa_id'], 'integer'],
            [['inv_producto_impuesto_valor_nombre'], 'string', 'max' => 100],
            [['inv_producto_impuesto_valor_detalle'], 'string', 'max' => 255],
            [['adm_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresa::className(), 'targetAttribute' => ['adm_empresa_id' => 'adm_empresa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_impuesto_valor_id' => 'identificador de la tabla',
            'inv_producto_impuesto_valor_nombre' => 'nombre del impuesto',
            'inv_producto_impuesto' => 'valor del impuesto',
            'inv_producto_impuesto_valor_detalle' => 'descripcion del impuesto',
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
        return $this->hasMany(InvProducto::className(), ['inv_producto_impuesto_valor' => 'inv_producto_impuesto_valor_id']);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoImpuestoValorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvProductoImpuestoValorQuery(get_called_class());
    }
}
