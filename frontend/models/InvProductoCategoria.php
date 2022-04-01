<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_categoria".
 *
 * @property int $inv_producto_categoria_id identificador de la tabla
 * @property string $inv_producto_categoria nombre de la categoria
 * @property string|null $inv_producto_categoria_descripcion descripcion de la categoria
 *
 * @property InvProductoCategoriaJerarquia[] $invProductoCategoriaJerarquias
 * @property InvProductoCategoriaJerarquia[] $invProductoCategoriaJerarquias0
 */
class InvProductoCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_categoria'], 'required'],
            [['inv_producto_categoria', 'inv_producto_categoria_descripcion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_categoria_id' => 'Inv Producto Categoria ID',
            'inv_producto_categoria' => 'Inv Producto Categoria',
            'inv_producto_categoria_descripcion' => 'Inv Producto Categoria Descripcion',
        ];
    }

    /**
     * Gets query for [[InvProductoCategoriaJerarquias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvProductoCategoriaJerarquias()
    {
        return $this->hasMany(InvProductoCategoriaJerarquia::className(), ['inv_producto_categoria_jerarquia_padre' => 'inv_producto_categoria_id']);
    }

    /**
     * Gets query for [[InvProductoCategoriaJerarquias0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvProductoCategoriaJerarquias0()
    {
        return $this->hasMany(InvProductoCategoriaJerarquia::className(), ['inv_producto_categoria_jerarquia_hijo' => 'inv_producto_categoria_id']);
    }
}
