<?php

namespace app\models\spesialis\tht;

use Yii;

/**
 * This is the model class for table "mcu.spesialis_tht_berbisik".
 *
 * @property int $id_spesialis_tht_berbisik
 * @property string $no_rekam_medik
 * @property string|null $no_daftar
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $tl_test_berbisik_telinga_kanan
 * @property string|null $tl_test_berbisik_telinga_kiri
 * @property string|null $tl_test_berbisik_telinga_kanan_6
 * @property string|null $tl_test_berbisik_telinga_kiri_6
 * @property string|null $tl_test_berbisik_telinga_kanan_4
 * @property string|null $tl_test_berbisik_telinga_kiri_4
 * @property string|null $tl_test_berbisik_telinga_kanan_3
 * @property string|null $tl_test_berbisik_telinga_kiri_3
 * @property string|null $tl_test_berbisik_telinga_kanan_1
 * @property string|null $tl_test_berbisik_telinga_kiri_1
 * @property string|null $kesimpulan
 * @property string|null $riwayat
 * @property string|null $kesan
 * @property string|null $tl_test_berbisik_telinga_kanan_option
 * @property string|null $tl_test_berbisik_telinga_kiri_option
 * @property string|null $status_pemeriksaan
 */
class SpesialisThtBerbisik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.spesialis_tht_berbisik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekam_medik'], 'required'],
            [['no_daftar', 'kesimpulan', 'riwayat', 'kesan', 'status_pemeriksaan'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'default', 'value' => null],
            [['created_by', 'updated_by'], 'integer'],
            [['no_rekam_medik'], 'string', 'max' => 120],
            [['tl_test_berbisik_telinga_kanan', 'tl_test_berbisik_telinga_kiri', 'tl_test_berbisik_telinga_kanan_6', 'tl_test_berbisik_telinga_kiri_6', 'tl_test_berbisik_telinga_kanan_4', 'tl_test_berbisik_telinga_kiri_4', 'tl_test_berbisik_telinga_kanan_3', 'tl_test_berbisik_telinga_kiri_3', 'tl_test_berbisik_telinga_kanan_1', 'tl_test_berbisik_telinga_kiri_1', 'tl_test_berbisik_telinga_kanan_option', 'tl_test_berbisik_telinga_kiri_option'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_spesialis_tht_berbisik' => 'Id Spesialis Tht Berbisik',
            'no_rekam_medik' => 'No Rekam Medik',
            'no_daftar' => 'No Daftar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'tl_test_berbisik_telinga_kanan' => 'Tl Test Berbisik Telinga Kanan',
            'tl_test_berbisik_telinga_kiri' => 'Tl Test Berbisik Telinga Kiri',
            'tl_test_berbisik_telinga_kanan_6' => 'Tl Test Berbisik Telinga Kanan 6',
            'tl_test_berbisik_telinga_kiri_6' => 'Tl Test Berbisik Telinga Kiri 6',
            'tl_test_berbisik_telinga_kanan_4' => 'Tl Test Berbisik Telinga Kanan 4',
            'tl_test_berbisik_telinga_kiri_4' => 'Tl Test Berbisik Telinga Kiri 4',
            'tl_test_berbisik_telinga_kanan_3' => 'Tl Test Berbisik Telinga Kanan 3',
            'tl_test_berbisik_telinga_kiri_3' => 'Tl Test Berbisik Telinga Kiri 3',
            'tl_test_berbisik_telinga_kanan_1' => 'Tl Test Berbisik Telinga Kanan 1',
            'tl_test_berbisik_telinga_kiri_1' => 'Tl Test Berbisik Telinga Kiri 1',
            'kesimpulan' => 'Kesimpulan',
            'riwayat' => 'Riwayat',
            'kesan' => 'Kesan',
            'tl_test_berbisik_telinga_kanan_option' => 'Tl Test Berbisik Telinga Kanan Option',
            'tl_test_berbisik_telinga_kiri_option' => 'Tl Test Berbisik Telinga Kiri Option',
            'status_pemeriksaan' => 'Status Pemeriksaan',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SpesialisThtBerbisikQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SpesialisThtBerbisikQuery(get_called_class());
    }
}
