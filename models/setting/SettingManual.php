<?php

namespace app\models\setting;

use Yii;

/**
 * This is the model class for table "mcu.setting_manual".
 *
 * @property string $id_manual
 * @property string $no_pasien
 * @property string $no_registrasi
 * @property int $id_item_setting
 * @property string|null $kondisi
 * @property string|null $nilai_manual
 * @property string $status
 */
class SettingManual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.setting_manual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_manual', 'no_pasien', 'no_registrasi', 'id_item_setting', 'status'], 'required'],
            [['id_item_setting'], 'default', 'value' => null],
            [['id_item_setting'], 'integer'],
            [['id_manual'], 'string', 'max' => 12],
            [['no_pasien', 'no_registrasi', 'kondisi', 'nilai_manual'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 2],
            [['id_manual'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_manual' => 'Id Manual',
            'no_pasien' => 'No Pasien',
            'no_registrasi' => 'No Registrasi',
            'id_item_setting' => 'Id Item Setting',
            'kondisi' => 'Kondisi',
            'nilai_manual' => 'Nilai Manual',
            'status' => 'Status',
        ];
    }
}
