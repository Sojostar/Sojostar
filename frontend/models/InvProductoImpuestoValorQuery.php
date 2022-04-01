<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[InvProductoImpuestoValor]].
 *
 * @see InvProductoImpuestoValor
 */
class InvProductoImpuestoValorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InvProductoImpuestoValor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoImpuestoValor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
