<?php

namespace app\models\dokter;

use Yii;

/**
 * This is the model class for table "mcu.dokter_bertugas".
 *
 * @property int $id_dokter_bertugas
 * @property string|null $json_dokter
 * @property string|null $tanggal_bertugas
 */
class DokterBertugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.dokter_bertugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['json_dokter'], 'string'],
            [['tanggal_bertugas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter_bertugas' => 'Id Dokter Bertugas',
            'json_dokter' => 'Json Dokter',
            'tanggal_bertugas' => 'Tanggal Bertugas',
        ];
    }
}
