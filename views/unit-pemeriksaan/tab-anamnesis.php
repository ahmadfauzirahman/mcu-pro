<?php 
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-20 21:00:15 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-20 21:00:46
 */

use yii\helpers\Html;

?>
<h4 class="card-title">Anamnesis</h4>
<p class="card-title-desc">Anamnesis yang baik harus mengacu pada pertanyaan yang sistematis, yaitu dengan berpedoman pada empat pokok pikiran (The Fundamental Four)dan tujuh butir mutiara anamnesis (The Sacred Seven)</p>


<div class="pertanyaan-anmnesis-form">
    <?= $form->field($pertanyaanAnmesis, 'jawaban1')
        ->textarea(['rows' => 6,])
        ->label("Dilakukan Secara Allananmnesi / Autoananmnesis Dengan") ?>

    <?= $form->field($pertanyaanAnmesis, 'jawaban2')
        ->textarea(['rows' => 6,])
        ->label('A. Alasan Kedatangan / Keluhan Utama (Termasuk keluhan yang masih dirasakan pada kunjungan ulangan, harapan kekhawatiran,presepsi pasien mengenai keluhan /Penyakit)') ?>

    <?= $form->field($pertanyaanAnmesis, 'jawaban3')->textarea(['rows' => 6])->label('B. Keluhan Lain / tambahan ') ?>

    <?= $form->field($pertanyaanAnmesis, 'jawaban4')->textarea(['rows' => 6])->label('C. Riwayat Perjalanan Penyakit Sekarang : harus ditulis secara kronologis!!! (uraikan sejak timbul hingga berkembangnya penyakit, obatan-obatan yang telah diminum, pelayanan kesahatan yang telah diperolah termasuk sikap dan perilaku pasien, keluarga, lingkungan terhadap masalah yang ada) ') ?>

    <?= $form->field($pertanyaanAnmesis, 'jawaban5')->textarea(['rows' => 6])->label('D. Riwayat Penyakit Keluarga : (uraian penyakit yang ada pada keluarga baik yang sama, berbeda, maupun yang tidak berhubungan dengan masalahn yang ada saat ini, termasuk bagaiman cara anggota keluarga tersebut menghadapinya) ') ?>

    <?= $form->field($pertanyaanAnmesis, 'jawaban6')->textarea(['rows' => 6])->label('E. Riwayat penyakit dahulu: (baik yang sama maupun yang berbeda dengan penyakit sekarang, riwayat pengobatan dan pelayanan kesehatan yang pernah diperoleh termasuk pencegahan spesifik yang pernah diterima) ') ?>


    <div class="row">

        <div class="col-lg-3">
            <label for="">G</label>
            <?= $form->field($pertanyaanAnmesis, 'g')->textInput()->label(false) ?>
        </div>
        <div class="col-lg-3">
            <label for="">P</label>
            <?= $form->field($pertanyaanAnmesis, 'p')->textInput()->label(false) ?>
        </div>
        <div class="col-lg-3">
            <label for="">A</label>
            <?= $form->field($pertanyaanAnmesis, 'a')->textInput()->label(false) ?>
        </div>
        <div class="col-lg-3">
            <label for="">H</label>
            <?= $form->field($pertanyaanAnmesis, 'h')->textInput()->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


</div>