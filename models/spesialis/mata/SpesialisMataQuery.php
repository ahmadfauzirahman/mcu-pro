<?php

namespace app\models\spesialis\mata;

/**
 * This is the ActiveQuery class for [[SpesialisMata]].
 *
 * @see SpesialisMata
 */
class SpesialisMataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisMata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisMata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
