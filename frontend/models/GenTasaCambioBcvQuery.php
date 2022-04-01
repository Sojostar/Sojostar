<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[GenTasaCambioBcv]].
 *
 * @see GenTasaCambioBcv
 */
class GenTasaCambioBcvQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GenTasaCambioBcv[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GenTasaCambioBcv|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
