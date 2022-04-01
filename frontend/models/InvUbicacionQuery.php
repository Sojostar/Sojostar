<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[InvUbicacion]].
 *
 * @see InvUbicacion
 */
class InvUbicacionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InvUbicacion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InvUbicacion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
