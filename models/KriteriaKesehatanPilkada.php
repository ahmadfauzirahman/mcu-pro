<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.kriteria_kesehatan_pilkada".
 *
 * @property int $id_kriteria
 * @property string $no_rekam_medik
 * @property string|null $a_hasil_pemeriksaan
 * @property string|null $a_dapat_dikoreksi
 * @property string|null $a_kemampuan
 * @property string|null $a1_hasil_pemeriksaan
 * @property string|null $a1_dapat_dikoreksi
 * @property string|null $a1_kemampuan
 * @property string|null $a1a_hasil_pemeriksaan
 * @property string|null $a1a_dapat_dikoreksi
 * @property string|null $a1a_kemampuan
 * @property string|null $a1a1_hasil_pemeriksaan
 * @property string|null $a1a1_dapat_dikoreksi
 * @property string|null $a1a1_kemampuan
 * @property string|null $a1a2_hasil_pemeriksaan
 * @property string|null $a1a2_dapat_dikoreksi
 * @property string|null $a1a2_kemampuan
 * @property string|null $a1a3_hasil_pemeriksaan
 * @property string|null $a1a3_dapat_dikoreksi
 * @property string|null $a1a3_kemampuan
 * @property string|null $a1a4_hasil_pemeriksaan
 * @property string|null $a1a4_dapat_dikoreksi
 * @property string|null $a1a4_kemampuan
 * @property string|null $a1a5_hasil_pemeriksaan
 * @property string|null $a1a5_dapat_dikoreksi
 * @property string|null $a1a5_kemampuan
 * @property string|null $a1b_hasil_pemeriksaan
 * @property string|null $a1b_dapat_dikoreksi
 * @property string|null $a1b_kemampuan
 * @property string|null $a1b1_hasil_pemeriksaan
 * @property string|null $a1b1_dapat_dikoreksi
 * @property string|null $a1b1_kemampuan
 * @property string|null $a1b2_hasil_pemeriksaan
 * @property string|null $a1b2_dapat_dikoreksi
 * @property string|null $a1b2_kemampuan
 * @property string|null $a1b3_hasil_pemeriksaan
 * @property string|null $a1b3_dapat_dikoreksi
 * @property string|null $a1b3_kemampuan
 * @property string|null $a1b4_hasil_pemeriksaan
 * @property string|null $a1b4_dapat_dikoreksi
 * @property string|null $a1b4_kemampuan
 * @property string|null $a1b5_hasil_pemeriksaan
 * @property string|null $a1b5_dapat_dikoreksi
 * @property string|null $a1b5_kemampuan
 * @property string|null $a1b6_hasil_pemeriksaan
 * @property string|null $a1b6_dapat_dikoreksi
 * @property string|null $a1b6_kemampuan
 * @property string|null $a2_hasil_pemeriksaan
 * @property string|null $a2_dapat_dikoreksi
 * @property string|null $a2_kemampuan
 * @property string|null $a2a_hasil_pemeriksaan
 * @property string|null $a2a_dapat_dikoreksi
 * @property string|null $a2a_kemampuan
 * @property string|null $a2a1_hasil_pemeriksaan
 * @property string|null $a2a1_dapat_dikoreksi
 * @property string|null $a2a1_kemampuan
 * @property string|null $a2a2_hasil_pemeriksaan
 * @property string|null $a2a2_dapat_dikoreksi
 * @property string|null $a2a2_kemampuan
 * @property string|null $a2a3_hasil_pemeriksaan
 * @property string|null $a2a3_dapat_dikoreksi
 * @property string|null $a2a3_kemampuan
 * @property string|null $a2a3a_hasil_pemeriksaan
 * @property string|null $a2a3a_dapat_dikoreksi
 * @property string|null $a2a3a_kemampuan
 * @property string|null $a2a3b_hasil_pemeriksaan
 * @property string|null $a2a3b_dapat_dikoreksi
 * @property string|null $a2a3b_kemampuan
 * @property string|null $a2a3c_hasil_pemeriksaan
 * @property string|null $a2a3c_dapat_dikoreksi
 * @property string|null $a2a3c_kemampuan
 * @property string|null $a2a3d_hasil_pemeriksaan
 * @property string|null $a2a3d_dapat_dikoreksi
 * @property string|null $a2a3d_kemampuan
 * @property string|null $a2a3e_hasil_pemeriksaan
 * @property string|null $a2a3e_dapat_dikoreksi
 * @property string|null $a2a3e_kemampuan
 * @property string|null $a2a4_hasil_pemeriksaan
 * @property string|null $a2a4_dapat_dikoreksi
 * @property string|null $a2a4_kemampuan
 * @property string|null $a2b_hasil_pemeriksaan
 * @property string|null $a2b_dapat_dikoreksi
 * @property string|null $a2b_kemampuan
 * @property string|null $a2b1_hasil_pemeriksaan
 * @property string|null $a2b1_dapat_dikoreksi
 * @property string|null $a2b1_kemampuan
 * @property string|null $a2b2_hasil_pemeriksaan
 * @property string|null $a2b2_dapat_dikoreksi
 * @property string|null $a2b2_kemampuan
 * @property string|null $a2b3_hasil_pemeriksaan
 * @property string|null $a2b3_dapat_dikoreksi
 * @property string|null $a2b3_kemampuan
 * @property string|null $a2c_hasil_pemeriksaan
 * @property string|null $a2c_dapat_dikoreksi
 * @property string|null $a2c_kemampuan
 * @property string|null $a2c1_hasil_pemeriksaan
 * @property string|null $a2c1_dapat_dikoreksi
 * @property string|null $a2c1_kemampuan
 * @property string|null $a2c2_hasil_pemeriksaan
 * @property string|null $a2c2_dapat_dikoreksi
 * @property string|null $a2c2_kemampuan
 * @property string|null $a2c3_hasil_pemeriksaan
 * @property string|null $a2c3_dapat_dikoreksi
 * @property string|null $a2c3_kemampuan
 * @property string|null $a2d_hasil_pemeriksaan
 * @property string|null $a2d_dapat_dikoreksi
 * @property string|null $a2d_kemampuan
 * @property string|null $a2d1_hasil_pemeriksaan
 * @property string|null $a2d1_dapat_dikoreksi
 * @property string|null $a2d1_kemampuan
 * @property string|null $a2d2_hasil_pemeriksaan
 * @property string|null $a2d2_dapat_dikoreksi
 * @property string|null $a2d2_kemampuan
 * @property string|null $a2d3_hasil_pemeriksaan
 * @property string|null $a2d3_dapat_dikoreksi
 * @property string|null $a2d3_kemampuan
 * @property string|null $a2d4_hasil_pemeriksaan
 * @property string|null $a2d4_dapat_dikoreksi
 * @property string|null $a2d4_kemampuan
 * @property string|null $a2e_hasil_pemeriksaan
 * @property string|null $a2e_dapat_dikoreksi
 * @property string|null $a2e_kemampuan
 * @property string|null $a2e1_hasil_pemeriksaan
 * @property string|null $a2e1_dapat_dikoreksi
 * @property string|null $a2e1_kemampuan
 * @property string|null $a2e2_hasil_pemeriksaan
 * @property string|null $a2e2_dapat_dikoreksi
 * @property string|null $a2e2_kemampuan
 * @property string|null $a2f_hasil_pemeriksaan
 * @property string|null $a2f_dapat_dikoreksi
 * @property string|null $a2f_kemampuan
 * @property string|null $a2f1_hasil_pemeriksaan
 * @property string|null $a2f1_dapat_dikoreksi
 * @property string|null $a2f1_kemampuan
 * @property string|null $a2g_hasil_pemeriksaan
 * @property string|null $a2g_dapat_dikoreksi
 * @property string|null $a2g_kemampuan
 * @property string|null $a2g1_hasil_pemeriksaan
 * @property string|null $a2g1_dapat_dikoreksi
 * @property string|null $a2g1_kemampuan
 * @property string|null $a2h_hasil_pemeriksaan
 * @property string|null $a2h_dapat_dikoreksi
 * @property string|null $a2h_kemampuan
 * @property string|null $a2h1_hasil_pemeriksaan
 * @property string|null $a2h1_dapat_dikoreksi
 * @property string|null $a2h1_kemampuan
 * @property string|null $a2i_hasil_pemeriksaan
 * @property string|null $a2i_dapat_dikoreksi
 * @property string|null $a2i_kemampuan
 * @property string|null $a2i1_hasil_pemeriksaan
 * @property string|null $a2i1_dapat_dikoreksi
 * @property string|null $a2i1_kemampuan
 * @property string|null $a2j_hasil_pemeriksaan
 * @property string|null $a2j_dapat_dikoreksi
 * @property string|null $a2j_kemampuan
 * @property string|null $a2j1_hasil_pemeriksaan
 * @property string|null $a2j1_dapat_dikoreksi
 * @property string|null $a2j1_kemampuan
 * @property string|null $a2j2_hasil_pemeriksaan
 * @property string|null $a2j2_dapat_dikoreksi
 * @property string|null $a2j2_kemampuan
 * @property string|null $a2j3_hasil_pemeriksaan
 * @property string|null $a2j3_dapat_dikoreksi
 * @property string|null $a2j3_kemampuan
 * @property string|null $a2j4_hasil_pemeriksaan
 * @property string|null $a2j4_dapat_dikoreksi
 * @property string|null $a2j4_kemampuan
 * @property string|null $a2j5_hasil_pemeriksaan
 * @property string|null $a2j5_dapat_dikoreksi
 * @property string|null $a2j5_kemampuan
 * @property string|null $a2j6_hasil_pemeriksaan
 * @property string|null $a2j6_dapat_dikoreksi
 * @property string|null $a2j6_kemampuan
 * @property string|null $b_hasil_pemeriksaan
 * @property string|null $b_dapat_dikoreksi
 * @property string|null $b_kemampuan
 * @property string|null $b1_hasil_pemeriksaan
 * @property string|null $b1_dapat_dikoreksi
 * @property string|null $b1_kemampuan
 * @property string|null $b2_hasil_pemeriksaan
 * @property string|null $b2_dapat_dikoreksi
 * @property string|null $b2_kemampuan
 * @property string|null $b2a_hasil_pemeriksaan
 * @property string|null $b2a_dapat_dikoreksi
 * @property string|null $b2a_kemampuan
 * @property string|null $b2b_hasil_pemeriksaan
 * @property string|null $b2b_dapat_dikoreksi
 * @property string|null $b2b_kemampuan
 * @property string|null $b2c_hasil_pemeriksaan
 * @property string|null $b2c_dapat_dikoreksi
 * @property string|null $b2c_kemampuan
 * @property string|null $b3_hasil_pemeriksaan
 * @property string|null $b3_dapat_dikoreksi
 * @property string|null $b3_kemampuan
 * @property string|null $b3a_hasil_pemeriksaan
 * @property string|null $b3a_dapat_dikoreksi
 * @property string|null $b3a_kemampuan
 * @property string|null $b3b_hasil_pemeriksaan
 * @property string|null $b3b_dapat_dikoreksi
 * @property string|null $b3b_kemampuan
 * @property string|null $b3c_hasil_pemeriksaan
 * @property string|null $b3c_dapat_dikoreksi
 * @property string|null $b3c_kemampuan
 * @property string|null $b4_hasil_pemeriksaan
 * @property string|null $b4_dapat_dikoreksi
 * @property string|null $b4_kemampuan
 * @property string|null $b4a_hasil_pemeriksaan
 * @property string|null $b4a_dapat_dikoreksi
 * @property string|null $b4a_kemampuan
 * @property string|null $b4b_hasil_pemeriksaan
 * @property string|null $b4b_dapat_dikoreksi
 * @property string|null $b4b_kemampuan
 * @property string|null $b5_hasil_pemeriksaan
 * @property string|null $b5_dapat_dikoreksi
 * @property string|null $b5_kemampuan
 * @property string|null $b5a_hasil_pemeriksaan
 * @property string|null $b5a_dapat_dikoreksi
 * @property string|null $b5a_kemampuan
 * @property string|null $b5b_hasil_pemeriksaan
 * @property string|null $b5b_dapat_dikoreksi
 * @property string|null $b5b_kemampuan
 * @property string|null $b5c_hasil_pemeriksaan
 * @property string|null $b5c_dapat_dikoreksi
 * @property string|null $b5c_kemampuan
 * @property string|null $tanggal_created
 */
class KriteriaKesehatanPilkada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.kriteria_kesehatan_pilkada';
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
            [['a_hasil_pemeriksaan', 'a_dapat_dikoreksi', 'a_kemampuan', 'a1_hasil_pemeriksaan', 'a1_dapat_dikoreksi', 'a1_kemampuan', 'a1a_hasil_pemeriksaan', 'a1a_dapat_dikoreksi', 'a1a_kemampuan', 'a1a1_hasil_pemeriksaan', 'a1a1_dapat_dikoreksi', 'a1a1_kemampuan', 'a1a2_hasil_pemeriksaan', 'a1a2_dapat_dikoreksi', 'a1a2_kemampuan', 'a1a3_hasil_pemeriksaan', 'a1a3_dapat_dikoreksi', 'a1a3_kemampuan', 'a1a4_hasil_pemeriksaan', 'a1a4_dapat_dikoreksi', 'a1a4_kemampuan', 'a1a5_hasil_pemeriksaan', 'a1a5_dapat_dikoreksi', 'a1a5_kemampuan', 'a1b_hasil_pemeriksaan', 'a1b_dapat_dikoreksi', 'a1b_kemampuan', 'a1b1_hasil_pemeriksaan', 'a1b1_dapat_dikoreksi', 'a1b1_kemampuan', 'a1b2_hasil_pemeriksaan', 'a1b2_dapat_dikoreksi', 'a1b2_kemampuan', 'a1b3_hasil_pemeriksaan', 'a1b3_dapat_dikoreksi', 'a1b3_kemampuan', 'a1b4_hasil_pemeriksaan', 'a1b4_dapat_dikoreksi', 'a1b4_kemampuan', 'a1b5_hasil_pemeriksaan', 'a1b5_dapat_dikoreksi', 'a1b5_kemampuan', 'a1b6_hasil_pemeriksaan', 'a1b6_dapat_dikoreksi', 'a1b6_kemampuan', 'a2_hasil_pemeriksaan', 'a2_dapat_dikoreksi', 'a2_kemampuan', 'a2a_hasil_pemeriksaan', 'a2a_dapat_dikoreksi', 'a2a_kemampuan', 'a2a1_hasil_pemeriksaan', 'a2a1_dapat_dikoreksi', 'a2a1_kemampuan', 'a2a2_hasil_pemeriksaan', 'a2a2_dapat_dikoreksi', 'a2a2_kemampuan', 'a2a3_hasil_pemeriksaan', 'a2a3_dapat_dikoreksi', 'a2a3_kemampuan', 'a2a3a_hasil_pemeriksaan', 'a2a3a_dapat_dikoreksi', 'a2a3a_kemampuan', 'a2a3b_hasil_pemeriksaan', 'a2a3b_dapat_dikoreksi', 'a2a3b_kemampuan', 'a2a3c_hasil_pemeriksaan', 'a2a3c_dapat_dikoreksi', 'a2a3c_kemampuan', 'a2a3d_hasil_pemeriksaan', 'a2a3d_dapat_dikoreksi', 'a2a3d_kemampuan', 'a2a3e_hasil_pemeriksaan', 'a2a3e_dapat_dikoreksi', 'a2a3e_kemampuan', 'a2a4_hasil_pemeriksaan', 'a2a4_dapat_dikoreksi', 'a2a4_kemampuan', 'a2b_hasil_pemeriksaan', 'a2b_dapat_dikoreksi', 'a2b_kemampuan', 'a2b1_hasil_pemeriksaan', 'a2b1_dapat_dikoreksi', 'a2b1_kemampuan', 'a2b2_hasil_pemeriksaan', 'a2b2_dapat_dikoreksi', 'a2b2_kemampuan', 'a2b3_hasil_pemeriksaan', 'a2b3_dapat_dikoreksi', 'a2b3_kemampuan', 'a2c_hasil_pemeriksaan', 'a2c_dapat_dikoreksi', 'a2c_kemampuan', 'a2c1_hasil_pemeriksaan', 'a2c1_dapat_dikoreksi', 'a2c1_kemampuan', 'a2c2_hasil_pemeriksaan', 'a2c2_dapat_dikoreksi', 'a2c2_kemampuan', 'a2c3_hasil_pemeriksaan', 'a2c3_dapat_dikoreksi', 'a2c3_kemampuan', 'a2d_hasil_pemeriksaan', 'a2d_dapat_dikoreksi', 'a2d_kemampuan', 'a2d1_hasil_pemeriksaan', 'a2d1_dapat_dikoreksi', 'a2d1_kemampuan', 'a2d2_hasil_pemeriksaan', 'a2d2_dapat_dikoreksi', 'a2d2_kemampuan', 'a2d3_hasil_pemeriksaan', 'a2d3_dapat_dikoreksi', 'a2d3_kemampuan', 'a2d4_hasil_pemeriksaan', 'a2d4_dapat_dikoreksi', 'a2d4_kemampuan', 'a2e_hasil_pemeriksaan', 'a2e_dapat_dikoreksi', 'a2e_kemampuan', 'a2e1_hasil_pemeriksaan', 'a2e1_dapat_dikoreksi', 'a2e1_kemampuan', 'a2e2_hasil_pemeriksaan', 'a2e2_dapat_dikoreksi', 'a2e2_kemampuan', 'a2f_hasil_pemeriksaan', 'a2f_dapat_dikoreksi', 'a2f_kemampuan', 'a2f1_hasil_pemeriksaan', 'a2f1_dapat_dikoreksi', 'a2f1_kemampuan', 'a2g_hasil_pemeriksaan', 'a2g_dapat_dikoreksi', 'a2g_kemampuan', 'a2g1_hasil_pemeriksaan', 'a2g1_dapat_dikoreksi', 'a2g1_kemampuan', 'a2h_hasil_pemeriksaan', 'a2h_dapat_dikoreksi', 'a2h_kemampuan', 'a2h1_hasil_pemeriksaan', 'a2h1_dapat_dikoreksi', 'a2h1_kemampuan', 'a2i_hasil_pemeriksaan', 'a2i_dapat_dikoreksi', 'a2i_kemampuan', 'a2i1_hasil_pemeriksaan', 'a2i1_dapat_dikoreksi', 'a2i1_kemampuan', 'a2j_hasil_pemeriksaan', 'a2j_dapat_dikoreksi', 'a2j_kemampuan', 'a2j1_hasil_pemeriksaan', 'a2j1_dapat_dikoreksi', 'a2j1_kemampuan', 'a2j2_hasil_pemeriksaan', 'a2j2_dapat_dikoreksi', 'a2j2_kemampuan', 'a2j3_hasil_pemeriksaan', 'a2j3_dapat_dikoreksi', 'a2j3_kemampuan', 'a2j4_hasil_pemeriksaan', 'a2j4_dapat_dikoreksi', 'a2j4_kemampuan', 'a2j5_hasil_pemeriksaan', 'a2j5_dapat_dikoreksi', 'a2j5_kemampuan', 'a2j6_hasil_pemeriksaan', 'a2j6_dapat_dikoreksi', 'a2j6_kemampuan', 'b_hasil_pemeriksaan', 'b_dapat_dikoreksi', 'b_kemampuan', 'b1_hasil_pemeriksaan', 'b1_dapat_dikoreksi', 'b1_kemampuan', 'b2_hasil_pemeriksaan', 'b2_dapat_dikoreksi', 'b2_kemampuan', 'b2a_hasil_pemeriksaan', 'b2a_dapat_dikoreksi', 'b2a_kemampuan', 'b2b_hasil_pemeriksaan', 'b2b_dapat_dikoreksi', 'b2b_kemampuan', 'b2c_hasil_pemeriksaan', 'b2c_dapat_dikoreksi', 'b2c_kemampuan', 'b3_hasil_pemeriksaan', 'b3_dapat_dikoreksi', 'b3_kemampuan', 'b3a_hasil_pemeriksaan', 'b3a_dapat_dikoreksi', 'b3a_kemampuan', 'b3b_hasil_pemeriksaan', 'b3b_dapat_dikoreksi', 'b3b_kemampuan', 'b3c_hasil_pemeriksaan', 'b3c_dapat_dikoreksi', 'b3c_kemampuan', 'b4_hasil_pemeriksaan', 'b4_dapat_dikoreksi', 'b4_kemampuan', 'b4a_hasil_pemeriksaan', 'b4a_dapat_dikoreksi', 'b4a_kemampuan', 'b4b_hasil_pemeriksaan', 'b4b_dapat_dikoreksi', 'b4b_kemampuan', 'b5_hasil_pemeriksaan', 'b5_dapat_dikoreksi', 'b5_kemampuan', 'b5a_hasil_pemeriksaan', 'b5a_dapat_dikoreksi', 'b5a_kemampuan', 'b5b_hasil_pemeriksaan', 'b5b_dapat_dikoreksi', 'b5b_kemampuan', 'b5c_hasil_pemeriksaan', 'b5c_dapat_dikoreksi', 'b5c_kemampuan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kriteria' => 'Id Kriteria',
            'no_rekam_medik' => 'No Rekam Medik',
            'a_hasil_pemeriksaan' => 'A Hasil Pemeriksaan',
            'a_dapat_dikoreksi' => 'A Dapat Dikoreksi',
            'a_kemampuan' => 'A Kemampuan',
            'a1_hasil_pemeriksaan' => 'A1 Hasil Pemeriksaan',
            'a1_dapat_dikoreksi' => 'A1 Dapat Dikoreksi',
            'a1_kemampuan' => 'A1 Kemampuan',
            'a1a_hasil_pemeriksaan' => 'A1a Hasil Pemeriksaan',
            'a1a_dapat_dikoreksi' => 'A1a Dapat Dikoreksi',
            'a1a_kemampuan' => 'A1a Kemampuan',
            'a1a1_hasil_pemeriksaan' => 'A1a1 Hasil Pemeriksaan',
            'a1a1_dapat_dikoreksi' => 'A1a1 Dapat Dikoreksi',
            'a1a1_kemampuan' => 'A1a1 Kemampuan',
            'a1a2_hasil_pemeriksaan' => 'A1a2 Hasil Pemeriksaan',
            'a1a2_dapat_dikoreksi' => 'A1a2 Dapat Dikoreksi',
            'a1a2_kemampuan' => 'A1a2 Kemampuan',
            'a1a3_hasil_pemeriksaan' => 'A1a3 Hasil Pemeriksaan',
            'a1a3_dapat_dikoreksi' => 'A1a3 Dapat Dikoreksi',
            'a1a3_kemampuan' => 'A1a3 Kemampuan',
            'a1a4_hasil_pemeriksaan' => 'A1a4 Hasil Pemeriksaan',
            'a1a4_dapat_dikoreksi' => 'A1a4 Dapat Dikoreksi',
            'a1a4_kemampuan' => 'A1a4 Kemampuan',
            'a1a5_hasil_pemeriksaan' => 'A1a5 Hasil Pemeriksaan',
            'a1a5_dapat_dikoreksi' => 'A1a5 Dapat Dikoreksi',
            'a1a5_kemampuan' => 'A1a5 Kemampuan',
            'a1b_hasil_pemeriksaan' => 'A1b Hasil Pemeriksaan',
            'a1b_dapat_dikoreksi' => 'A1b Dapat Dikoreksi',
            'a1b_kemampuan' => 'A1b Kemampuan',
            'a1b1_hasil_pemeriksaan' => 'A1b1 Hasil Pemeriksaan',
            'a1b1_dapat_dikoreksi' => 'A1b1 Dapat Dikoreksi',
            'a1b1_kemampuan' => 'A1b1 Kemampuan',
            'a1b2_hasil_pemeriksaan' => 'A1b2 Hasil Pemeriksaan',
            'a1b2_dapat_dikoreksi' => 'A1b2 Dapat Dikoreksi',
            'a1b2_kemampuan' => 'A1b2 Kemampuan',
            'a1b3_hasil_pemeriksaan' => 'A1b3 Hasil Pemeriksaan',
            'a1b3_dapat_dikoreksi' => 'A1b3 Dapat Dikoreksi',
            'a1b3_kemampuan' => 'A1b3 Kemampuan',
            'a1b4_hasil_pemeriksaan' => 'A1b4 Hasil Pemeriksaan',
            'a1b4_dapat_dikoreksi' => 'A1b4 Dapat Dikoreksi',
            'a1b4_kemampuan' => 'A1b4 Kemampuan',
            'a1b5_hasil_pemeriksaan' => 'A1b5 Hasil Pemeriksaan',
            'a1b5_dapat_dikoreksi' => 'A1b5 Dapat Dikoreksi',
            'a1b5_kemampuan' => 'A1b5 Kemampuan',
            'a1b6_hasil_pemeriksaan' => 'A1b6 Hasil Pemeriksaan',
            'a1b6_dapat_dikoreksi' => 'A1b6 Dapat Dikoreksi',
            'a1b6_kemampuan' => 'A1b6 Kemampuan',
            'a2_hasil_pemeriksaan' => 'A2 Hasil Pemeriksaan',
            'a2_dapat_dikoreksi' => 'A2 Dapat Dikoreksi',
            'a2_kemampuan' => 'A2 Kemampuan',
            'a2a_hasil_pemeriksaan' => 'A2a Hasil Pemeriksaan',
            'a2a_dapat_dikoreksi' => 'A2a Dapat Dikoreksi',
            'a2a_kemampuan' => 'A2a Kemampuan',
            'a2a1_hasil_pemeriksaan' => 'A2a1 Hasil Pemeriksaan',
            'a2a1_dapat_dikoreksi' => 'A2a1 Dapat Dikoreksi',
            'a2a1_kemampuan' => 'A2a1 Kemampuan',
            'a2a2_hasil_pemeriksaan' => 'A2a2 Hasil Pemeriksaan',
            'a2a2_dapat_dikoreksi' => 'A2a2 Dapat Dikoreksi',
            'a2a2_kemampuan' => 'A2a2 Kemampuan',
            'a2a3_hasil_pemeriksaan' => 'A2a3 Hasil Pemeriksaan',
            'a2a3_dapat_dikoreksi' => 'A2a3 Dapat Dikoreksi',
            'a2a3_kemampuan' => 'A2a3 Kemampuan',
            'a2a3a_hasil_pemeriksaan' => 'A2a3a Hasil Pemeriksaan',
            'a2a3a_dapat_dikoreksi' => 'A2a3a Dapat Dikoreksi',
            'a2a3a_kemampuan' => 'A2a3a Kemampuan',
            'a2a3b_hasil_pemeriksaan' => 'A2a3b Hasil Pemeriksaan',
            'a2a3b_dapat_dikoreksi' => 'A2a3b Dapat Dikoreksi',
            'a2a3b_kemampuan' => 'A2a3b Kemampuan',
            'a2a3c_hasil_pemeriksaan' => 'A2a3c Hasil Pemeriksaan',
            'a2a3c_dapat_dikoreksi' => 'A2a3c Dapat Dikoreksi',
            'a2a3c_kemampuan' => 'A2a3c Kemampuan',
            'a2a3d_hasil_pemeriksaan' => 'A2a3d Hasil Pemeriksaan',
            'a2a3d_dapat_dikoreksi' => 'A2a3d Dapat Dikoreksi',
            'a2a3d_kemampuan' => 'A2a3d Kemampuan',
            'a2a3e_hasil_pemeriksaan' => 'A2a3e Hasil Pemeriksaan',
            'a2a3e_dapat_dikoreksi' => 'A2a3e Dapat Dikoreksi',
            'a2a3e_kemampuan' => 'A2a3e Kemampuan',
            'a2a4_hasil_pemeriksaan' => 'A2a4 Hasil Pemeriksaan',
            'a2a4_dapat_dikoreksi' => 'A2a4 Dapat Dikoreksi',
            'a2a4_kemampuan' => 'A2a4 Kemampuan',
            'a2b_hasil_pemeriksaan' => 'A2b Hasil Pemeriksaan',
            'a2b_dapat_dikoreksi' => 'A2b Dapat Dikoreksi',
            'a2b_kemampuan' => 'A2b Kemampuan',
            'a2b1_hasil_pemeriksaan' => 'A2b1 Hasil Pemeriksaan',
            'a2b1_dapat_dikoreksi' => 'A2b1 Dapat Dikoreksi',
            'a2b1_kemampuan' => 'A2b1 Kemampuan',
            'a2b2_hasil_pemeriksaan' => 'A2b2 Hasil Pemeriksaan',
            'a2b2_dapat_dikoreksi' => 'A2b2 Dapat Dikoreksi',
            'a2b2_kemampuan' => 'A2b2 Kemampuan',
            'a2b3_hasil_pemeriksaan' => 'A2b3 Hasil Pemeriksaan',
            'a2b3_dapat_dikoreksi' => 'A2b3 Dapat Dikoreksi',
            'a2b3_kemampuan' => 'A2b3 Kemampuan',
            'a2c_hasil_pemeriksaan' => 'A2c Hasil Pemeriksaan',
            'a2c_dapat_dikoreksi' => 'A2c Dapat Dikoreksi',
            'a2c_kemampuan' => 'A2c Kemampuan',
            'a2c1_hasil_pemeriksaan' => 'A2c1 Hasil Pemeriksaan',
            'a2c1_dapat_dikoreksi' => 'A2c1 Dapat Dikoreksi',
            'a2c1_kemampuan' => 'A2c1 Kemampuan',
            'a2c2_hasil_pemeriksaan' => 'A2c2 Hasil Pemeriksaan',
            'a2c2_dapat_dikoreksi' => 'A2c2 Dapat Dikoreksi',
            'a2c2_kemampuan' => 'A2c2 Kemampuan',
            'a2c3_hasil_pemeriksaan' => 'A2c3 Hasil Pemeriksaan',
            'a2c3_dapat_dikoreksi' => 'A2c3 Dapat Dikoreksi',
            'a2c3_kemampuan' => 'A2c3 Kemampuan',
            'a2d_hasil_pemeriksaan' => 'A2d Hasil Pemeriksaan',
            'a2d_dapat_dikoreksi' => 'A2d Dapat Dikoreksi',
            'a2d_kemampuan' => 'A2d Kemampuan',
            'a2d1_hasil_pemeriksaan' => 'A2d1 Hasil Pemeriksaan',
            'a2d1_dapat_dikoreksi' => 'A2d1 Dapat Dikoreksi',
            'a2d1_kemampuan' => 'A2d1 Kemampuan',
            'a2d2_hasil_pemeriksaan' => 'A2d2 Hasil Pemeriksaan',
            'a2d2_dapat_dikoreksi' => 'A2d2 Dapat Dikoreksi',
            'a2d2_kemampuan' => 'A2d2 Kemampuan',
            'a2d3_hasil_pemeriksaan' => 'A2d3 Hasil Pemeriksaan',
            'a2d3_dapat_dikoreksi' => 'A2d3 Dapat Dikoreksi',
            'a2d3_kemampuan' => 'A2d3 Kemampuan',
            'a2d4_hasil_pemeriksaan' => 'A2d4 Hasil Pemeriksaan',
            'a2d4_dapat_dikoreksi' => 'A2d4 Dapat Dikoreksi',
            'a2d4_kemampuan' => 'A2d4 Kemampuan',
            'a2e_hasil_pemeriksaan' => 'A2e Hasil Pemeriksaan',
            'a2e_dapat_dikoreksi' => 'A2e Dapat Dikoreksi',
            'a2e_kemampuan' => 'A2e Kemampuan',
            'a2e1_hasil_pemeriksaan' => 'A2e1 Hasil Pemeriksaan',
            'a2e1_dapat_dikoreksi' => 'A2e1 Dapat Dikoreksi',
            'a2e1_kemampuan' => 'A2e1 Kemampuan',
            'a2e2_hasil_pemeriksaan' => 'A2e2 Hasil Pemeriksaan',
            'a2e2_dapat_dikoreksi' => 'A2e2 Dapat Dikoreksi',
            'a2e2_kemampuan' => 'A2e2 Kemampuan',
            'a2f_hasil_pemeriksaan' => 'A2f Hasil Pemeriksaan',
            'a2f_dapat_dikoreksi' => 'A2f Dapat Dikoreksi',
            'a2f_kemampuan' => 'A2f Kemampuan',
            'a2f1_hasil_pemeriksaan' => 'A2f1 Hasil Pemeriksaan',
            'a2f1_dapat_dikoreksi' => 'A2f1 Dapat Dikoreksi',
            'a2f1_kemampuan' => 'A2f1 Kemampuan',
            'a2g_hasil_pemeriksaan' => 'A2g Hasil Pemeriksaan',
            'a2g_dapat_dikoreksi' => 'A2g Dapat Dikoreksi',
            'a2g_kemampuan' => 'A2g Kemampuan',
            'a2g1_hasil_pemeriksaan' => 'A2g1 Hasil Pemeriksaan',
            'a2g1_dapat_dikoreksi' => 'A2g1 Dapat Dikoreksi',
            'a2g1_kemampuan' => 'A2g1 Kemampuan',
            'a2h_hasil_pemeriksaan' => 'A2h Hasil Pemeriksaan',
            'a2h_dapat_dikoreksi' => 'A2h Dapat Dikoreksi',
            'a2h_kemampuan' => 'A2h Kemampuan',
            'a2h1_hasil_pemeriksaan' => 'A2h1 Hasil Pemeriksaan',
            'a2h1_dapat_dikoreksi' => 'A2h1 Dapat Dikoreksi',
            'a2h1_kemampuan' => 'A2h1 Kemampuan',
            'a2i_hasil_pemeriksaan' => 'A2i Hasil Pemeriksaan',
            'a2i_dapat_dikoreksi' => 'A2i Dapat Dikoreksi',
            'a2i_kemampuan' => 'A2i Kemampuan',
            'a2i1_hasil_pemeriksaan' => 'A2i1 Hasil Pemeriksaan',
            'a2i1_dapat_dikoreksi' => 'A2i1 Dapat Dikoreksi',
            'a2i1_kemampuan' => 'A2i1 Kemampuan',
            'a2j_hasil_pemeriksaan' => 'A2j Hasil Pemeriksaan',
            'a2j_dapat_dikoreksi' => 'A2j Dapat Dikoreksi',
            'a2j_kemampuan' => 'A2j Kemampuan',
            'a2j1_hasil_pemeriksaan' => 'A2j1 Hasil Pemeriksaan',
            'a2j1_dapat_dikoreksi' => 'A2j1 Dapat Dikoreksi',
            'a2j1_kemampuan' => 'A2j1 Kemampuan',
            'a2j2_hasil_pemeriksaan' => 'A2j2 Hasil Pemeriksaan',
            'a2j2_dapat_dikoreksi' => 'A2j2 Dapat Dikoreksi',
            'a2j2_kemampuan' => 'A2j2 Kemampuan',
            'a2j3_hasil_pemeriksaan' => 'A2j3 Hasil Pemeriksaan',
            'a2j3_dapat_dikoreksi' => 'A2j3 Dapat Dikoreksi',
            'a2j3_kemampuan' => 'A2j3 Kemampuan',
            'a2j4_hasil_pemeriksaan' => 'A2j4 Hasil Pemeriksaan',
            'a2j4_dapat_dikoreksi' => 'A2j4 Dapat Dikoreksi',
            'a2j4_kemampuan' => 'A2j4 Kemampuan',
            'a2j5_hasil_pemeriksaan' => 'A2j5 Hasil Pemeriksaan',
            'a2j5_dapat_dikoreksi' => 'A2j5 Dapat Dikoreksi',
            'a2j5_kemampuan' => 'A2j5 Kemampuan',
            'a2j6_hasil_pemeriksaan' => 'A2j6 Hasil Pemeriksaan',
            'a2j6_dapat_dikoreksi' => 'A2j6 Dapat Dikoreksi',
            'a2j6_kemampuan' => 'A2j6 Kemampuan',
            'b_hasil_pemeriksaan' => 'B Hasil Pemeriksaan',
            'b_dapat_dikoreksi' => 'B Dapat Dikoreksi',
            'b_kemampuan' => 'B Kemampuan',
            'b1_hasil_pemeriksaan' => 'B1 Hasil Pemeriksaan',
            'b1_dapat_dikoreksi' => 'B1 Dapat Dikoreksi',
            'b1_kemampuan' => 'B1 Kemampuan',
            'b2_hasil_pemeriksaan' => 'B2 Hasil Pemeriksaan',
            'b2_dapat_dikoreksi' => 'B2 Dapat Dikoreksi',
            'b2_kemampuan' => 'B2 Kemampuan',
            'b2a_hasil_pemeriksaan' => 'B2a Hasil Pemeriksaan',
            'b2a_dapat_dikoreksi' => 'B2a Dapat Dikoreksi',
            'b2a_kemampuan' => 'B2a Kemampuan',
            'b2b_hasil_pemeriksaan' => 'B2b Hasil Pemeriksaan',
            'b2b_dapat_dikoreksi' => 'B2b Dapat Dikoreksi',
            'b2b_kemampuan' => 'B2b Kemampuan',
            'b2c_hasil_pemeriksaan' => 'B2c Hasil Pemeriksaan',
            'b2c_dapat_dikoreksi' => 'B2c Dapat Dikoreksi',
            'b2c_kemampuan' => 'B2c Kemampuan',
            'b3_hasil_pemeriksaan' => 'B3 Hasil Pemeriksaan',
            'b3_dapat_dikoreksi' => 'B3 Dapat Dikoreksi',
            'b3_kemampuan' => 'B3 Kemampuan',
            'b3a_hasil_pemeriksaan' => 'B3a Hasil Pemeriksaan',
            'b3a_dapat_dikoreksi' => 'B3a Dapat Dikoreksi',
            'b3a_kemampuan' => 'B3a Kemampuan',
            'b3b_hasil_pemeriksaan' => 'B3b Hasil Pemeriksaan',
            'b3b_dapat_dikoreksi' => 'B3b Dapat Dikoreksi',
            'b3b_kemampuan' => 'B3b Kemampuan',
            'b3c_hasil_pemeriksaan' => 'B3c Hasil Pemeriksaan',
            'b3c_dapat_dikoreksi' => 'B3c Dapat Dikoreksi',
            'b3c_kemampuan' => 'B3c Kemampuan',
            'b4_hasil_pemeriksaan' => 'B4 Hasil Pemeriksaan',
            'b4_dapat_dikoreksi' => 'B4 Dapat Dikoreksi',
            'b4_kemampuan' => 'B4 Kemampuan',
            'b4a_hasil_pemeriksaan' => 'B4a Hasil Pemeriksaan',
            'b4a_dapat_dikoreksi' => 'B4a Dapat Dikoreksi',
            'b4a_kemampuan' => 'B4a Kemampuan',
            'b4b_hasil_pemeriksaan' => 'B4b Hasil Pemeriksaan',
            'b4b_dapat_dikoreksi' => 'B4b Dapat Dikoreksi',
            'b4b_kemampuan' => 'B4b Kemampuan',
            'b5_hasil_pemeriksaan' => 'B5 Hasil Pemeriksaan',
            'b5_dapat_dikoreksi' => 'B5 Dapat Dikoreksi',
            'b5_kemampuan' => 'B5 Kemampuan',
            'b5a_hasil_pemeriksaan' => 'B5a Hasil Pemeriksaan',
            'b5a_dapat_dikoreksi' => 'B5a Dapat Dikoreksi',
            'b5a_kemampuan' => 'B5a Kemampuan',
            'b5b_hasil_pemeriksaan' => 'B5b Hasil Pemeriksaan',
            'b5b_dapat_dikoreksi' => 'B5b Dapat Dikoreksi',
            'b5b_kemampuan' => 'B5b Kemampuan',
            'b5c_hasil_pemeriksaan' => 'B5c Hasil Pemeriksaan',
            'b5c_dapat_dikoreksi' => 'B5c Dapat Dikoreksi',
            'b5c_kemampuan' => 'B5c Kemampuan',
            'tanggal_created' => 'Tanggal Created',
        ];
    }
}
