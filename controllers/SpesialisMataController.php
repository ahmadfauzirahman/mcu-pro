<?php

namespace app\controllers;

use app\models\DataLayanan;
use app\models\DataPelayanan;
use app\models\PenatalaksanaanMcu;
use Yii;
use app\models\spesialis\mata\SpesialisMata;
use app\models\spesialis\mata\SpesialisMataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpesialisMataController implements the CRUD actions for SpesialisMata model.
 */
class SpesialisMataController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SpesialisMata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SpesialisMataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SpesialisMata model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SpesialisMata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SpesialisMata();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_spesialis_mata]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SpesialisMata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_spesialis_mata]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SpesialisMata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SpesialisMata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SpesialisMata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SpesialisMata::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //------------------------------------------------
    // public function actionPeriksa($no_rm = null)
    // {
    //     if ($no_rm != null) {
    //         $pasien = DataLayanan::find()->where(['no_rekam_medik' => $no_rm])->one();
    //         if (!$pasien) {
    //             return $this->redirect(['/site/ngga-nemu', 'no_rm' => $no_rm]);
    //         }
    //         $model = SpesialisMata::find()->where(['no_rekam_medik' => $no_rm])->one();
    //         if (!$model)
    //             $model = new SpesialisMata();
    //         $model->cari_pasien = $no_rm;
    //     } else {
    //         $pasien = null;
    //         $model = new SpesialisMata();
    //     }

    //     if ($model->load(Yii::$app->request->post())) {
    //         \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    //         if ($model->save()) {
    //             return [
    //                 's' => true,
    //                 'e' => null
    //             ];
    //         } else {
    //             return [
    //                 's' => false,
    //                 'e' => $model->errors
    //             ];
    //         }
    //     }

    //     if ($model->isNewRecord) {
    //         $model->persepsi_warna_mata_kanan = 'Normal';
    //         $model->persepsi_warna_mata_kiri = 'Normal';
    //         $model->kelopak_mata_kanan = 'Normal';
    //         $model->kelopak_mata_kiri = 'Normal';
    //         $model->konjungtiva_mata_kanan = 'Normal';
    //         $model->konjungtiva_mata_kiri = 'Normal';
    //         $model->kesegarisan_gerak_bola_mata_kanan = 'Normal';
    //         $model->kesegarisan_gerak_bola_mata_kiri = 'Normal';
    //         $model->skiera_mata_kanan = 'Normal';
    //         $model->skiera_mata_kiri = 'Normal';
    //         $model->lensa_mata_kanan = 'Tidak Keruh';
    //         $model->lensa_mata_kiri = 'Tidak Keruh';
    //         $model->kornea_mata_kanan = 'Normal';
    //         $model->kornea_mata_kiri = 'Normal';
    //         $model->bulu_mata_kanan = 'Normal';
    //         $model->bulu_mata_kiri = 'Normal';
    //         $model->tekanan_bola_mata_kanan = 'Normal';
    //         $model->tekanan_bola_mata_kiri = 'Normal';
    //         $model->penglihatan_3_dimensi_mata_kanan = 'Normal';
    //         $model->penglihatan_3_dimensi_mata_kiri = 'Normal';
    //         $model->virus_mata_tanpa_koreksi_mata_kanan = 'VOD: 20/20';
    //         $model->virus_mata_tanpa_koreksi_mata_kiri = 'VOS: 20/20';
    //     }

    //     return $this->render('periksa', [
    //         'model' => $model,
    //         'no_rm' => $no_rm,
    //         'pasien' => $pasien,
    //     ]);
    // }

    public function actionPeriksa($id = null)
    {

        $id_cari = $id;

        $modelPenata = new PenatalaksanaanMcu();
        if ($id_cari != null) {
            $pasien = DataPelayanan::find()->where(['id_data_pelayanan' => $id_cari])->one();
            if (!$pasien) {
                return $this->redirect(['/site/ngga-nemu', 'id' => $id_cari]);
            }

            $model = SpesialisMata::find()
                ->where(['no_rekam_medik' => $pasien->no_rekam_medik])
                ->andWhere(['no_daftar' => $pasien->no_registrasi])
                ->one();
            if (!$model)
                $model = new SpesialisMata();

            $modelPenata->no_rekam_medik = $pasien->no_rekam_medik;
            $model->cari_pasien = $id_cari;
            $no_rm = $pasien->no_rekam_medik;
            $no_daftar = $pasien->no_registrasi;
        } else {
            $pasien = null;
            $no_rm = null;
            $no_daftar = null;
            $model = new SpesialisMata();
        }
        $modelPenataList = PenatalaksanaanMcu::find()
            ->where(['jenis' => 'spesialis_mata'])
            ->andWhere(['id_fk' => $model->id_spesialis_mata]);

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if ($model->save()) {
                return [
                    's' => true,
                    'e' => null
                ];
            } else {
                return [
                    's' => false,
                    'e' => $model->errors
                ];
            }
        }

        if ($model->isNewRecord) {
            $model->persepsi_warna_mata_kanan = 'Normal';
            $model->persepsi_warna_mata_kiri = 'Normal';
            $model->kelopak_mata_kanan = 'Normal';
            $model->kelopak_mata_kiri = 'Normal';
            $model->konjungtiva_mata_kanan = 'Normal';
            $model->konjungtiva_mata_kiri = 'Normal';
            $model->kesegarisan_gerak_bola_mata_kanan = 'Normal';
            $model->kesegarisan_gerak_bola_mata_kiri = 'Normal';
            $model->skiera_mata_kanan = 'Normal';
            $model->skiera_mata_kiri = 'Normal';
            $model->lensa_mata_kanan = 'Tidak Keruh';
            $model->lensa_mata_kiri = 'Tidak Keruh';
            $model->kornea_mata_kanan = 'Normal';
            $model->kornea_mata_kiri = 'Normal';
            $model->bulu_mata_kanan = 'Normal';
            $model->bulu_mata_kiri = 'Normal';
            $model->tekanan_bola_mata_kanan = 'Normal';
            $model->tekanan_bola_mata_kiri = 'Normal';
            $model->penglihatan_3_dimensi_mata_kanan = 'Normal';
            $model->penglihatan_3_dimensi_mata_kiri = 'Normal';
            $model->virus_mata_tanpa_koreksi_mata_kanan = 'VOD: 20/20';
            $model->virus_mata_tanpa_koreksi_mata_kiri = 'VOS: 20/20';
            $model->virus_mata_dengan_koreksi_mata_kanan = '-';
            $model->virus_mata_dengan_koreksi_mata_kiri = '-';
            $model->kesan = 'Normal';
        }

        return $this->render('periksa', [
            'model' => $model,
            'modelPenata' => $modelPenata,
            'modelPenataList' => $modelPenataList,
            'no_rm' => $no_rm,
            'no_daftar' => $no_daftar,
            'pasien' => $pasien,
        ]);
    }

    public function actionSimpanPenata($id = null)
    {
        $model = new PenatalaksanaanMcu();

        if ($model->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $model->jenis = 'spesialis_mata';
            $model->id_fk = $id;

            if ($model->save()) {
                return [
                    's' => true,
                    'e' => null
                ];
            } else {
                return [
                    's' => false,
                    'e' => $model->errors
                ];
            }
        }
    }

    public function actionCetak($no_rm, $no_daftar)
    {
        $model = SpesialisMata::findOne(['no_rekam_medik' => $no_rm, 'no_daftar' => $no_daftar]);

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'legal',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 10,
            'margin_footer' => 10
        ]);
        $mpdf->SetTitle('Spesialis Mata ' . $model['no_rekam_medik']);
        if ($model->kesan == 'Normal') {
            $model->kesimpulan = 'Normal';
        }
        // return $this->renderPartial('cetak', [
        //     'model' => $model,
        //     'no_rm' => $no_rm,
        //     'pasien' => DataLayanan::find()->where(['no_rekam_medik' => $no_rm])->one(),
        // ]);
        $mpdf->WriteHTML($this->renderPartial('cetak', [
            'model' => $model,
            'no_rm' => $no_rm,
            'pasien' => DataPelayanan::find()->where(['no_rekam_medik' => $no_rm])->one(),
        ]));
        $mpdf->Output('Spesialis Mata ' . $model['no_rekam_medik'] . '.pdf', 'I');
        exit;
    }
}
