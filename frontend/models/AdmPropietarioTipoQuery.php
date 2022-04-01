<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[AdmPropietarioTipo]].
 *
 * @see AdmPropietarioTipo
 */
class AdmPropietarioTipoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AdmPropietarioTipo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AdmPropietarioTipo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
