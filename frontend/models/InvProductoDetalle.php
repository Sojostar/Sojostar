<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_detalle".
 *
 * @property int $inv_producto_detalle_id identificador de la tabla
 * @property string $inv_producto_detalle especifica el nombre del detalle
 * @property string $inv_producto_detalle_descripcion especifica la descripcion del detalle
 * @property int $inv_producto_id identificador del producto
 *
 * @property InvProducto $invProducto
 */
class InvProductoDetalle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_detalle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_detalle', 'inv_producto_detalle_descripcion', 'inv_producto_id'], 'required'],
            [['inv_producto_id'], 'integer'],
            [['inv_producto_detalle', 'inv_producto_detalle_descripcion'], 'string', 'max' => 255],
            [['inv_producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvProducto::className(), 'targetAttribute' => ['inv_producto_id' => 'inv_producto_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_detalle_id' => 'identificador de la tabla',
            'inv_producto_detalle' => 'especifica el nombre del detalle',
            'inv_producto_detalle_descripcion' => 'especifica la descripcion del detalle',
            'inv_producto_id' => 'identificador del producto',
        ];
    }

    /**
     * Gets query for [[InvProducto]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProducto()
    {
        return $this->hasOne(InvProducto::className(), ['inv_producto_id' => 'inv_producto_id']);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoDetalleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvProductoDetalleQuery(get_called_class());
    }
}
