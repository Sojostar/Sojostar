<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[AdmEmpresa]].
 *
 * @see AdmEmpresa
 */
class AdmEmpresaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AdmEmpresa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AdmEmpresa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
