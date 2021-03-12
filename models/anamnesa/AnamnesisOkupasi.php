<?php

namespace app\models\anamnesa;

use Yii;

/**
 * This is the model class for table "mcu.anamnesis_okupasi".
 *
 * @property int $id_anamnesis
 * @property string|null $no_rekam_medik
 * @property string|null $pertanyaan
 * @property string|null $jawaban
 * @property int|null $nomor_jawaban
 */
class AnamnesisOkupasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.anamnesis_okupasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan', 'jawaban'], 'string'],
            [['nomor_jawaban'], 'default', 'value' => null],
            [['nomor_jawaban'], 'integer'],
            [['no_rekam_medik'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anamnesis' => 'Id Anamnesis',
            'no_rekam_medik' => 'No Rekam Medik',
            'pertanyaan' => 'Pertanyaan',
            'jawaban' => 'Jawaban',
            'nomor_jawaban' => 'Nomor Jawaban',
        ];
    }
}
