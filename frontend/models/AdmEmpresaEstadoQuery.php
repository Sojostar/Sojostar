<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[AdmEmpresaEstado]].
 *
 * @see AdmEmpresaEstado
 */
class AdmEmpresaEstadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AdmEmpresaEstado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AdmEmpresaEstado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
