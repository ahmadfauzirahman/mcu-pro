<?php

namespace app\models\spesialis\tht;

/**
 * This is the ActiveQuery class for [[SpesialisThtBerbisik]].
 *
 * @see SpesialisThtBerbisik
 */
class SpesialisThtBerbisikQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpesialisThtBerbisik[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpesialisThtBerbisik|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
