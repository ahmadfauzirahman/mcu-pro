<?php

namespace app\models\pemeriksaan;

use Yii;

/**
 * This is the model class for table "mcu.pemeriksaan_kesehatan_tht".
 *
 * @property int $id_pemeriksaan_tht
 * @property string $no_rekam_medik
 * @property string|null $tl_daun_telinga_kanan
 * @property string|null $tl_daun_telinga_kiri
 * @property string|null $tl_liang_telinga_kanan
 * @property string|null $tl_liang_telinga_kiri
 * @property string|null $tl_serumen_telinga_kanan
 * @property string|null $tl_serumen_telinga_kiri
 * @property string|null $tl_membrana_timpani_telinga_kanan
 * @property string|null $tl_membrana_timpani_telinga_kiri
 * @property string|null $tl_test_berbisik_telinga_kanan
 * @property string|null $tl_test_berbisik_telinga_kiri
 * @property string|null $tl_test_garpu_tata_rinne_telinga_kanan
 * @property string|null $tl_test_garpu_tata_rinne_telinga_kiri
 * @property string|null $tl_weber_telinga_kanan
 * @property string|null $tl_weber_telinga_kiri
 * @property string|null $tl_swabach_telinga_kanan
 * @property string|null $tl_swabach_telinga_kiri
 * @property string|null $tl_bing_telinga_kanan
 * @property string|null $tl_bing_telinga_kiri
 * @property string|null $tl_lain_lain
 * @property string|null $hd_meatus_nasi
 * @property string|null $hd_septum_nasi
 * @property string|null $hd_konka_nasal
 * @property string|null $hd_nyeri_ketok_sinus_maksilar
 * @property string|null $hd_penoluman
 * @property string|null $hd_lain_lain
 * @property string|null $tg_pharynx
 * @property string|null $tg_tonsil_kanan
 * @property string|null $tg_tonsil_kiri
 * @property string|null $tg_ukuran
 * @property string|null $tg_palatum
 * @property string|null $tg_lain_lain
 * @property string|null $audiometri
 * @property string|null $kesimpulan
 * @property string|null $tanggal_created
 */
class PemeriksaanKesehatanTht extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.pemeriksaan_kesehatan_tht';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekam_medik'], 'required'],
            [['tanggal_created'], 'safe'],
            [['no_rekam_medik'], 'string', 'max' => 120],
            [['tl_daun_telinga_kanan', 'tl_daun_telinga_kiri', 'tl_liang_telinga_kanan', 'tl_liang_telinga_kiri', 'tl_serumen_telinga_kanan', 'tl_serumen_telinga_kiri', 'tl_membrana_timpani_telinga_kanan', 'tl_membrana_timpani_telinga_kiri', 'tl_test_berbisik_telinga_kanan', 'tl_test_berbisik_telinga_kiri', 'tl_test_garpu_tata_rinne_telinga_kanan', 'tl_test_garpu_tata_rinne_telinga_kiri', 'tl_weber_telinga_kanan', 'tl_weber_telinga_kiri', 'tl_swabach_telinga_kanan', 'tl_swabach_telinga_kiri', 'tl_bing_telinga_kanan', 'tl_bing_telinga_kiri', 'tl_lain_lain', 'hd_meatus_nasi', 'hd_septum_nasi', 'hd_konka_nasal', 'hd_nyeri_ketok_sinus_maksilar', 'hd_penoluman', 'hd_lain_lain', 'tg_pharynx', 'tg_tonsil_kanan', 'tg_tonsil_kiri', 'tg_ukuran', 'tg_palatum', 'tg_lain_lain'], 'string', 'max' => 20],
            [['audiometri'], 'string', 'max' => 100],
            [['kesimpulan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemeriksaan_tht' => 'Id Pemeriksaan Tht',
            'no_rekam_medik' => 'No Rekam Medik',
            'tl_daun_telinga_kanan' => 'Tl Daun Telinga Kanan',
            'tl_daun_telinga_kiri' => 'Tl Daun Telinga Kiri',
            'tl_liang_telinga_kanan' => 'Tl Liang Telinga Kanan',
            'tl_liang_telinga_kiri' => 'Tl Liang Telinga Kiri',
            'tl_serumen_telinga_kanan' => 'Tl Serumen Telinga Kanan',
            'tl_serumen_telinga_kiri' => 'Tl Serumen Telinga Kiri',
            'tl_membrana_timpani_telinga_kanan' => 'Tl Membrana Timpani Telinga Kanan',
            'tl_membrana_timpani_telinga_kiri' => 'Tl Membrana Timpani Telinga Kiri',
            'tl_test_berbisik_telinga_kanan' => 'Tl Test Berbisik Telinga Kanan',
            'tl_test_berbisik_telinga_kiri' => 'Tl Test Berbisik Telinga Kiri',
            'tl_test_garpu_tata_rinne_telinga_kanan' => 'Tl Test Garpu Tata Rinne Telinga Kanan',
            'tl_test_garpu_tata_rinne_telinga_kiri' => 'Tl Test Garpu Tata Rinne Telinga Kiri',
            'tl_weber_telinga_kanan' => 'Tl Weber Telinga Kanan',
            'tl_weber_telinga_kiri' => 'Tl Weber Telinga Kiri',
            'tl_swabach_telinga_kanan' => 'Tl Swabach Telinga Kanan',
            'tl_swabach_telinga_kiri' => 'Tl Swabach Telinga Kiri',
            'tl_bing_telinga_kanan' => 'Tl Bing Telinga Kanan',
            'tl_bing_telinga_kiri' => 'Tl Bing Telinga Kiri',
            'tl_lain_lain' => 'Tl Lain Lain',
            'hd_meatus_nasi' => 'Hd Meatus Nasi',
            'hd_septum_nasi' => 'Hd Septum Nasi',
            'hd_konka_nasal' => 'Hd Konka Nasal',
            'hd_nyeri_ketok_sinus_maksilar' => 'Hd Nyeri Ketok Sinus Maksilar',
            'hd_penoluman' => 'Hd Penoluman',
            'hd_lain_lain' => 'Hd Lain Lain',
            'tg_pharynx' => 'Tg Pharynx',
            'tg_tonsil_kanan' => 'Tg Tonsil Kanan',
            'tg_tonsil_kiri' => 'Tg Tonsil Kiri',
            'tg_ukuran' => 'Tg Ukuran',
            'tg_palatum' => 'Tg Palatum',
            'tg_lain_lain' => 'Tg Lain Lain',
            'audiometri' => 'Audiometri',
            'kesimpulan' => 'Kesimpulan',
            'tanggal_created' => 'Tanggal Created',
        ];
    }
}
