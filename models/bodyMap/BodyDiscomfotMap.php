<?php

namespace app\models\bodyMap;

use Yii;

/**
 * This is the model class for table "mcu.body_discomfot_map".
 *
 * @property int $id_body_discomfot
 * @property string|null $keterangan_body
 * @property string|null $bagian_tubuh
 * @property string|null $tgl_created
 * @property string|null $no_rekam_medik
 */
class BodyDiscomfotMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.body_discomfot_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan_body', 'bagian_tubuh'], 'string'],
            [['tgl_created'], 'safe'],
            [['no_rekam_medik'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_body_discomfot' => 'Id Body Discomfot',
            'keterangan_body' => 'Keterangan Body',
            'bagian_tubuh' => 'Bagian Tubuh',
            'tgl_created' => 'Tgl Created',
            'no_rekam_medik' => 'No Rekam Medik',
        ];
    }
}
