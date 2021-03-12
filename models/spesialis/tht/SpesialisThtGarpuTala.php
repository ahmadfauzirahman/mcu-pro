<?php

namespace app\models\spesialis\tht;

use Yii;

/**
 * This is the model class for table "mcu.spesialis_tht_garpu_tala".
 *
 * @property int $id_spesialis_tht_garpu_tala
 * @property string $no_rekam_medik
 * @property string|null $no_daftar
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property string|null $tl_test_garpu_tala_rinne_telinga_kanan
 * @property string|null $tl_test_garpu_tala_rinne_telinga_kiri
 * @property string|null $tl_weber_telinga_kanan
 * @property string|null $tl_weber_telinga_kiri
 * @property string|null $tl_swabach_telinga_kanan
 * @property string|null $tl_swabach_telinga_kiri
 * @property string|null $tl_bing_telinga_kanan
 * @property string|null $tl_bing_telinga_kiri
 * @property string|null $kesimpulan
 * @property string|null $riwayat
 * @property string|null $kesan
 * @property string|null $status_pemeriksaan
 */
class SpesialisThtGarpuTala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.spesialis_tht_garpu_tala';
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
            [['tl_test_garpu_tala_rinne_telinga_kanan', 'tl_test_garpu_tala_rinne_telinga_kiri', 'tl_weber_telinga_kanan', 'tl_weber_telinga_kiri', 'tl_swabach_telinga_kanan', 'tl_swabach_telinga_kiri', 'tl_bing_telinga_kanan', 'tl_bing_telinga_kiri'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_spesialis_tht_garpu_tala' => 'Id Spesialis Tht Garpu Tala',
            'no_rekam_medik' => 'No Rekam Medik',
            'no_daftar' => 'No Daftar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'tl_test_garpu_tala_rinne_telinga_kanan' => 'Tl Test Garpu Tala Rinne Telinga Kanan',
            'tl_test_garpu_tala_rinne_telinga_kiri' => 'Tl Test Garpu Tala Rinne Telinga Kiri',
            'tl_weber_telinga_kanan' => 'Tl Weber Telinga Kanan',
            'tl_weber_telinga_kiri' => 'Tl Weber Telinga Kiri',
            'tl_swabach_telinga_kanan' => 'Tl Swabach Telinga Kanan',
            'tl_swabach_telinga_kiri' => 'Tl Swabach Telinga Kiri',
            'tl_bing_telinga_kanan' => 'Tl Bing Telinga Kanan',
            'tl_bing_telinga_kiri' => 'Tl Bing Telinga Kiri',
            'kesimpulan' => 'Kesimpulan',
            'riwayat' => 'Riwayat',
            'kesan' => 'Kesan',
            'status_pemeriksaan' => 'Status Pemeriksaan',
        ];
    }
}
