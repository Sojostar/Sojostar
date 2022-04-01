<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[InvProductoDetalle]].
 *
 * @see InvProductoDetalle
 */
class InvProductoDetalleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InvProductoDetalle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoDetalle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
