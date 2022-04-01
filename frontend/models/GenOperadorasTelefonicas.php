<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gen_operadoras_telefonicas".
 *
 * @property int $gen_operadoras_telefonicas identificador de la tabla
 * @property string|null $gen_operadoras_telefonicas_numeros numero telefonico de las operadoras
 * @property string|null $gen_operadoras_telefonicas_nombre nombre de la operadora telefonica
 *
 * @property AdmEmpresa[] $admEmpresas
 * @property AdmPropietario[] $admPropietarios
 * @property AdmPropietario[] $admPropietarios0
 * @property RrhhEmpleado[] $rrhhEmpleados
 * @property RrhhEmpleado[] $rrhhEmpleados0
 * @property RrhhEmpleado[] $rrhhEmpleados1
 * @property RrhhEmpleado[] $rrhhEmpleados2
 * @property RrhhEmpleado[] $rrhhEmpleados3
 * @property RrhhEmpleado[] $rrhhEmpleados4
 * @property RrhhEmpleado[] $rrhhEmpleados5
 */
class GenOperadorasTelefonicas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_operadoras_telefonicas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_operadoras_telefonicas_numeros'], 'string', 'max' => 4],
            [['gen_operadoras_telefonicas_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gen_operadoras_telefonicas' => 'identificador de la tabla',
            'gen_operadoras_telefonicas_numeros' => 'numero telefonico de las operadoras',
            'gen_operadoras_telefonicas_nombre' => 'nombre de la operadora telefonica',
        ];
    }

    /**
     * Gets query for [[AdmEmpresas]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresas()
    {
        return $this->hasMany(AdmEmpresa::className(), ['adm_empresa_tlf_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[AdmPropietarios]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmPropietarios()
    {
        return $this->hasMany(AdmPropietario::className(), ['adm_propietario_operadora_a' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[AdmPropietarios0]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmPropietarios0()
    {
        return $this->hasMany(AdmPropietario::className(), ['adm_propietario_operadora_b' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_telef_local_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados0]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados0()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_telef_princ_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados1]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados1()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_telef_sec_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados2]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados2()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_ref_a_telf_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados3]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados3()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_ref_telf_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados4]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados4()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_emer_telf_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * Gets query for [[RrhhEmpleados5]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoQuery
     */
    public function getRrhhEmpleados5()
    {
        return $this->hasMany(RrhhEmpleado::className(), ['rrhh_empleado_emer_cel_oper' => 'gen_operadoras_telefonicas']);
    }

    /**
     * {@inheritdoc}
     * @return GenOperadorasTelefonicasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenOperadorasTelefonicasQuery(get_called_class());
    }
}
