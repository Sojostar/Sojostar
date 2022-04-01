<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[GenMoneda]].
 *
 * @see GenMoneda
 */
class GenMonedaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GenMoneda[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GenMoneda|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
