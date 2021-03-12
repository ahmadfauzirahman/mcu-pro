<?php

namespace app\models\spesialis\tht;

/**
 * This is the ActiveQuery class for [[SpesialisAudiometri]].
 *
 * @see SpesialisAudiometri
 */
class SpesialisAudiometriQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisAudiometri[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisAudiometri|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
