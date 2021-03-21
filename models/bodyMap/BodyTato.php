<?php

namespace app\models\bodyMap;

use Yii;

/**
 * This is the model class for table "mcu.body_tato".
 *
 * @property int $id_tato
 * @property string|null $no_rekam_medik
 * @property string|null $no_daftar
 * @property string|null $no_0_depan
 * @property string|null $no_1_depan
 * @property string|null $no_2_depan
 * @property string|null $no_3_depan
 * @property string|null $no_4_depan
 * @property string|null $no_5_depan
 * @property string|null $no_6_depan
 * @property string|null $no_7_depan
 * @property string|null $no_8_depan
 * @property string|null $no_9_depan
 * @property string|null $no_10_depan
 * @property string|null $no_11_depan
 * @property string|null $no_12_depan
 * @property string|null $no_13_depan
 * @property string|null $no_14_depan
 * @property string|null $no_15_depan
 * @property string|null $no_16_depan
 * @property string|null $no_17_depan
 * @property string|null $no_0_belakang
 * @property string|null $no_1_belakang
 * @property string|null $no_2_belakang
 * @property string|null $no_3_belakang
 * @property string|null $no_4_belakang
 * @property string|null $no_5_belakang
 * @property string|null $no_6_belakang
 * @property string|null $no_7_belakang
 * @property string|null $no_8_belakang
 * @property string|null $no_9_belakang
 * @property string|null $no_10_belakang
 * @property string|null $no_11_belakang
 * @property string|null $no_12_belakang
 * @property string|null $no_13_belakang
 * @property string|null $no_14_belakang
 * @property string|null $no_15_belakang
 * @property string|null $no_16_belakang
 * @property string|null $no_17_belakang
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class BodyTato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.body_tato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekam_medik', 'no_daftar', 'no_0_depan', 'no_1_depan', 'no_2_depan', 'no_3_depan', 'no_4_depan', 'no_5_depan', 'no_6_depan', 'no_7_depan', 'no_8_depan', 'no_9_depan', 'no_10_depan', 'no_11_depan', 'no_12_depan', 'no_13_depan', 'no_14_depan', 'no_15_depan', 'no_16_depan', 'no_17_depan', 'no_0_belakang', 'no_1_belakang', 'no_2_belakang', 'no_3_belakang', 'no_4_belakang', 'no_5_belakang', 'no_6_belakang', 'no_7_belakang', 'no_8_belakang', 'no_9_belakang', 'no_10_belakang', 'no_11_belakang', 'no_12_belakang', 'no_13_belakang', 'no_14_belakang', 'no_15_belakang', 'no_16_belakang', 'no_17_belakang', 'created_by', 'updated_by'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tato' => 'Id Tato',
            'no_rekam_medik' => 'No Rekam Medik',
            'no_daftar' => 'No Daftar',
            'no_0_depan' => 'No 0 Depan',
            'no_1_depan' => 'No 1 Depan',
            'no_2_depan' => 'No 2 Depan',
            'no_3_depan' => 'No 3 Depan',
            'no_4_depan' => 'No 4 Depan',
            'no_5_depan' => 'No 5 Depan',
            'no_6_depan' => 'No 6 Depan',
            'no_7_depan' => 'No 7 Depan',
            'no_8_depan' => 'No 8 Depan',
            'no_9_depan' => 'No 9 Depan',
            'no_10_depan' => 'No 10 Depan',
            'no_11_depan' => 'No 11 Depan',
            'no_12_depan' => 'No 12 Depan',
            'no_13_depan' => 'No 13 Depan',
            'no_14_depan' => 'No 14 Depan',
            'no_15_depan' => 'No 15 Depan',
            'no_16_depan' => 'No 16 Depan',
            'no_17_depan' => 'No 17 Depan',
            'no_0_belakang' => 'No 0 Belakang',
            'no_1_belakang' => 'No 1 Belakang',
            'no_2_belakang' => 'No 2 Belakang',
            'no_3_belakang' => 'No 3 Belakang',
            'no_4_belakang' => 'No 4 Belakang',
            'no_5_belakang' => 'No 5 Belakang',
            'no_6_belakang' => 'No 6 Belakang',
            'no_7_belakang' => 'No 7 Belakang',
            'no_8_belakang' => 'No 8 Belakang',
            'no_9_belakang' => 'No 9 Belakang',
            'no_10_belakang' => 'No 10 Belakang',
            'no_11_belakang' => 'No 11 Belakang',
            'no_12_belakang' => 'No 12 Belakang',
            'no_13_belakang' => 'No 13 Belakang',
            'no_14_belakang' => 'No 14 Belakang',
            'no_15_belakang' => 'No 15 Belakang',
            'no_16_belakang' => 'No 16 Belakang',
            'no_17_belakang' => 'No 17 Belakang',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
