<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.gradding_mcu".
 *
 * @property string $id_gradding
 * @property string $id_data_pelayanan
 * @property string $no_rekam_medik
 * @property string $no_registrasi
 * @property string|null $no_mcu
 * @property string|null $kode_debitur
 * @property string|null $hasil
 * @property string $status
 * @property string $is_reset
 * @property float|null $poin
 */
class GraddingMcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.gradding_mcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gradding', 'id_data_pelayanan', 'no_rekam_medik', 'no_registrasi', 'status', 'is_reset'], 'required'],
            [['hasil'], 'string'],
            [['poin'], 'number'],
            [['id_gradding', 'id_data_pelayanan', 'no_rekam_medik', 'no_mcu'], 'string', 'max' => 100],
            [['no_registrasi'], 'string', 'max' => 225],
            [['kode_debitur'], 'string', 'max' => 255],
            [['status', 'is_reset'], 'string', 'max' => 2],
            [['id_gradding'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gradding' => 'Id Gradding',
            'id_data_pelayanan' => 'Id Data Pelayanan',
            'no_rekam_medik' => 'No Rekam Medik',
            'no_registrasi' => 'No Registrasi',
            'no_mcu' => 'No Mcu',
            'kode_debitur' => 'Kode Debitur',
            'hasil' => 'Hasil',
            'status' => 'Status',
            'is_reset' => 'Is Reset',
            'poin' => 'Poin',
        ];
    }
}
