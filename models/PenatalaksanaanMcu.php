<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.penatalaksanaan_mcu".
 *
 * @property int $id_penata
 * @property string|null $jenis_permasalahan
 * @property string|null $rencana
 * @property string|null $target_waktu
 * @property string|null $hasil_yang_diharapkan
 * @property string|null $keterangan
 * @property string|null $no_rm
 * @property string|null $jenis
 * @property int|null $id_fk
 */
class PenatalaksanaanMcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.penatalaksanaan_mcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_permasalahan', 'rencana', 'target_waktu', 'hasil_yang_diharapkan', 'keterangan', 'no_rm', 'jenis'], 'string'],
            [['id_fk'], 'default', 'value' => null],
            [['id_fk'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penata' => 'Id Penata',
            'jenis_permasalahan' => 'Jenis Permasalahan',
            'rencana' => 'Rencana',
            'target_waktu' => 'Target Waktu',
            'hasil_yang_diharapkan' => 'Hasil Yang Diharapkan',
            'keterangan' => 'Keterangan',
            'no_rm' => 'No Rekam Medik',
            'jenis' => 'Jenis',
            'id_fk' => 'Id Fk',
        ];
    }
}
