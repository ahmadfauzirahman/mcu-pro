<?php

namespace app\controllers;

use app\models\anamnesa\PertanyaanAnmnesis;

class UnitPemeriksaanController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $pertanyaanAnmesis = new PertanyaanAnmnesis();

        return $this->render('index', [
            'pertanyaanAnmesis' => $pertanyaanAnmesis
        ]);
    }
}
