<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-20 21:00:15 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-20 21:07:05
 */

use app\models\PenatalaksanaanMcu;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="tab-resume col-md-12">
    <div class="row">
        <?= $form->field($modelPenanta, 'no_rekam_medik')->hiddenInput(['rows' => 6])->label(false) ?>

        <div class="col-lg-3">
            <?= $form->field($modelPenanta, 'jenis_permasalahan')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($modelPenanta, 'rencana')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($modelPenanta, 'target_waktu')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($modelPenanta, 'hasil_yang_diharapkan')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-lg-12">
            <?= $form->field($modelPenanta, 'keterangan')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Jenis Permasalahan</th>
                        <th>Rencana</th>
                        <th>Target Waktu</th>
                        <th>Hasil Yang Diharapkan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $penatas = PenatalaksanaanMcu::find()->where(['no_rekam_medik' => $modelPenanta->no_rekam_medik])->all();
                ?>
                <tbody>
                    <?php foreach ($penatas as $items_penata) { ?>
                        <tr>
                            <td><?= $items_penata->jenis_permasalahan ?></td>
                            <td><?= $items_penata->rencana ?></td>
                            <td><?= $items_penata->target_waktu ?></td>
                            <td><?= $items_penata->hasil_yang_diharapkan ?></td>
                            <td><?= $items_penata->keterangan ?></td>
                            <td><a href="#" onclick="hapus(this)" data-value="<?= $items_penata->id_penata ?>">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>