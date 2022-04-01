<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[\app\models\InvProductoUnidad]].
 *
 * @see \app\models\InvProductoUnidad
 */
class InvProductoUnidadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\InvProductoUnidad[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\InvProductoUnidad|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
