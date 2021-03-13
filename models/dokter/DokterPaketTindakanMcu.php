<?php

namespace app\models\dokter;

use Yii;

/**
 * This is the model class for table "mcu.dokter_paket_tindakan_mcu".
 *
 * @property int $id
 * @property int $id_paket_tindakan_mcu
 * @property string $tanggal
 * @property string $kode_dokter
 */
class DokterPaketTindakanMcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.dokter_paket_tindakan_mcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_paket_tindakan_mcu', 'tanggal', 'kode_dokter'], 'required'],
            [['id', 'id_paket_tindakan_mcu'], 'default', 'value' => null],
            [['id', 'id_paket_tindakan_mcu'], 'integer'],
            [['tanggal'], 'safe'],
            [['kode_dokter'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_paket_tindakan_mcu' => 'Id Paket Tindakan Mcu',
            'tanggal' => 'Tanggal',
            'kode_dokter' => 'Kode Dokter',
        ];
    }
}
