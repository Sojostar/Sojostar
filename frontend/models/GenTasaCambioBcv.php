<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gen_tasa_cambio_bcv".
 *
 * @property int $gen_tasa_cambio_bcv_id identificador de la tabla
 * @property float $gen_tasa_cambio_bcv_usd tasa de cambio dolar
 * @property float $gen_tasa_cambio_bcv_eur tasa de cambio euro
 * @property string $gen_tasa_cambio_bcv_fecha fecha de la tasa de cambio
 *
 * @property ContVenta[] $contVentas
 */
class GenTasaCambioBcv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gen_tasa_cambio_bcv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_tasa_cambio_bcv_usd', 'gen_tasa_cambio_bcv_eur'], 'required'],
            [['gen_tasa_cambio_bcv_usd', 'gen_tasa_cambio_bcv_eur'], 'number'],
            [['gen_tasa_cambio_bcv_fecha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gen_tasa_cambio_bcv_id' => 'identificador de la tabla',
            'gen_tasa_cambio_bcv_usd' => 'tasa de cambio dolar',
            'gen_tasa_cambio_bcv_eur' => 'tasa de cambio euro',
            'gen_tasa_cambio_bcv_fecha' => 'fecha de la tasa de cambio',
        ];
    }

    /**
     * Gets query for [[ContVentas]].
     *
     * @return \yii\db\ActiveQuery|ContVentaQuery
     */
    public function getContVentas()
    {
        return $this->hasMany(ContVenta::className(), ['gen_tasa_cambio_bcv_id' => 'gen_tasa_cambio_bcv_id']);
    }

    /**
     * {@inheritdoc}
     * @return GenTasaCambioBcvQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenTasaCambioBcvQuery(get_called_class());
    }
}
