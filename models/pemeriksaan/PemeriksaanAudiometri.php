<?php

namespace app\models\pemeriksaan;

use Yii;

/**
 * This is the model class for table "mcu.pemeriksaan_audiometri".
 *
 * @property int $id_pemeriksaan_audiometri
 * @property string $no_rekam_medik
 * @property string|null $ac_125_kanan
 * @property string|null $ac_250_kanan
 * @property string|null $ac_500_kanan
 * @property string|null $ac_1000_kanan
 * @property string|null $ac_2000_kanan
 * @property string|null $ac_3000_kanan
 * @property string|null $ac_4000_kanan
 * @property string|null $ac_5000_kanan
 * @property string|null $ac_6000_kanan
 * @property string|null $ac_7000_kanan
 * @property string|null $ac_8000_kanan
 * @property string|null $bc_125_kanan
 * @property string|null $bc_250_kanan
 * @property string|null $bc_500_kanan
 * @property string|null $bc_1000_kanan
 * @property string|null $bc_2000_kanan
 * @property string|null $bc_3000_kanan
 * @property string|null $bc_4000_kanan
 * @property string|null $bc_5000_kanan
 * @property string|null $bc_6000_kanan
 * @property string|null $bc_7000_kanan
 * @property string|null $bc_8000_kanan
 * @property string|null $kesimpulan_kanan
 * @property string|null $ac_125_kiri
 * @property string|null $ac_250_kiri
 * @property string|null $ac_500_kiri
 * @property string|null $ac_1000_kiri
 * @property string|null $ac_2000_kiri
 * @property string|null $ac_3000_kiri
 * @property string|null $ac_4000_kiri
 * @property string|null $ac_5000_kiri
 * @property string|null $ac_6000_kiri
 * @property string|null $ac_7000_kiri
 * @property string|null $ac_8000_kiri
 * @property string|null $bc_125_kiri
 * @property string|null $bc_250_kiri
 * @property string|null $bc_500_kiri
 * @property string|null $bc_1000_kiri
 * @property string|null $bc_2000_kiri
 * @property string|null $bc_3000_kiri
 * @property string|null $bc_4000_kiri
 * @property string|null $bc_5000_kiri
 * @property string|null $bc_6000_kiri
 * @property string|null $bc_7000_kiri
 * @property string|null $bc_8000_kiri
 * @property string|null $kesimpulan_kiri
 * @property string|null $gambar
 * @property string|null $tanggal_created
 */
class PemeriksaanAudiometri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.pemeriksaan_audiometri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekam_medik'], 'required'],
            [['gambar'], 'string'],
            [['tanggal_created'], 'safe'],
            [['no_rekam_medik'], 'string', 'max' => 120],
            [['ac_125_kanan', 'ac_250_kanan', 'ac_500_kanan', 'ac_1000_kanan', 'ac_2000_kanan', 'ac_3000_kanan', 'ac_4000_kanan', 'ac_5000_kanan', 'ac_6000_kanan', 'ac_7000_kanan', 'ac_8000_kanan', 'bc_125_kanan', 'bc_250_kanan', 'bc_500_kanan', 'bc_1000_kanan', 'bc_2000_kanan', 'bc_3000_kanan', 'bc_4000_kanan', 'bc_5000_kanan', 'bc_6000_kanan', 'bc_7000_kanan', 'bc_8000_kanan', 'ac_125_kiri', 'ac_250_kiri', 'ac_500_kiri', 'ac_1000_kiri', 'ac_2000_kiri', 'ac_3000_kiri', 'ac_4000_kiri', 'ac_5000_kiri', 'ac_6000_kiri', 'ac_7000_kiri', 'ac_8000_kiri', 'bc_125_kiri', 'bc_250_kiri', 'bc_500_kiri', 'bc_1000_kiri', 'bc_2000_kiri', 'bc_3000_kiri', 'bc_4000_kiri', 'bc_5000_kiri', 'bc_6000_kiri', 'bc_7000_kiri', 'bc_8000_kiri'], 'string', 'max' => 10],
            [['kesimpulan_kanan', 'kesimpulan_kiri'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemeriksaan_audiometri' => 'Id Pemeriksaan Audiometri',
            'no_rekam_medik' => 'No Rekam Medik',
            'ac_125_kanan' => 'Ac 125 Kanan',
            'ac_250_kanan' => 'Ac 250 Kanan',
            'ac_500_kanan' => 'Ac 500 Kanan',
            'ac_1000_kanan' => 'Ac 1000 Kanan',
            'ac_2000_kanan' => 'Ac 2000 Kanan',
            'ac_3000_kanan' => 'Ac 3000 Kanan',
            'ac_4000_kanan' => 'Ac 4000 Kanan',
            'ac_5000_kanan' => 'Ac 5000 Kanan',
            'ac_6000_kanan' => 'Ac 6000 Kanan',
            'ac_7000_kanan' => 'Ac 7000 Kanan',
            'ac_8000_kanan' => 'Ac 8000 Kanan',
            'bc_125_kanan' => 'Bc 125 Kanan',
            'bc_250_kanan' => 'Bc 250 Kanan',
            'bc_500_kanan' => 'Bc 500 Kanan',
            'bc_1000_kanan' => 'Bc 1000 Kanan',
            'bc_2000_kanan' => 'Bc 2000 Kanan',
            'bc_3000_kanan' => 'Bc 3000 Kanan',
            'bc_4000_kanan' => 'Bc 4000 Kanan',
            'bc_5000_kanan' => 'Bc 5000 Kanan',
            'bc_6000_kanan' => 'Bc 6000 Kanan',
            'bc_7000_kanan' => 'Bc 7000 Kanan',
            'bc_8000_kanan' => 'Bc 8000 Kanan',
            'kesimpulan_kanan' => 'Kesimpulan Kanan',
            'ac_125_kiri' => 'Ac 125 Kiri',
            'ac_250_kiri' => 'Ac 250 Kiri',
            'ac_500_kiri' => 'Ac 500 Kiri',
            'ac_1000_kiri' => 'Ac 1000 Kiri',
            'ac_2000_kiri' => 'Ac 2000 Kiri',
            'ac_3000_kiri' => 'Ac 3000 Kiri',
            'ac_4000_kiri' => 'Ac 4000 Kiri',
            'ac_5000_kiri' => 'Ac 5000 Kiri',
            'ac_6000_kiri' => 'Ac 6000 Kiri',
            'ac_7000_kiri' => 'Ac 7000 Kiri',
            'ac_8000_kiri' => 'Ac 8000 Kiri',
            'bc_125_kiri' => 'Bc 125 Kiri',
            'bc_250_kiri' => 'Bc 250 Kiri',
            'bc_500_kiri' => 'Bc 500 Kiri',
            'bc_1000_kiri' => 'Bc 1000 Kiri',
            'bc_2000_kiri' => 'Bc 2000 Kiri',
            'bc_3000_kiri' => 'Bc 3000 Kiri',
            'bc_4000_kiri' => 'Bc 4000 Kiri',
            'bc_5000_kiri' => 'Bc 5000 Kiri',
            'bc_6000_kiri' => 'Bc 6000 Kiri',
            'bc_7000_kiri' => 'Bc 7000 Kiri',
            'bc_8000_kiri' => 'Bc 8000 Kiri',
            'kesimpulan_kiri' => 'Kesimpulan Kiri',
            'gambar' => 'Gambar',
            'tanggal_created' => 'Tanggal Created',
        ];
    }
}
