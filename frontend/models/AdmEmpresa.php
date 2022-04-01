<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_empresa".
 *
 * @property int $adm_empresa_id identificador de la tabla
 * @property string $adm_empresa_nombre Nombre de la Empresa
 * @property string $adm_empresa_identificacion identificacion de la empresa o persona
 * @property int $adm_empresa_identificacion_tipo tipo de identifiacacion
 * @property string $adm_empresa_direccion direccion de la empresa
 * @property int $adm_empresa_estado estado de la empresa
 * @property int $adm_empresa_propietario propietario de la empresa
 * @property int $adm_empresa_tipo tipo de empresa
 * @property int $adm_empresa_tlf_oper operadora telefonica
 * @property string $adm_empresa_telefono telefono principal de contacto
 * @property string $adm_empresa_cre fecha de creacion de la empresa
 * @property string $adm_empresa_upd fecha de actuallizacion de la empresa
 *
 * @property AdmEmpresaEstado $admEmpresaEstado
 * @property GenTipoIdentificacion $admEmpresaIdentificacionTipo
 * @property AdmPropietario $admEmpresaPropietario
 * @property AdmEmpresaTipo $admEmpresaTipo
 * @property GenOperadorasTelefonicas $admEmpresaTlfOper
 * @property ContVenta[] $contVentas
 * @property InvInsumosUnidadMedida[] $invInsumosUnidadMedidas
 * @property InvProductoEstado[] $invProductoEstados
 * @property InvProductoImpuestoValor[] $invProductoImpuestoValors
 * @property InvProductoUnidad[] $invProductoUnidads
 * @property InvProducto[] $invProductos
 * @property InvUbicacionJerarquia[] $invUbicacionJerarquias
 * @property InvUbicacion[] $invUbicacions
 * @property RrhhAsistenciaTipo[] $rrhhAsistenciaTipos
 * @property RrhhCargoJerarquia[] $rrhhCargoJerarquias
 * @property RrhhCargo[] $rrhhCargos
 * @property RrhhDepartamentoJerarquia[] $rrhhDepartamentoJerarquias
 * @property RrhhDepartamento[] $rrhhDepartamentos
 * @property RrhhDescYAsig[] $rrhhDescYAsigs
 * @property RrhhEmpleadoEmpresa[] $rrhhEmpleadoEmpresas
 * @property RrhhHorario[] $rrhhHorarios
 * @property RrhhLey[] $rrhhLeys
 * @property RrhhNominaCalendario[] $rrhhNominaCalendarios
 * @property RrhhNominaDetallePagosAdicionalesDet[] $rrhhNominaDetallePagosAdicionalesDets
 * @property RrhhNominaTipo[] $rrhhNominaTipos
 * @property RrhhNomina[] $rrhhNominas
 * @property RrhhPrestamoMotivo[] $rrhhPrestamoMotivos
 * @property RrhhSueldosYSalarios[] $rrhhSueldosYSalarios
 */
class AdmEmpresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_empresa_nombre', 'adm_empresa_identificacion', 'adm_empresa_identificacion_tipo', 'adm_empresa_direccion', 'adm_empresa_propietario', 'adm_empresa_tlf_oper', 'adm_empresa_telefono'], 'required'],
            [['adm_empresa_identificacion_tipo', 'adm_empresa_estado', 'adm_empresa_propietario', 'adm_empresa_tipo', 'adm_empresa_tlf_oper'], 'integer'],
            [['adm_empresa_direccion'], 'string'],
            [['adm_empresa_cre', 'adm_empresa_upd'], 'safe'],
            [['adm_empresa_nombre'], 'string', 'max' => 255],
            [['adm_empresa_identificacion'], 'string', 'max' => 9],
            [['adm_empresa_telefono'], 'string', 'max' => 7],
            [['adm_empresa_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresaTipo::className(), 'targetAttribute' => ['adm_empresa_tipo' => 'adm_empresa_tipo_id']],
            [['adm_empresa_estado'], 'exist', 'skipOnError' => true, 'targetClass' => AdmEmpresaEstado::className(), 'targetAttribute' => ['adm_empresa_estado' => 'adm_empresa_estado_id']],
            [['adm_empresa_identificacion_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => GenTipoIdentificacion::className(), 'targetAttribute' => ['adm_empresa_identificacion_tipo' => 'gen_tipo_identificador_id']],
            [['adm_empresa_tlf_oper'], 'exist', 'skipOnError' => true, 'targetClass' => GenOperadorasTelefonicas::className(), 'targetAttribute' => ['adm_empresa_tlf_oper' => 'gen_operadoras_telefonicas']],
            [['adm_empresa_propietario'], 'exist', 'skipOnError' => true, 'targetClass' => AdmPropietario::className(), 'targetAttribute' => ['adm_empresa_propietario' => 'adm_propietario_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_empresa_id' => 'identificador de la tabla',
            'adm_empresa_nombre' => 'Nombre de la Empresa',
            'adm_empresa_identificacion' => 'identificacion de la empresa o persona',
            'adm_empresa_identificacion_tipo' => 'tipo de identifiacacion',
            'adm_empresa_direccion' => 'direccion de la empresa',
            'adm_empresa_estado' => 'estado de la empresa',
            'adm_empresa_propietario' => 'propietario de la empresa',
            'adm_empresa_tipo' => 'tipo de empresa',
            'adm_empresa_tlf_oper' => 'operadora telefonica',
            'adm_empresa_telefono' => 'telefono principal de contacto',
            'adm_empresa_cre' => 'fecha de creacion de la empresa',
            'adm_empresa_upd' => 'fecha de actuallizacion de la empresa',
        ];
    }

    /**
     * Gets query for [[AdmEmpresaEstado]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaEstadoQuery
     */
    public function getAdmEmpresaEstado()
    {
        return $this->hasOne(AdmEmpresaEstado::className(), ['adm_empresa_estado_id' => 'adm_empresa_estado']);
    }

    /**
     * Gets query for [[AdmEmpresaIdentificacionTipo]].
     *
     * @return \yii\db\ActiveQuery|GenTipoIdentificacionQuery
     */
    public function getAdmEmpresaIdentificacionTipo()
    {
        return $this->hasOne(GenTipoIdentificacion::className(), ['gen_tipo_identificador_id' => 'adm_empresa_identificacion_tipo']);
    }

    /**
     * Gets query for [[AdmEmpresaPropietario]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioQuery
     */
    public function getAdmEmpresaPropietario()
    {
        return $this->hasOne(AdmPropietario::className(), ['adm_propietario_id' => 'adm_empresa_propietario']);
    }

    /**
     * Gets query for [[AdmEmpresaTipo]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaTipoQuery
     */
    public function getAdmEmpresaTipo()
    {
        return $this->hasOne(AdmEmpresaTipo::className(), ['adm_empresa_tipo_id' => 'adm_empresa_tipo']);
    }

    /**
     * Gets query for [[AdmEmpresaTlfOper]].
     *
     * @return \yii\db\ActiveQuery|GenOperadorasTelefonicasQuery
     */
    public function getAdmEmpresaTlfOper()
    {
        return $this->hasOne(GenOperadorasTelefonicas::className(), ['gen_operadoras_telefonicas' => 'adm_empresa_tlf_oper']);
    }

    /**
     * Gets query for [[ContVentas]].
     *
     * @return \yii\db\ActiveQuery|ContVentaQuery
     */
    public function getContVentas()
    {
        return $this->hasMany(ContVenta::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvInsumosUnidadMedidas]].
     *
     * @return \yii\db\ActiveQuery|InvInsumosUnidadMedidaQuery
     */
    public function getInvInsumosUnidadMedidas()
    {
        return $this->hasMany(InvInsumosUnidadMedida::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductoEstados]].
     *
     * @return \yii\db\ActiveQuery|InvProductoEstadoQuery
     */
    public function getInvProductoEstados()
    {
        return $this->hasMany(InvProductoEstado::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductoImpuestoValors]].
     *
     * @return \yii\db\ActiveQuery|InvProductoImpuestoValorQuery
     */
    public function getInvProductoImpuestoValors()
    {
        return $this->hasMany(InvProductoImpuestoValor::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductoUnidads]].
     *
     * @return \yii\db\ActiveQuery|InvProductoUnidadQuery
     */
    public function getInvProductoUnidads()
    {
        return $this->hasMany(InvProductoUnidad::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvProductos]].
     *
     * @return \yii\db\ActiveQuery|InvProductoQuery
     */
    public function getInvProductos()
    {
        return $this->hasMany(InvProducto::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvUbicacionJerarquias]].
     *
     * @return \yii\db\ActiveQuery|InvUbicacionJerarquiaQuery
     */
    public function getInvUbicacionJerarquias()
    {
        return $this->hasMany(InvUbicacionJerarquia::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[InvUbicacions]].
     *
     * @return \yii\db\ActiveQuery|InvUbicacionQuery
     */
    public function getInvUbicacions()
    {
        return $this->hasMany(InvUbicacion::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhAsistenciaTipos]].
     *
     * @return \yii\db\ActiveQuery|RrhhAsistenciaTipoQuery
     */
    public function getRrhhAsistenciaTipos()
    {
        return $this->hasMany(RrhhAsistenciaTipo::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhCargoJerarquias]].
     *
     * @return \yii\db\ActiveQuery|RrhhCargoJerarquiaQuery
     */
    public function getRrhhCargoJerarquias()
    {
        return $this->hasMany(RrhhCargoJerarquia::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhCargos]].
     *
     * @return \yii\db\ActiveQuery|RrhhCargoQuery
     */
    public function getRrhhCargos()
    {
        return $this->hasMany(RrhhCargo::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhDepartamentoJerarquias]].
     *
     * @return \yii\db\ActiveQuery|RrhhDepartamentoJerarquiaQuery
     */
    public function getRrhhDepartamentoJerarquias()
    {
        return $this->hasMany(RrhhDepartamentoJerarquia::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhDepartamentos]].
     *
     * @return \yii\db\ActiveQuery|RrhhDepartamentoQuery
     */
    public function getRrhhDepartamentos()
    {
        return $this->hasMany(RrhhDepartamento::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhDescYAsigs]].
     *
     * @return \yii\db\ActiveQuery|RrhhDescYAsigQuery
     */
    public function getRrhhDescYAsigs()
    {
        return $this->hasMany(RrhhDescYAsig::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhEmpleadoEmpresas]].
     *
     * @return \yii\db\ActiveQuery|RrhhEmpleadoEmpresaQuery
     */
    public function getRrhhEmpleadoEmpresas()
    {
        return $this->hasMany(RrhhEmpleadoEmpresa::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhHorarios]].
     *
     * @return \yii\db\ActiveQuery|RrhhHorarioQuery
     */
    public function getRrhhHorarios()
    {
        return $this->hasMany(RrhhHorario::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhLeys]].
     *
     * @return \yii\db\ActiveQuery|RrhhLeyQuery
     */
    public function getRrhhLeys()
    {
        return $this->hasMany(RrhhLey::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhNominaCalendarios]].
     *
     * @return \yii\db\ActiveQuery|RrhhNominaCalendarioQuery
     */
    public function getRrhhNominaCalendarios()
    {
        return $this->hasMany(RrhhNominaCalendario::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhNominaDetallePagosAdicionalesDets]].
     *
     * @return \yii\db\ActiveQuery|RrhhNominaDetallePagosAdicionalesDetQuery
     */
    public function getRrhhNominaDetallePagosAdicionalesDets()
    {
        return $this->hasMany(RrhhNominaDetallePagosAdicionalesDet::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhNominaTipos]].
     *
     * @return \yii\db\ActiveQuery|RrhhNominaTipoQuery
     */
    public function getRrhhNominaTipos()
    {
        return $this->hasMany(RrhhNominaTipo::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhNominas]].
     *
     * @return \yii\db\ActiveQuery|RrhhNominaQuery
     */
    public function getRrhhNominas()
    {
        return $this->hasMany(RrhhNomina::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhPrestamoMotivos]].
     *
     * @return \yii\db\ActiveQuery|RrhhPrestamoMotivoQuery
     */
    public function getRrhhPrestamoMotivos()
    {
        return $this->hasMany(RrhhPrestamoMotivo::className(), ['rrhh_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * Gets query for [[RrhhSueldosYSalarios]].
     *
     * @return \yii\db\ActiveQuery|RrhhSueldosYSalariosQuery
     */
    public function getRrhhSueldosYSalarios()
    {
        return $this->hasMany(RrhhSueldosYSalarios::className(), ['adm_empresa_id' => 'adm_empresa_id']);
    }

    /**
     * {@inheritdoc}
     * @return AdmEmpresaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmEmpresaQuery(get_called_class());
    }
}
