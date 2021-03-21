<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.uraian_tugas_pekerjaan".
 *
 * @property int $id_uraian_tugas
 * @property string|null $status
 * @property string|null $uraian_tugas
 * @property string|null $target_kerja
 * @property string|null $cara_kerja
 * @property string|null $alat_kerja
 * @property string|null $no_rekam_medik
 * @property string|null $tanggal_created
 */
class UraianTugasPekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.uraian_tugas_pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uraian_tugas', 'target_kerja'], 'string'],
            [['tanggal_created'], 'safe'],
            [['status'], 'string', 'max' => 15],
            [['cara_kerja', 'alat_kerja', 'no_rekam_medik'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_uraian_tugas' => 'Id Uraian Tugas',
            'status' => 'Status',
            'uraian_tugas' => 'Uraian Tugas',
            'target_kerja' => 'Target Kerja',
            'cara_kerja' => 'Cara Kerja',
            'alat_kerja' => 'Alat Kerja',
            'no_rekam_medik' => 'No Rekam Medik',
            'tanggal_created' => 'Tanggal Created',
        ];
    }
}
