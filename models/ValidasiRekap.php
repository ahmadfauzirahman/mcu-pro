<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.validasi_rekap".
 *
 * @property int $id_validasi
 * @property string|null $score
 * @property string|null $ket
 * @property string|null $no_rekam_medik
 * @property string|null $id_m_pemeriksaan_fisik
 * @property string|null $tgl_created
 */
class ValidasiRekap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.validasi_rekap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['score', 'ket', 'no_rekam_medik', 'id_m_pemeriksaan_fisik'], 'string'],
            [['tgl_created'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_validasi' => 'Id Validasi',
            'score' => 'Score',
            'ket' => 'Ket',
            'no_rekam_medik' => 'No Rekam Medik',
            'id_m_pemeriksaan_fisik' => 'Id M Pemeriksaan Fisik',
            'tgl_created' => 'Tgl Created',
        ];
    }
}
