<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.hasil_radiologi".
 *
 * @property string $id_hasil_radiologi
 * @property string $id_data_pelayanan
 * @property string $no_rekam_medik
 * @property string $no_registrasi
 * @property string|null $no_mcu
 * @property string|null $kode_debitur
 * @property string|null $kode_pemeriksa
 * @property string $result_pemeriksaan
 * @property string|null $hasil
 * @property string $status
 */
class HasilRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.hasil_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hasil_radiologi', 'id_data_pelayanan', 'no_rekam_medik', 'no_registrasi', 'result_pemeriksaan', 'status'], 'required'],
            [['hasil'], 'string'],
            [['id_hasil_radiologi', 'id_data_pelayanan', 'no_rekam_medik', 'no_mcu'], 'string', 'max' => 100],
            [['no_registrasi'], 'string', 'max' => 225],
            [['kode_debitur'], 'string', 'max' => 255],
            [['kode_pemeriksa'], 'string', 'max' => 20],
            [['result_pemeriksaan', 'status'], 'string', 'max' => 2],
            [['id_hasil_radiologi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hasil_radiologi' => 'Id Hasil Radiologi',
            'id_data_pelayanan' => 'Id Data Pelayanan',
            'no_rekam_medik' => 'No Rekam Medik',
            'no_registrasi' => 'No Registrasi',
            'no_mcu' => 'No Mcu',
            'kode_debitur' => 'Kode Debitur',
            'kode_pemeriksa' => 'Kode Pemeriksa',
            'result_pemeriksaan' => 'Result Pemeriksaan',
            'hasil' => 'Hasil',
            'status' => 'Status',
        ];
    }
}
