<?php

namespace app\controllers;

use app\models\anamnesa\PertanyaanAnmnesis;
use app\models\DataPelayanan;
use app\models\MPemeriksaanFisik;
use app\models\PenatalaksanaanMcu;

class UnitPemeriksaanController extends \yii\web\Controller
{
    public function actionIndex($id = null)
    {

        $id_cari = $id;

        $modelPenata = new PenatalaksanaanMcu();
        // start cari pasien 
        if ($id_cari != null) {
            $pasien = DataPelayanan::find()->where(['id_data_pelayanan' => $id_cari])->one();
            if (!$pasien) {
                return $this->redirect(['/site/ngga-nemu', 'id' => $id_cari]);
            }

            $model = MPemeriksaanFisik::find()
                ->where(['no_rekam_medik' => $pasien->no_rekam_medik])
                ->andWhere(['no_daftar' => $pasien->no_registrasi])
                ->one();
            if (!$model)
                $model = new MPemeriksaanFisik();

            $modelPenata->no_rekam_medik = $pasien->no_rekam_medik;
            $model->cari_pasien = $id_cari;
            $no_rm = $pasien->no_rekam_medik;
            $no_daftar = $pasien->no_registrasi;
        } else {
            $pasien = new DataPelayanan();
            $no_rm = null;
            $no_daftar = null;
            $model = new MPemeriksaanFisik();
        }
        // end cari pasien 

        $pertanyaanAnmesis = new PertanyaanAnmnesis();

        return $this->render('index', [
            'pasien' => $pasien,
            'model' => $model,

            'pertanyaanAnmesis' => $pertanyaanAnmesis
        ]);
    }
}
