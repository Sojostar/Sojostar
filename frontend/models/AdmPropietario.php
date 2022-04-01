<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adm_propietario".
 *
 * @property int $adm_propietario_id campo que identifica la tabla
 * @property string $adm_propietario_nombre nombre del propietario de la empresa
 * @property string $adm_propietario_apellido apellido del propietario de la cuenta
 * @property string $adm_propietario_identificacion documento de identificacion del propietario
 * @property int|null $adm_propietario_tipo_identificacion indica el tipo de identificacion y se relaciona con adm_propietario_tipo_identificacion
 * @property string $adm_propietario_email correo principal del propietario
 * @property int|null $adm_propietario_operadora_a indica la operadora del primer telefono de contacto
 * @property string|null $adm_propietario_telefono_principal telefono principal del propietario
 * @property int|null $adm_propietario_operadora_b operadora del telefono secundario del propietario
 * @property string|null $adm_propietario_telefono_secundario telefono secundario de contacto
 * @property int|null $adm_propietario_estado Estado de la cuenta del propietario
 * @property int|null $adm_propietario_tipo indica el tipo de propietario, tipo de cuenta que posee
 * @property string|null $adm_propietario_documentacion_a documentacion requerida del cliente
 * @property string|null $adm_propietario_documentacion_b documentacion requerida del cliente
 * @property string|null $adm_propietario_documentacion_c documentacion requerida del cliente
 * @property string|null $adm_propietario_direccion direccion del propietario
 * @property string $adm_propietario_fecha_cre fecha de creacion del propietario
 * @property string $adm_propietario_fecha_upd fecha de actualizacion del propietario
 *
 * @property AdmEmpresa[] $admEmpresas
 * @property AdmPropietarioEstado $admPropietarioEstado
 * @property GenOperadorasTelefonicas $admPropietarioOperadoraA
 * @property GenOperadorasTelefonicas $admPropietarioOperadoraB
 * @property AdmPropietarioTipo $admPropietarioTipo
 * @property GenTipoIdentificacion $admPropietarioTipoIdentificacion
 */
class AdmPropietario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm_propietario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adm_propietario_nombre', 'adm_propietario_apellido', 'adm_propietario_identificacion', 'adm_propietario_email'], 'required'],
            [['adm_propietario_tipo_identificacion', 'adm_propietario_operadora_a', 'adm_propietario_operadora_b', 'adm_propietario_estado', 'adm_propietario_tipo'], 'integer'],
            [['adm_propietario_direccion'], 'string'],
            [['adm_propietario_fecha_cre', 'adm_propietario_fecha_upd'], 'safe'],
            [['adm_propietario_nombre', 'adm_propietario_apellido', 'adm_propietario_identificacion'], 'string', 'max' => 100],
            [['adm_propietario_email'], 'string', 'max' => 150],
            [['adm_propietario_telefono_principal', 'adm_propietario_telefono_secundario'], 'string', 'max' => 8],
            [['adm_propietario_documentacion_a', 'adm_propietario_documentacion_b', 'adm_propietario_documentacion_c'], 'string', 'max' => 255],
            [['adm_propietario_tipo_identificacion'], 'exist', 'skipOnError' => true, 'targetClass' => GenTipoIdentificacion::className(), 'targetAttribute' => ['adm_propietario_tipo_identificacion' => 'gen_tipo_identificador_id']],
            [['adm_propietario_operadora_a'], 'exist', 'skipOnError' => true, 'targetClass' => GenOperadorasTelefonicas::className(), 'targetAttribute' => ['adm_propietario_operadora_a' => 'gen_operadoras_telefonicas']],
            [['adm_propietario_operadora_b'], 'exist', 'skipOnError' => true, 'targetClass' => GenOperadorasTelefonicas::className(), 'targetAttribute' => ['adm_propietario_operadora_b' => 'gen_operadoras_telefonicas']],
            [['adm_propietario_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => AdmPropietarioTipo::className(), 'targetAttribute' => ['adm_propietario_tipo' => 'adm_propietario_tipo_id']],
            [['adm_propietario_estado'], 'exist', 'skipOnError' => true, 'targetClass' => AdmPropietarioEstado::className(), 'targetAttribute' => ['adm_propietario_estado' => 'adm_propietario_estado_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adm_propietario_id' => 'campo que identifica la tabla',
            'adm_propietario_nombre' => 'nombre del propietario de la empresa',
            'adm_propietario_apellido' => 'apellido del propietario de la cuenta',
            'adm_propietario_identificacion' => 'documento de identificacion del propietario',
            'adm_propietario_tipo_identificacion' => 'indica el tipo de identificacion y se relaciona con adm_propietario_tipo_identificacion',
            'adm_propietario_email' => 'correo principal del propietario',
            'adm_propietario_operadora_a' => 'indica la operadora del primer telefono de contacto',
            'adm_propietario_telefono_principal' => 'telefono principal del propietario',
            'adm_propietario_operadora_b' => 'operadora del telefono secundario del propietario',
            'adm_propietario_telefono_secundario' => 'telefono secundario de contacto',
            'adm_propietario_estado' => 'Estado de la cuenta del propietario',
            'adm_propietario_tipo' => 'indica el tipo de propietario, tipo de cuenta que posee',
            'adm_propietario_documentacion_a' => 'documentacion requerida del cliente',
            'adm_propietario_documentacion_b' => 'documentacion requerida del cliente',
            'adm_propietario_documentacion_c' => 'documentacion requerida del cliente',
            'adm_propietario_direccion' => 'direccion del propietario',
            'adm_propietario_fecha_cre' => 'fecha de creacion del propietario',
            'adm_propietario_fecha_upd' => 'fecha de actualizacion del propietario',
        ];
    }

    /**
     * Gets query for [[AdmEmpresas]].
     *
     * @return \yii\db\ActiveQuery|AdmEmpresaQuery
     */
    public function getAdmEmpresas()
    {
        return $this->hasMany(AdmEmpresa::className(), ['adm_empresa_propietario' => 'adm_propietario_id']);
    }

    /**
     * Gets query for [[AdmPropietarioEstado]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioEstadoQuery
     */
    public function getAdmPropietarioEstado()
    {
        return $this->hasOne(AdmPropietarioEstado::className(), ['adm_propietario_estado_id' => 'adm_propietario_estado']);
    }

    /**
     * Gets query for [[AdmPropietarioOperadoraA]].
     *
     * @return \yii\db\ActiveQuery|GenOperadorasTelefonicasQuery
     */
    public function getAdmPropietarioOperadoraA()
    {
        return $this->hasOne(GenOperadorasTelefonicas::className(), ['gen_operadoras_telefonicas' => 'adm_propietario_operadora_a']);
    }

    /**
     * Gets query for [[AdmPropietarioOperadoraB]].
     *
     * @return \yii\db\ActiveQuery|GenOperadorasTelefonicasQuery
     */
    public function getAdmPropietarioOperadoraB()
    {
        return $this->hasOne(GenOperadorasTelefonicas::className(), ['gen_operadoras_telefonicas' => 'adm_propietario_operadora_b']);
    }

    /**
     * Gets query for [[AdmPropietarioTipo]].
     *
     * @return \yii\db\ActiveQuery|AdmPropietarioTipoQuery
     */
    public function getAdmPropietarioTipo()
    {
        return $this->hasOne(AdmPropietarioTipo::className(), ['adm_propietario_tipo_id' => 'adm_propietario_tipo']);
    }

    /**
     * Gets query for [[AdmPropietarioTipoIdentificacion]].
     *
     * @return \yii\db\ActiveQuery|GenTipoIdentificacionQuery
     */
    public function getAdmPropietarioTipoIdentificacion()
    {
        return $this->hasOne(GenTipoIdentificacion::className(), ['gen_tipo_identificador_id' => 'adm_propietario_tipo_identificacion']);
    }

    /**
     * {@inheritdoc}
     * @return AdmPropietarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdmPropietarioQuery(get_called_class());
    }
}
