<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gen_moneda".
 *
 * @property int $gen_moneda_id identificador de la tabla
 * @property string $gen_moneda nombre de la moneda
 * @property int $gen_moneda_tipo_id tipo de moneda (cripto, fiat, vale, etc)
 *
 * @property GenMonedaTipo $genMonedaTipo
 * @property InvProducto[] $invProductos
 * @property InvProducto[] $invProductos0
 * @property RrhhEmpleadoExperiencia[] $rrhhEmpleadoExperiencias
 * @property RrhhNominaDetallePagosAdicionalesDet[] $rrhhNominaDetallePagosAdicionalesDets
 * @property RrhhSueldosYSalarios[] $rrhhSueldosYSalarios
 * @property RrhhSueldosYSalarios[] $rrhhSueldosYSalarios0
 */
class GenMoneda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_moneda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_moneda', 'gen_moneda_tipo_id'], 'required'],
            [['gen_moneda_tipo_id'], 'integer'],
            [['gen_moneda'], 'string', 'max' => 100],
            [['gen_moneda_tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => GenMonedaTipo::className(), 'targetAttribute' => ['gen_moneda_tipo_id' => 'gen_moneda_tipo_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gen_moneda_id' => 'identificador de la tabla',
            'gen_moneda' => 'nombre de la moneda',
            'gen_moneda_tipo_id' => 'tipo de moneda (cripto, fiat, vale, etc)',
        ];
    }

    /**
     * Gets query for [[GenMonedaTipo]].
     *
     * @return \yii\db\ActiveQuery|GenMonedaTipoQuery
     */
    public function getGenMonedaTipo()
    {
        return $this->hasOne(GenMonedaTipo::className(), ['gen_moneda_tipo_id' => 'gen_moneda_tipo_id']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_costo_moneda' => 'gen_moneda_id']);
    }

    /**
     * Gets query for [[InvProductos0]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProductos0()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_precio_moneda' => 'gen_moneda_id']);
    }

    /**
     * Gets query for [[RrhhEmpleadoExperiencias]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoExperienciaQuery
     */
    public function getRrhhEmpleadoExperiencias()
    {
        return $this->hasMany(RrhhEmpleadoExperiencia::className(), ['gen_moneda_id' => 'gen_moneda_id']);
    }

    /**
     * Gets query for [[RrhhNominaDetallePagosAdicionalesDets]].
     *
     * @return \yii\db\ActiveQuery|RrhhNominaDetallePagosAdicionalesDetQuery
     */
    public function getRrhhNominaDetallePagosAdicionalesDets()
    {
        return $this->hasMany(RrhhNominaDetallePagosAdicionalesDet::className(), ['gen_moneda_id' => 'gen_moneda_id']);
    }

    /**
     * Gets query for [[RrhhSueldosYSalarios]].
     *
     * @return \yii\db\ActiveQuery|RrhhSueldosYSalariosQuery
     */
    public function getRrhhSueldosYSalarios()
    {
        return $this->hasMany(RrhhSueldosYSalarios::className(), ['rrhh_sueldos_y_salarios_base_moneda' => 'gen_moneda_id']);
    }

    /**
     * Gets query for [[RrhhSueldosYSalarios0]].
     *
     * @return \yii\db\ActiveQuery|RrhhSueldosYSalariosQuery
     */
    public function getRrhhSueldosYSalarios0()
    {
        return $this->hasMany(RrhhSueldosYSalarios::className(), ['gen_moneda_id' => 'gen_moneda_id']);
    }

    /**
     * {@inheritdoc}
     * @return GenMonedaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenMonedaQuery(get_called_class());
    }
}
