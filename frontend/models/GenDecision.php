<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gen_decision".
 *
 * @property int $gen_decision_id identificador de la tabla
 * @property string $gen_decision indica la decision
 *
 * @property ContVenta[] $contVentas
 * @property InvProducto[] $invProductos
 * @property RrhhCursos[] $rrhhCursos
 * @property RrhhDiaFeriado[] $rrhhDiaFeriados
 * @property RrhhEmpleadoCargaFam[] $rrhhEmpleadoCargaFams
 * @property RrhhEmpleadoEducacion[] $rrhhEmpleadoEducacions
 */
class GenDecision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_decision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_decision'], 'required'],
            [['gen_decision'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gen_decision_id' => 'identificador de la tabla',
            'gen_decision' => 'indica la decision',
        ];
    }

    /**
     * Gets query for [[ContVentas]].
     *
     * @return \yii\db\ActiveQuery|ContVentaQuery
     */
    public function getContVentas()
    {
        return $this->hasMany(ContVenta::className(), ['cont_venta_incluye_impuesto' => 'gen_decision_id']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['inv_producto_vence' => 'gen_decision_id']);
    }

    /**
     * Gets query for [[RrhhCursos]].
     *
     * @return \yii\db\ActiveQuery|RrhhCursosQuery
     */
    public function getRrhhCursos()
    {
        return $this->hasMany(RrhhCursos::className(), ['rrhh_cursos_culminado' => 'gen_decision_id']);
    }

    /**
     * Gets query for [[RrhhDiaFeriados]].
     *
     * @return \yii\db\ActiveQuery|RrhhDiaFeriadoQuery
     */
    public function getRrhhDiaFeriados()
    {
        return $this->hasMany(RrhhDiaFeriado::className(), ['gen_decision_id' => 'gen_decision_id']);
    }

    /**
     * Gets query for [[RrhhEmpleadoCargaFams]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoCargaFamQuery
     */
    public function getRrhhEmpleadoCargaFams()
    {
        return $this->hasMany(RrhhEmpleadoCargaFam::className(), ['rrhh_empleado_carga_fam_trab_empresa' => 'gen_decision_id']);
    }

    /**
     * Gets query for [[RrhhEmpleadoEducacions]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoEducacionQuery
     */
    public function getRrhhEmpleadoEducacions()
    {
        return $this->hasMany(RrhhEmpleadoEducacion::className(), ['rrhh_empleado_educacion_graduado' => 'gen_decision_id']);
    }

    /**
     * {@inheritdoc}
     * @return GenDecisionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenDecisionQuery(get_called_class());
    }
}
