<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[InvProductoEstado]].
 *
 * @see InvProductoEstado
 */
class InvProductoEstadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InvProductoEstado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InvProductoEstado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
