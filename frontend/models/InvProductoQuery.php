<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[InvProducto]].
 *
 * @see InvProducto
 */
class InvProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InvProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InvProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
