<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-13 12:12:24 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2020-12-18 23:45:18
 */

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Json;

class BaseAR extends \yii\db\ActiveRecord
{
    public $cari_pasien;
    
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => date('Y-m-d H:i:s'),
            ],
            BlameableBehavior::className(),
        ];
    }

    public function attributeLabels()
    {
        return [
            'is_active' => 'Is Active',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
            'created_by' => 'Dibuat Oleh',
            'updated_by' => 'Diubah Oleh',
            'is_deleted' => 'Is Deleted',
            'deleted_by' => 'Dihapus Oleh',
            'deleted_at' => 'Dihapus Pada',
            'histori_data' => 'Histori Data',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($insert) {
            $newRow = $this->attributes;
            unset($newRow['histori_data']);
            $oldRiwayat = [];
            array_push($oldRiwayat, $newRow);
            // $this->riwayat = Json::encode($oldRiwayat, JSON_PRETTY_PRINT);
            $this->riwayat = Json::encode($oldRiwayat);
            $this->updateAttributes(['histori_data']);
        } else {
            if (count($changedAttributes) > 0) {
                $newRow = $this->attributes;
                unset($newRow['histori_data']);
                $oldRiwayat = $this->riwayat ? Json::decode($this->riwayat) : [];
                array_push($oldRiwayat, $newRow);
                // $this->riwayat = Json::encode($oldRiwayat, JSON_PRETTY_PRINT);
                $this->riwayat = Json::encode($oldRiwayat);
                $this->updateAttributes(['histori_data']);
            }
        }
    }

    public function getCreatedByTeks()
    {
        return $this->hasOne(User::className(), ['userid' => 'created_by']);
    }
    public function getUpdatedByTeks()
    {
        return $this->hasOne(User::className(), ['userid' => 'updated_by']);
    }

    public function setNullCreatePenerimaan()
    {
        $this->riwayat = null;
        $this->status = null;
        $this->created_at = null;
        $this->created_by = null;
        $this->updated_at = null;
        $this->updated_by = null;
    }
}
