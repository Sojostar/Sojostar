<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_categoria_jerarquia".
 *
 * @property int $inv_producto_categoria_jerarquia_id identificador de la tabla
 * @property int $inv_producto_categoria_jerarquia_padre identificador del padre
 * @property int $inv_producto_categoria_jerarquia_hijo identificador del hijo
 *
 * @property InvProductoCategoria $invProductoCategoriaJerarquiaHijo
 * @property InvProductoCategoria $invProductoCategoriaJerarquiaPadre
 * @property InvProducto[] $invProductos
 */
class InvProductoCategoriaJerarquia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_categoria_jerarquia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_categoria_jerarquia_padre', 'inv_producto_categoria_jerarquia_hijo'], 'required'],
            [['inv_producto_categoria_jerarquia_padre', 'inv_producto_categoria_jerarquia_hijo'], 'integer'],
            [['inv_producto_categoria_jerarquia_padre'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoCategoria::className(), 'targetAttribute' => ['inv_producto_categoria_jerarquia_padre' => 'inv_producto_categoria_id']],
            [['inv_producto_categoria_jerarquia_hijo'], 'exist', 'skipOnError' => true, 'targetClass' => InvProductoCategoria::className(), 'targetAttribute' => ['inv_producto_categoria_jerarquia_hijo' => 'inv_producto_categoria_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_categoria_jerarquia_id' => 'Inv Producto Categoria Jerarquia ID',
            'inv_producto_categoria_jerarquia_padre' => 'Inv Producto Categoria Jerarquia Padre',
            'inv_producto_categoria_jerarquia_hijo' => 'Inv Producto Categoria Jerarquia Hijo',
        ];
    }

    /**
     * Gets query for [[InvProductoCategoriaJerarquiaHijo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvProductoCategoriaJerarquiaHijo()
    {
        return $this->hasOne(InvProductoCategoria::className(), ['inv_producto_categoria_id' => 'inv_producto_categoria_jerarquia_hijo']);
    }

    /**
     * Gets query for [[InvProductoCategoriaJerarquiaPadre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvProductoCategoriaJerarquiaPadre()
    {
        return $this->hasOne(InvProductoCategoria::className(), ['inv_producto_categoria_id' => 'inv_producto_categoria_jerarquia_padre']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_categoria' => 'inv_producto_categoria_jerarquia_id']);
    }
}
