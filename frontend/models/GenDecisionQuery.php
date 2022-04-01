<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[GenDecision]].
 *
 * @see GenDecision
 */
class GenDecisionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GenDecision[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GenDecision|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
