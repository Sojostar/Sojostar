<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[AdmPropietarioEstado]].
 *
 * @see AdmPropietarioEstado
 */
class AdmPropietarioEstadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AdmPropietarioEstado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AdmPropietarioEstado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
