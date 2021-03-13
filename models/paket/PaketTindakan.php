<?php

namespace app\models\paket;

use Yii;

/**
 * This is the model class for table "mcu.paket_tindakan".
 *
 * @property int $kode_paket
 * @property string $kode_tindakan
 * @property string|null $kode_dokter
 * @property string|null $kode_unit
 * @property string|null $kode_tindakan_kdkel
 * @property string|null $kode_tindakan_kode1
 * @property string|null $kode_tindakan_kode2
 */
class PaketTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.paket_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_paket', 'kode_tindakan'], 'required'],
            [['kode_paket'], 'default', 'value' => null],
            [['kode_paket'], 'integer'],
            [['kode_tindakan', 'kode_dokter', 'kode_unit', 'kode_tindakan_kdkel', 'kode_tindakan_kode1', 'kode_tindakan_kode2'], 'string', 'max' => 225],
            [['kode_paket', 'kode_tindakan'], 'unique', 'targetAttribute' => ['kode_paket', 'kode_tindakan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_paket' => 'Kode Paket',
            'kode_tindakan' => 'Kode Tindakan',
            'kode_dokter' => 'Kode Dokter',
            'kode_unit' => 'Kode Unit',
            'kode_tindakan_kdkel' => 'Kode Tindakan Kdkel',
            'kode_tindakan_kode1' => 'Kode Tindakan Kode1',
            'kode_tindakan_kode2' => 'Kode Tindakan Kode2',
        ];
    }
}
