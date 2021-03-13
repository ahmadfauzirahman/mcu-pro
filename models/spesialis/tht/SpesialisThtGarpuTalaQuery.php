<?php

namespace app\models\spesialis\tht;

/**
 * This is the ActiveQuery class for [[SpesialisThtGarpuTala]].
 *
 * @see SpesialisThtGarpuTala
 */
class SpesialisThtGarpuTalaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisThtGarpuTala[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisThtGarpuTala|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
