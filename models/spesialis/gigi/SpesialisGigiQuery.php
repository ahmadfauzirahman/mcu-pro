<?php

namespace app\models\spesialis\gigi;

/**
 * This is the ActiveQuery class for [[SpesialisGigi]].
 *
 * @see SpesialisGigi
 */
class SpesialisGigiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisGigi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisGigi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
