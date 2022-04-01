<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[GenOperadorasTelefonicas]].
 *
 * @see GenOperadorasTelefonicas
 */
class GenOperadorasTelefonicasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GenOperadorasTelefonicas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GenOperadorasTelefonicas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
