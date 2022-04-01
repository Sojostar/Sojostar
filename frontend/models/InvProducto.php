<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto".
 *
 * @property int $inv_producto_id identificador de la tabla
 * @property string $inv_producto_nombre nombre del producto
 * @property string $inv_producto_np numero de parte del producto
 * @property string|null $inv_producto_ns numero de serial del producto
 * @property int $inv_producto_unidad unidad de venta del producto
 * @property int|null $inv_producto_impuesto_valor especifica el valor del impuesto al producto
 * @property int $inv_producto_vence especifica si el producto vence o no
 * @property string|null $inv_producto_vence_fecha especifica la fecha de vencimiento
 * @property float $inv_producto_costo especifica el costo de fabricacion o adquisicion del producto
 * @property int $inv_producto_costo_moneda especifica la moneda del costo del producto
 * @property float $inv_producto_precio especifica el precio de venta del producto al publico sin impuesto
 * @property int $inv_producto_precio_moneda especifica la moneda del precio del producto
 * @property int $inv_producto_cantidad_actual cantidad de productos en stock
 * @property int $inv_producto_cantidad_minima cantidad minima de productos en stock
 * @property int $inv_producto_cantidad_media cantidad media de productos en stock
 * @property int $inv_producto_estado especifica el estado del producto, ejemplo activo, deshabilitado, ya no producido, etc
 * @property int $inv_producto_ubicacion ubicacion del producto
 * @property string|null $logistica_producto_fecha_fabricacion fecha de fabricacion del producto
 * @property string|null $inv_producto_comentario comentario del producto
 * @property string|null $inv_producto_imagen imagen del producto
 * @property int $adm_empresa_id identificador de la empresa
 * @property int|null $inv_producto_categoria categoria a la cual pertenece el producto
 *
 * @property AdmEmpresa $admEmpresa
 * @property ContVentaDetalle[] $contVentaDetalles
 * @property InvProductoCategoria $invProductoCategoria
 * @property GenMoneda $invProductoCostoMoneda
 * @property InvProductoDetalle[] $invProductoDetalles
 * @property InvProductoEstado $invProductoEstado
 * @property InvProductoImpuestoValor $invProductoImpuestoValor
 * @property GenMoneda $invProductoPrecioMoneda
 * @property InvUbicacion $invProductoUbicacion
 * @property InvProductoUnidad $invProductoUnidad
 * @property GenDecision $invProductoVence
 */
class InvProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_nombre', 'inv_producto_np', 'inv_producto_unidad', 'inv_producto_vence', 'inv_producto_costo', 'inv_producto_precio', 'inv_producto_cantidad_actual', 'inv_producto_cantidad_minima', 'inv_producto_cantidad_media', 'inv_producto_estado', 'inv_producto_ubicacion', 'adm_empresa_id'], 'required'],
            [['inv_producto_unidad', 'inv_producto_impuesto_valor', 'inv_producto_vence', 'inv_producto_costo_moneda', 'inv_producto_precio_moneda', 'inv_producto_cantidad_actual', 'inv_producto_cantidad_minima', 'inv_producto_cantidad_media', 'inv_producto_estado', 'inv_producto_ubicacion', 'adm_empresa_id', 'inv_producto_categoria'], 'integer'],
            [['inv_producto_vence_fecha', 'logistica_producto_fecha_fabricacion'], 'safe'],
            [['inv_producto_costo', 'inv_producto_precio'], 'number'],
            [['inv_producto_nombre', 'inv_producto_comentario', 'inv_producto_imagen'], 'string', 'max' => 255],
            [['inv_producto_np', 'inv_producto_ns'], 'string', 'max' => 100],
            [['inv_producto_ns'], 'unique'],
            [['inv_producto_np', 'inv_producto_ns'], 'unique', 'targetAttribute' => ['inv_producto_np', 'inv_producto_ns']],
            [['inv_producto_unidad'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoUnidad::className(), 'targetAttribute' => ['inv_producto_unidad' => 'inv_producto_unidad_id']],
            [['inv_producto_impuesto_valor'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoImpuestoValor::className(), 'targetAttribute' => ['inv_producto_impuesto_valor' => 'inv_producto_impuesto_valor_id']],
            [['inv_producto_vence'], 'exist', 'skipOnError' => true, 'targetClass' => GenDecision::className(), 'targetAttribute' => ['inv_producto_vence' => 'gen_decision_id']],
            [['inv_producto_costo_moneda'], 'exist', 'skipOnError' => true, 'targetClass' => GenMoneda::className(), 'targetAttribute' => ['inv_producto_costo_moneda' => 'gen_moneda_id']],
            [['inv_producto_precio_moneda'], 'exist', 'skipOnError' => true, 'targetClass' => GenMoneda::className(), 'targetAttribute' => ['inv_producto_precio_moneda' => 'gen_moneda_id']],
            [['inv_producto_estado'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoEstado::className(), 'targetAttribute' => ['inv_producto_estado' => 'inv_producto_estado_id']],
            [['inv_producto_ubicacion'], 'exist', 'skipOnError' => true, 'targetClass' => InvUbicacion::className(), 'targetAttribute' => ['inv_producto_ubicacion' => 'inv_ubicacion_id']],
            [['adm_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresa::className(), 'targetAttribute' => ['adm_empresa_id' => 'adm_empresa_id']],
            [['inv_producto_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoCategoria::className(), 'targetAttribute' => ['inv_producto_categoria' => 'inv_producto_categoria_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_id' => 'Inv Producto ID',
            'inv_producto_nombre' => 'Inv Producto Nombre',
            'inv_producto_np' => 'Inv Producto Np',
            'inv_producto_ns' => 'Inv Producto Ns',
            'inv_producto_unidad' => 'Inv Producto Unidad',
            'inv_producto_impuesto_valor' => 'Inv Producto Impuesto Valor',
            'inv_producto_vence' => 'Inv Producto Vence',
            'inv_producto_vence_fecha' => 'Inv Producto Vence Fecha',
            'inv_producto_costo' => 'Inv Producto Costo',
            'inv_producto_costo_moneda' => 'Inv Producto Costo Moneda',
            'inv_producto_precio' => 'Inv Producto Precio',
            'inv_producto_precio_moneda' => 'Inv Producto Precio Moneda',
            'inv_producto_cantidad_actual' => 'Inv Producto Cantidad Actual',
            'inv_producto_cantidad_minima' => 'Inv Producto Cantidad Minima',
            'inv_producto_cantidad_media' => 'Inv Producto Cantidad Media',
            'inv_producto_estado' => 'Inv Producto Estado',
            'inv_producto_ubicacion' => 'Inv Producto Ubicacion',
            'logistica_producto_fecha_fabricacion' => 'Logistica Producto Fecha Fabricacion',
            'inv_producto_comentario' => 'Inv Producto Comentario',
            'inv_producto_imagen' => 'Inv Producto Imagen',
            'adm_empresa_id' => 'Adm Empresa ID',
            'inv_producto_categoria' => 'Inv Producto Categoria',
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
     * Gets query for [[ContVentaDetalles]].
     *
     * @return \yii\db\ActiveQuery|ContVentaDetalleQuery
     */
    public function getContVentaDetalles()
    {
        return $this->hasMany(ContVentaDetalle::className(), ['inv_producto_id' => 'inv_producto_id']);
    }

    /**
     * Gets query for [[InvProductoCategoria]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getInvProductoCategoria()
    {
        return $this->hasOne(InvProductoCategoria::className(), ['inv_producto_categoria_id' => 'inv_producto_categoria']);
    }

    /**
     * Gets query for [[InvProductoCostoMoneda]].
     *
     * @return \yii\db\ActiveQuery|GenMonedaQuery
     */
    public function getInvProductoCostoMoneda()
    {
        return $this->hasOne(GenMoneda::className(), ['gen_moneda_id' => 'inv_producto_costo_moneda']);
    }

    /**
     * Gets query for [[InvProductoDetalles]].
     *
     * @return \yii\db\ActiveQuery|InvProductoDetalleQuery
     */
    public function getInvProductoDetalles()
    {
        return $this->hasMany(InvProductoDetalle::className(), ['inv_producto_id' => 'inv_producto_id']);
    }

    /**
     * Gets query for [[InvProductoEstado]].
     *
     * @return \yii\db\ActiveQuery|InvProductoEstadoQuery
     */
    public function getInvProductoEstado()
    {
        return $this->hasOne(InvProductoEstado::className(), ['inv_producto_estado_id' => 'inv_producto_estado']);
    }

    /**
     * Gets query for [[InvProductoImpuestoValor]].
     *
     * @return \yii\db\ActiveQuery|InvProductoImpuestoValorQuery
     */
    public function getInvProductoImpuestoValor()
    {
        return $this->hasOne(InvProductoImpuestoValor::className(), ['inv_producto_impuesto_valor_id' => 'inv_producto_impuesto_valor']);
    }

    /**
     * Gets query for [[InvProductoPrecioMoneda]].
     *
     * @return \yii\db\ActiveQuery|GenMonedaQuery
     */
    public function getInvProductoPrecioMoneda()
    {
        return $this->hasOne(GenMoneda::className(), ['gen_moneda_id' => 'inv_producto_precio_moneda']);
    }

    /**
     * Gets query for [[InvProductoUbicacion]].
     *
     * @return \yii\db\ActiveQuery|InvUbicacionQuery
     */
    public function getInvProductoUbicacion()
    {
        return $this->hasOne(InvUbicacion::className(), ['inv_ubicacion_id' => 'inv_producto_ubicacion']);
    }

    /**
     * Gets query for [[InvProductoUnidad]].
     *
     * @return \yii\db\ActiveQuery|InvProductoUnidadQuery
     */
    public function getInvProductoUnidad()
    {
        return $this->hasOne(InvProductoUnidad::className(), ['inv_producto_unidad_id' => 'inv_producto_unidad']);
    }

    /**
     * Gets query for [[InvProductoVence]].
     *
     * @return \yii\db\ActiveQuery|GenDecisionQuery
     */
    public function getInvProductoVence()
    {
        return $this->hasOne(GenDecision::className(), ['gen_decision_id' => 'inv_producto_vence']);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvProductoQuery(get_called_class());
    }
}
