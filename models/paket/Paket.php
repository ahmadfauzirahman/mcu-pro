<?php

namespace app\models\paket;

use Yii;

/**
 * This is the model class for table "mcu.paket".
 *
 * @property int $kode
 * @property string|null $nama
 * @property string|null $is_active
 * @property string|null $kode_debitur kode debitur simrs lama
 * @property string|null $jenis_paket 1=umum, 2=instansi
 */
class Paket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.paket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 100],
            [['is_active', 'jenis_paket'], 'string', 'max' => 1],
            [['kode_debitur'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'is_active' => 'Is Active',
            'kode_debitur' => 'Kode Debitur',
            'jenis_paket' => 'Jenis Paket',
        ];
    }
}
