<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-20 21:00:15 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-20 21:05:05
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-md-12">

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="form-group">
                    <h4 class="header-title m-t-0 m-b-30">1. Tanda Vital</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nadi</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_tulang">
                                        <input type="text" id="masterpemeriksaanfisik-tanda_vital_nadi" class="form-control" name="MasterPemeriksaanFisik[tanda_vital_nadi]" value="" placeholder="Vital Nadi">
                                    </div>
                                </td>
                                <th>Pernapasan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_bentuk_wajah">
                                        <input type="text" id="masterpemeriksaanfisik-tanda_vital_pernapasan" class="form-control" name="MasterPemeriksaanFisik[tanda_vital_pernapasan]" value="" placeholder="Pernapasan">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Sistolik</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_kulit_kepala">
                                        <input type="text" id="masterpemeriksaanfisik-sistolik" class="form-control" name="MasterPemeriksaanFisik[sistolik]" value="0" placeholder="Sistolik">
                                    </div>
                                </td>
                                <th>Diastolik</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_rambut">
                                        <input type="text" id="masterpemeriksaanfisik-diastolik" class="form-control" name="MasterPemeriksaanFisik[diastolik]" value="0" placeholder="Diastolik">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Suhu Badan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_kulit_kepala">
                                        <input type="text" id="masterpemeriksaanfisik-tanda_vital_suhu_badan" class="form-control" name="MasterPemeriksaanFisik[tanda_vital_suhu_badan]" value="36" placeholder="Suhu Badan">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" id="MasterPemeriksaanFisik">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="form-group">
                    <h4 class="header-title m-t-0 m-b-30">2. Status Gizi</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Tinggi Badan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_kesadaran">
                                        <input type="text" id="masterpemeriksaanfisik-status_gizi_tinggi_badan" class="form-control" name="MasterPemeriksaanFisik[status_gizi_tinggi_badan]" value="" placeholder="Tinggi Badan">
                                    </div>
                                </td>
                                <th>Berat Badan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_tampak_kesakitan">
                                        <input type="text" id="masterpemeriksaanfisik-status_gizi_berat_badan" class="form-control" name="MasterPemeriksaanFisik[status_gizi_berat_badan]" value="" placeholder="Berat Badan">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Lingkaran Perut</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_kualitas_kontak">
                                        <input type="text" id="masterpemeriksaanfisik-status_gizi_lingkaran_perut" class="form-control" name="MasterPemeriksaanFisik[status_gizi_lingkaran_perut]" value="" placeholder="Lingkaran Perut">
                                    </div>
                                </td>
                                <th>Lingkaran Lengan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_gangguan_saat_berjalan">
                                        <input type="text" id="masterpemeriksaanfisik-status_gizi_lingkaran_pinggang" class="form-control" name="MasterPemeriksaanFisik[status_gizi_lingkaran_pinggang]" value="" placeholder="Lingkaran Lengan">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Imt</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_kualitas_kontak">
                                        <input type="text" id="masterpemeriksaanfisik-status_gizi_imt" class="form-control" name="MasterPemeriksaanFisik[status_gizi_imt]" value="" readonly="">
                                    </div>
                                </td>
                                <th>Bentuk Badan</th>
                                <td>
                                    <div id="masterpemeriksaanfisik-status_gizi_bentuk_badan" role="radiogroup">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="i19" class="custom-control-input" name="MasterPemeriksaanFisik[status_gizi_bentuk_badan]" value="Normal">
                                            <label class="custom-control-label" for="i19">Normal</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="i20" class="custom-control-input" name="MasterPemeriksaanFisik[status_gizi_bentuk_badan]" value="Kekurangan Berat Badan Tingkat Berat">
                                            <label class="custom-control-label" for="i20">Kekurangan Berat Badan Tingkat Berat</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="i21" class="custom-control-input" name="MasterPemeriksaanFisik[status_gizi_bentuk_badan]" value="Kekurangan Berat Badan Tingkat Ringan">
                                            <label class="custom-control-label" for="i21">Kekurangan Berat Badan Tingkat Ringan</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="i22" class="custom-control-input" name="MasterPemeriksaanFisik[status_gizi_bentuk_badan]" value="Kelebihan Berat Badan Tingkat Ringan">
                                            <label class="custom-control-label" for="i22">Kelebihan Berat Badan Tingkat Ringan</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="i23" class="custom-control-input" name="MasterPemeriksaanFisik[status_gizi_bentuk_badan]" value="Kelebihan Berat Badan Tingkat Berat">
                                            <label class="custom-control-label" for="i23">Kelebihan Berat Badan Tingkat Berat</label>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" id="MasterPemeriksaanFisik">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="form-group">
                    <h4 class="header-title m-t-0 m-b-30">3. Tingkat Kesadaran dan Keadaan Umum</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Kesadaran</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_kesadaran">
                                        <div id="masterpemeriksaanfisik-tingkat_kesadaran_kesadaran" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i24" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_kesadaran]" value="Compos Mentis" checked="">
                                                <label class="custom-control-label" for="i24">Compos Mentis</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i25" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_kesadaran]" value="Kesadaran Menurun">
                                                <label class="custom-control-label" for="i25">Kesadaran Menurun</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <th>Tempat Kesakitan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_tampak_kesakitan">
                                        <div id="masterpemeriksaanfisik-tingkat_kesadaran_tampak_kesakitan" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i28" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_tampak_kesakitan]" value="Tidak Tampak Kesakitan" checked="">
                                                <label class="custom-control-label" for="i28">Tidak Tampak Kesakitan</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i29" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_tampak_kesakitan]" value="Ya, Tampak Kesakitan">
                                                <label class="custom-control-label" for="i29">Ya, Tampak Kesakitan</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Kualitas Kontak</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_kualitas_kontak">
                                        <div id="masterpemeriksaanfisik-tingkat_kesadaran_kualitas_kontak" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i26" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_kualitas_kontak]" value="Baik" checked="">
                                                <label class="custom-control-label" for="i26">Baik</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i27" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_kualitas_kontak]" value="Tidak">
                                                <label class="custom-control-label" for="i27">Tidak</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <th>Gangguan Saat Berjalan</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-tingkat_kesadaran_gangguan_saat_berjalan">
                                        <div id="masterpemeriksaanfisik-tingkat_kesadaran_gangguan_saat_berjalan" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i30" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_gangguan_saat_berjalan]" value="Tidak" checked="">
                                                <label class="custom-control-label" for="i30">Tidak</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i31" class="custom-control-input" name="MasterPemeriksaanFisik[tingkat_kesadaran_gangguan_saat_berjalan]" value="Ya">
                                                <label class="custom-control-label" for="i31">Ya</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="form-group">
                    <h4 class="header-title m-t-0 m-b-30">4. Kelenjar Getah Bening</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Getah Bening Leher</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kelenjar_getah_bening_leher">
                                        <div id="masterpemeriksaanfisik-kelenjar_getah_bening_leher" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i32" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_leher]" value="Normal" checked="">
                                                <label class="custom-control-label" for="i32">Normal</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i33" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_leher]" value="Tidak Normal">
                                                <label class="custom-control-label" for="i33">Tidak Normal</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <th>Getah Bening Ketiak</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kelenjar_getah_bening_ketiak">
                                        <div id="masterpemeriksaanfisik-kelenjar_getah_bening_ketiak" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i36" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_ketiak]" value="Normal" checked="">
                                                <label class="custom-control-label" for="i36">Normal</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i37" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_ketiak]" value="Tidak Normal">
                                                <label class="custom-control-label" for="i37">Tidak Normal</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Sub Mandibula</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kelenjar_getah_bening_sub_mandibula">
                                        <div id="masterpemeriksaanfisik-kelenjar_getah_bening_sub_mandibula" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i34" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_sub_mandibula]" value="Normal" checked="">
                                                <label class="custom-control-label" for="i34">Normal</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i35" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_sub_mandibula]" value="Tidak Normal">
                                                <label class="custom-control-label" for="i35">Tidak Normal</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <th>Inguinal</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kelenjar_getah_bening_inguinal">
                                        <div id="masterpemeriksaanfisik-kelenjar_getah_bening_inguinal" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i38" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_inguinal]" value="Normal" checked="">
                                                <label class="custom-control-label" for="i38">Normal</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i39" class="custom-control-input" name="MasterPemeriksaanFisik[kelenjar_getah_bening_inguinal]" value="Tidak Normal">
                                                <label class="custom-control-label" for="i39">Tidak Normal</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="form-group">
                    <h4 class="header-title m-t-0 m-b-30">5. Kepala</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Tulang</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_tulang">
                                        <div id="masterpemeriksaanfisik-kepala_tulang" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i40" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_tulang]" value="Baik" checked="">
                                                <label class="custom-control-label" for="i40">Baik</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i41" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_tulang]" value="Tidak baik">
                                                <label class="custom-control-label" for="i41">Tidak Baik</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <th>Bentuk Wajah</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_bentuk_wajah">
                                        <div id="masterpemeriksaanfisik-kepala_bentuk_wajah" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i46" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_bentuk_wajah]" value="Baik" checked="">
                                                <label class="custom-control-label" for="i46">Baik</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i47" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_bentuk_wajah]" value="Tidak baik">
                                                <label class="custom-control-label" for="i47">Tidak Baik</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Kulit Kepala</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_kulit_kepala">
                                        <div id="masterpemeriksaanfisik-kepala_kulit_kepala" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i42" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_kulit_kepala]" value="Baik" checked="">
                                                <label class="custom-control-label" for="i42">Baik</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i43" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_kulit_kepala]" value="Tidak baik">
                                                <label class="custom-control-label" for="i43">Tidak Baik</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <th>Rambut</th>
                                <td>
                                    <div class="form-group field-masterpemeriksaanfisik-kepala_rambut">
                                        <div id="masterpemeriksaanfisik-kepala_rambut" role="radiogroup">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i44" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_rambut]" value="Baik" checked="">
                                                <label class="custom-control-label" for="i44">Baik</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="i45" class="custom-control-input" name="MasterPemeriksaanFisik[kepala_rambut]" value="Tidak baik">
                                                <label class="custom-control-label" for="i45">Tidak Baik</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <h4 class="header-title m-t-0 m-b-30">24. Kulit</h4>
        <div class="row">
            <hr>
            <div class="col-lg-12">
                <iframe src="<?= Url::base(true) ?>/body-tato/form?id=<?= $pasien->no_rekam_medik ?>" style="display: block;width: 1200px;height: 720px;border: none;"></iframe>
            </div>
            <hr>
        </div>
    </div>
</div>