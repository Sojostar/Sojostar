<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inv_producto_unidad".
 *
 * @property int $inv_producto_unidad_id identificador de la tabla
 * @property string $inv_producto_unidad_nombre especifica el nombre de la unidad de medida
 * @property string $inv_producto_unidad_descripcion descripcion de la unidad de medida
 * @property string $inv_producto_unidad acronimo de la unidad del producto
 * @property int $adm_empresa_id identificador de la empresa
 *
 * @property AdmEmpresa $admEmpresa
 * @property InvProducto[] $invProductos
 */
class InvProductoUnidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_producto_unidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_producto_unidad_id', 'inv_producto_unidad_nombre', 'inv_producto_unidad_descripcion', 'inv_producto_unidad', 'adm_empresa_id'], 'required'],
            [['inv_producto_unidad_id', 'adm_empresa_id'], 'integer'],
            [['inv_producto_unidad_nombre', 'inv_producto_unidad'], 'string', 'max' => 100],
            [['inv_producto_unidad_descripcion'], 'string', 'max' => 255],
            [['inv_producto_unidad_id'], 'unique'],
            [['adm_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresa::className(), 'targetAttribute' => ['adm_empresa_id' => 'adm_empresa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_producto_unidad_id' => 'identificador de la tabla',
            'inv_producto_unidad_nombre' => 'especifica el nombre de la unidad de medida',
            'inv_producto_unidad_descripcion' => 'descripcion de la unidad de medida',
            'inv_producto_unidad' => 'acronimo de la unidad del producto',
            'adm_empresa_id' => 'identificador de la empresa',
        ];
    }

    /**
     * Gets query for [[AdmEmpresa]].
     *
     * @return \yii\db\ActiveQuery|\frontend\models\AdmEmpresaQuery
     */
    public function getAdmEmpresa()
    {
        return $this->hasOne(AdmEmpresa::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery|frontend\models\InvProductoQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_unidad' => 'inv_producto_unidad_id']);
    }

    /**
     * {@inheritdoc}
     * @return \frontend\models\InvProductoUnidadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\InvProductoUnidadQuery(get_called_class());
    }
}
