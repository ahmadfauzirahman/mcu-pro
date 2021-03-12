<?php

namespace app\models\anamnesa;

use Yii;

/**
 * This is the model class for table "mcu.t_anamnesis".
 *
 * @property string $id_anamnesis
 * @property string|null $pertanyaan_jawaban
 * @property string|null $nomor_rekam_medik
 */
class TAnamnesis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.t_anamnesis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anamnesis'], 'required'],
            [['pertanyaan_jawaban'], 'string'],
            [['id_anamnesis'], 'string', 'max' => 100],
            [['nomor_rekam_medik'], 'string', 'max' => 50],
            [['id_anamnesis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anamnesis' => 'Id Anamnesis',
            'pertanyaan_jawaban' => 'Pertanyaan Jawaban',
            'nomor_rekam_medik' => 'Nomor Rekam Medik',
        ];
    }
}
