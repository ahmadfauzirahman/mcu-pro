<?php

namespace app\models\spesialis\tht;

/**
 * This is the ActiveQuery class for [[SpesialisTht]].
 *
 * @see SpesialisTht
 */
class SpesialisThtQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisTht[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisTht|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
