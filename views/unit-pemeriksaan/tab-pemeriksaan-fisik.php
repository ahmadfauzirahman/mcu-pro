<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-20 21:00:15 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-21 00:49:25
 */

use app\components\Helper;
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
        <div class="col-md-12">
            <h4>
                6. Mata
            </h4>
            <table class="table table-sm tabel-mata">
                <colgroup width="35"></colgroup>
                <colgroup width="268"></colgroup>
                <colgroup width="23"></colgroup>
                <colgroup width="160"></colgroup>
                <colgroup width="226"></colgroup>
                <colgroup width="160"></colgroup>
                <colgroup width="247"></colgroup>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="19" align="center" valign=top>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                            <font color="#000000">MATA KANAN</font>
                        </b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                            <font color="#000000">MATA KIRI</font>
                        </b></td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="1" sdnum="1033;">
                        <font color="#000000">1</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                        <font color="#000000">Persepsi Warna</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_persepsi_warna_kanan', ['id' => 'mpemeriksaanfisik_mata_persepsi_warna_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_persepsi_warna_kanan == 'Buta Warna Parsial') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kanan_1" name="MPemeriksaanFisik[mata_persepsi_warna_kanan]" value="Buta Warna Parsial">
                            Buta Warna Parsial
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_persepsi_warna_kiri', ['id' => 'mpemeriksaanfisik_mata_persepsi_warna_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_persepsi_warna_kiri == 'Buta Warna Parsial') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kiri_1" name="MPemeriksaanFisik[mata_persepsi_warna_kiri]" value="Buta Warna Parsial">
                            Buta Warna Parsial
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_persepsi_warna_kanan == 'Buta Warna Total') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kanan_2" name="MPemeriksaanFisik[mata_persepsi_warna_kanan]" value="Buta Warna Total">
                            Buta Warna Total
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_persepsi_warna_kiri == 'Buta Warna Total') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kiri_2" name="MPemeriksaanFisik[mata_persepsi_warna_kiri]" value="Buta Warna Total">
                            Buta Warna Total
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="2" sdnum="1033;">
                        <font color="#000000">2</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Kelopak Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_kelopak_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_kelopak_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_kelopak_mata_kanan == 'Tidak Normal (Oedema)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kelopak_mata_kanan_1" name="MPemeriksaanFisik[mata_kelopak_mata_kanan]" value="Tidak Normal (Oedema)">
                            Tidak Normal (Oedema)
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_kelopak_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_kelopak_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_kelopak_mata_kiri == 'Tidak Normal (Oedema)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kelopak_mata_kiri_1" name="MPemeriksaanFisik[mata_kelopak_mata_kiri]" value="Tidak Normal (Oedema)">
                            Tidak Normal (Oedema)
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="3" sdnum="1033;">
                        <font color="#000000">3</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                        <font color="#000000">Konjungtiva</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_konjungtiva_kanan', ['id' => 'mpemeriksaanfisik_mata_konjungtiva_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_konjungtiva_kanan == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_1" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Hiperemesis">
                            Hiperemesis
                        </label>
                        <label style="margin-left: 20px;">
                            <input <?= ($model->mata_konjungtiva_kanan == 'Sekret (-)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_2" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Sekret (-)">
                            Sekret
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_konjungtiva_kiri', ['id' => 'mpemeriksaanfisik_mata_konjungtiva_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_konjungtiva_kiri == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_1" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Hiperemesis">
                            Hiperemesis
                        </label>
                        <label style="margin-left: 20px;">
                            <input <?= ($model->mata_konjungtiva_kiri == 'Sekret (-)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_2" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Sekret (-)">
                            Sekret
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_konjungtiva_kanan == 'Pucat') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_3" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Pucat">
                            Pucat
                        </label>
                        <label style="margin-left: 20px;">
                            <input <?= ($model->mata_konjungtiva_kanan == 'Pterigium') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_4" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Pterigium">
                            Pterigium
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_konjungtiva_kiri == 'Pucat') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_3" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Pucat">
                            Pucat
                        </label>
                        <label style="margin-left: 20px;">
                            <input <?= ($model->mata_konjungtiva_kiri == 'Pterigium') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_4" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Pterigium">
                            Pterigium
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="4" sdnum="1033;">
                        <font color="#000000">4</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Kesegarisan/Gerak Bola Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_gerak_bola_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_gerak_bola_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_gerak_bola_mata_kanan == 'Strabismus') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_gerak_bola_mata_kanan_1" name="MPemeriksaanFisik[mata_gerak_bola_mata_kanan]" value="Strabismus">
                            Strabismus
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_gerak_bola_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_gerak_bola_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_gerak_bola_mata_kiri == 'Strabismus') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_gerak_bola_mata_kiri_1" name="MPemeriksaanFisik[mata_gerak_bola_mata_kiri]" value="Strabismus">
                            Strabismus
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="5" sdnum="1033;">
                        <font color="#000000">5</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Skiera</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_sklera_kanan', ['id' => 'mpemeriksaanfisik_mata_sklera_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_sklera_kanan == 'Ikterik') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_sklera_kanan_1" name="MPemeriksaanFisik[mata_sklera_kanan]" value="Ikterik">
                            Ikterik
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_sklera_kiri', ['id' => 'mpemeriksaanfisik_mata_sklera_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_sklera_kiri == 'Ikterik') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_sklera_kiri_1" name="MPemeriksaanFisik[mata_sklera_kiri]" value="Ikterik">
                            Ikterik
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="6" sdnum="1033;">
                        <font color="#000000">6</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Lensa Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_lensa_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_lensa_mata_kanan_0', 'value' => 'Tidak Keruh', 'label' => 'Tidak Keruh']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_lensa_mata_kanan == 'Keruh') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_lensa_mata_kanan_1" name="MPemeriksaanFisik[mata_lensa_mata_kanan]" value="Keruh">
                            Keruh
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_lensa_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_lensa_mata_kiri_0', 'value' => 'Tidak Keruh', 'label' => 'Tidak Keruh']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_lensa_mata_kiri == 'Keruh') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_lensa_mata_kiri_1" name="MPemeriksaanFisik[mata_lensa_mata_kiri]" value="Keruh">
                            Keruh
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="7" sdnum="1033;">
                        <font color="#000000">7</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Kornea</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_kornea_kanan', ['id' => 'mpemeriksaanfisik_mata_kornea_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_kornea_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kornea_kanan_1" name="MPemeriksaanFisik[mata_kornea_kanan]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_kornea_kiri', ['id' => 'mpemeriksaanfisik_mata_kornea_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_kornea_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kornea_kiri_1" name="MPemeriksaanFisik[mata_kornea_kiri]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="8" sdnum="1033;">
                        <font color="#000000">8</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Bulu Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_bulu_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_bulu_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_bulu_mata_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_bulu_mata_kanan_1" name="MPemeriksaanFisik[mata_bulu_mata_kanan]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_bulu_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_bulu_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_bulu_mata_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_bulu_mata_kiri_1" name="MPemeriksaanFisik[mata_bulu_mata_kiri]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="9" sdnum="1033;">
                        <font color="#000000">9</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Tekanan Bola Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_tekanan_bola_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_tekanan_bola_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_tekanan_bola_mata_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_tekanan_bola_mata_kanan_1" name="MPemeriksaanFisik[mata_tekanan_bola_mata_kanan]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_tekanan_bola_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_tekanan_bola_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_tekanan_bola_mata_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_tekanan_bola_mata_kiri_1" name="MPemeriksaanFisik[mata_tekanan_bola_mata_kiri]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                </tr>
                <tr style="display: none;">
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="10" sdnum="1033;">
                        <font color="#000000">10</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Penglihatan 3 dimensi</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_penglihatan_3dimensi_kanan', ['id' => 'mpemeriksaanfisik_mata_penglihatan_3dimensi_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_penglihatan_3dimensi_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_penglihatan_3dimensi_kanan_1" name="MPemeriksaanFisik[mata_penglihatan_3dimensi_kanan]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <?= Html::activeRadio($model, 'mata_penglihatan_3dimensi_kiri', ['id' => 'mpemeriksaanfisik_mata_penglihatan_3dimensi_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                        <label>
                            <input <?= ($model->mata_penglihatan_3dimensi_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_penglihatan_3dimensi_kiri_1" name="MPemeriksaanFisik[mata_penglihatan_3dimensi_kiri]" value="Tidak Normal">
                            Tidak Normal
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 height="58" align="center" valign=top sdval="11" sdnum="1033;">
                        <font color="#000000">11</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">Virus Mata</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000"><br></font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                            <font color="#000000">MATA KANAN</font>
                        </b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                            <font color="#000000">MATA KIRI</font>
                        </b>
                    </td>
                </tr>
                <tr class="parent-no-margin">
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">a. Tanpa Koreksi</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                        <?= $form->field($model, 'mata_visus_tanpa_koreksi')->textInput(['maxlength' => true])->label(false) ?>
                    </td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                        <?= $form->field($model, 'mata_visus_tanpa_koreksi_kiri')->textInput(['maxlength' => true])->label(false) ?>
                    </td>
                </tr>
                <tr class="parent-no-margin">
                    <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                        <font color="#000000">b. Dengan Koreksi</font>
                    </td>
                    <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                        <font color="#000000">:</font>
                    </td>
                    <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                        <?= $form->field($model, 'mata_visus_dengan_koreksi')->textInput(['maxlength' => true])->label(false) ?>
                    </td>
                    <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                        <?= $form->field($model, 'mata_visus_dengan_koreksi_kiri')->textInput(['maxlength' => true])->label(false) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>
                7. Telinga
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam">
                <thead>
                    <tr>
                        <th colspan="3"></th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">MATA KANAN</th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">MATA KIRI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Daun Telinga</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_daun_telinga_kanan', ['id' => 'mpemeriksaanfisik_telinga_daun_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_daun_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_daun_telinga_kanan_1" name="MPemeriksaanFisik[telinga_daun_telinga_kanan]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_daun_telinga_kiri', ['id' => 'mpemeriksaanfisik_telinga_daun_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_daun_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_daun_telinga_kiri_1" name="MPemeriksaanFisik[telinga_daun_telinga_kiri]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td>Liang Telinga</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_liang_telinga_kanan', ['id' => 'mpemeriksaanfisik_telinga_liang_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_liang_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_liang_telinga_kanan_1" name="MPemeriksaanFisik[telinga_liang_telinga_kanan]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_liang_telinga_kiri', ['id' => 'mpemeriksaanfisik_telinga_liang_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_liang_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_liang_telinga_kiri_1" name="MPemeriksaanFisik[telinga_liang_telinga_kiri]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-center" style="width: 40px;">3</td>
                        <td rowspan="2">Serumen</td>
                        <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_serumen_kanan', ['id' => 'mpemeriksaanfisik_telinga_serumen_kanan_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_serumen_kanan == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kanan_1" name="MPemeriksaanFisik[telinga_serumen_kanan]" value="Ada Serumen">
                                Ada Serumen
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_serumen_kiri', ['id' => 'mpemeriksaanfisik_telinga_serumen_kiri_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_serumen_kiri == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kiri_1" name="MPemeriksaanFisik[telinga_serumen_kiri]" value="Ada Serumen">
                                Ada Serumen
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_serumen_kanan == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kanan_2" name="MPemeriksaanFisik[telinga_serumen_kanan]" value="Menyumbat (Prop)">
                                Menyumbat (Prop)
                            </label>
                        </td>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_serumen_kiri == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kiri_2" name="MPemeriksaanFisik[telinga_serumen_kiri]" value="Menyumbat (Prop)">
                                Menyumbat (Prop)
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-center" style="width: 40px;">4</td>
                        <td rowspan="2">Telinga Timpani</td>
                        <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_timpani_kanan', ['id' => 'mpemeriksaanfisik_telinga_timpani_kanan_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_timpani_kanan == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kanan_1" name="MPemeriksaanFisik[telinga_timpani_kanan]" value="Tidak Intak">
                                Tidak Intak
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'telinga_timpani_kiri', ['id' => 'mpemeriksaanfisik_telinga_timpani_kiri_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_timpani_kiri == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kiri_1" name="MPemeriksaanFisik[telinga_timpani_kiri]" value="Tidak Intak">
                                Tidak Intak
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_timpani_kanan == 'Lainnya') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kanan_2" name="MPemeriksaanFisik[telinga_timpani_kanan]" value="Lainnya">
                                Lainnya
                            </label>
                        </td>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->telinga_timpani_kiri == 'Lainnya') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kiri_2" name="MPemeriksaanFisik[telinga_timpani_kiri]" value="Lainnya">
                                Lainnya
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>
                8. Hidung
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Meatus Nasi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'hidung_meatus_nasi', ['id' => 'mpemeriksaanfisik_hidung_meatus_nasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->hidung_meatus_nasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_meatus_nasi_1" name="MPemeriksaanFisik[hidung_meatus_nasi]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Septum Nasi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'hidung_septum_nasi', ['id' => 'mpemeriksaanfisik_hidung_septum_nasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->hidung_septum_nasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_septum_nasi_1" name="MPemeriksaanFisik[hidung_septum_nasi]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Konka Nasal</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'hidung_konka_nasal', ['id' => 'mpemeriksaanfisik_hidung_konka_nasal_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->hidung_konka_nasal == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_konka_nasal_1" name="MPemeriksaanFisik[hidung_konka_nasal]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">4</td>
                        <td style="width: 25%;">Ketok Sinus</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'hidung_nyeri_ketok_sinus', ['id' => 'mpemeriksaanfisik_hidung_nyeri_ketok_sinus_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->hidung_nyeri_ketok_sinus == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_nyeri_ketok_sinus_1" name="MPemeriksaanFisik[hidung_nyeri_ketok_sinus]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">5</td>
                        <td style="width: 25%;">Penciuman</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'hidung_penciuman', ['id' => 'mpemeriksaanfisik_hidung_penciuman_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->hidung_penciuman == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_penciuman_1" name="MPemeriksaanFisik[hidung_penciuman]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>
                9. Mulut dan Bibir
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Bibir</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'mulut_bibir', ['id' => 'mpemeriksaanfisik_mulut_bibir_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->mulut_bibir == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_bibir_1" name="MPemeriksaanFisik[mulut_bibir]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Lidah</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'mulut_lidah', ['id' => 'mpemeriksaanfisik_mulut_lidah_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->mulut_lidah == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_lidah_1" name="MPemeriksaanFisik[mulut_lidah]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Gusi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'mulut_gusi', ['id' => 'mpemeriksaanfisik_mulut_gusi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->mulut_gusi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_gusi_1" name="MPemeriksaanFisik[mulut_gusi]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">4</td>
                        <td style="width: 25%;">Lainnya</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'mulut_lainnya', ['id' => 'mpemeriksaanfisik_mulut_lainnya_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->mulut_lainnya == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_lainnya_1" name="MPemeriksaanFisik[mulut_lainnya]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>
                10. Tenggorokan
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Tenggorokan</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'tenggorokan', ['id' => 'mpemeriksaanfisik_tenggorokan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->tenggorokan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_1" name="MPemeriksaanFisik[tenggorokan]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Pharynx</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'tenggorokan_pharynx', ['id' => 'mpemeriksaanfisik_tenggorokan_pharynx_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->tenggorokan_pharynx == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_pharynx_1" name="MPemeriksaanFisik[tenggorokan_pharynx]" value="Hiperemesis">
                                Hiperemesis
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;">
                            <label>
                                <input <?= ($model->tenggorokan_pharynx == 'Granulasi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_pharynx_1" name="MPemeriksaanFisik[tenggorokan_pharynx]" value="Granulasi">
                                Granulasi
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3"></th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Tonsil</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td class="text-center" colspan="2">
                            <?php
                            echo $form->field($model, 'tenggorokan_tonsil_kanan')->radioList(
                                ['T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3',],
                                [
                                    'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                        return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                    }
                                ]
                            )->label(false);
                            ?>
                        </td>
                        <td class="text-center" colspan="2">
                            <?php
                            echo $form->field($model, 'tenggorokan_tonsil_kiri')->radioList(
                                ['T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3',],
                                [
                                    'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                        return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                    }
                                ]
                            )->label(false);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">4</td>
                        <td style="width: 25%;">Ukuran Tonsil</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'tenggorokan_tonsil_ukuran_kanan', ['id' => 'mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->tenggorokan_tonsil_ukuran_kanan == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kanan_1" name="MPemeriksaanFisik[tenggorokan_tonsil_ukuran_kanan]" value="Hiperemis">
                                Hiperemis
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'tenggorokan_tonsil_ukuran_kiri', ['id' => 'mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->tenggorokan_tonsil_ukuran_kiri == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kiri_1" name="MPemeriksaanFisik[tenggorokan_tonsil_ukuran_kiri]" value="Hiperemis">
                                Hiperemis
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">5</td>
                        <td style="width: 25%;">Palatum</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'tenggorokan_palatum', ['id' => 'mpemeriksaanfisik_tenggorokan_palatum_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->tenggorokan_palatum == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_palatum_1" name="MPemeriksaanFisik[tenggorokan_palatum]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">6</td>
                        <td style="width: 25%;">Lainnya</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td colspan="4" style="width: 35%;">
                            <?= $form->field($model, 'tenggorokan_lainn')->textInput(['maxlength' => true])->label(false) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

    <!-- 10-15 -->
    <div class="row">
        <div class="col-md-12">
            <h4>
                11. Leher
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>Gerakan Leher</th>
                    <td>
                        <?= $form->field($model, 'leher_gerakan_leher')->radioList(['Normal' => 'Normal', 'Terbatas' => 'Terbatas'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Otot Leher</th>
                    <td>
                        <?= $form->field($model, 'leher_otot_leher')->radioList(['Normal' => 'Normal', 'Spasme / Kontraksi' => 'Spasme / Kontraksi'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Kelenjer Thyroid</th>
                    <td>
                        <?= $form->field($model, 'leher_kelenjar_thyroid')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Pulsasi Carotis</th>
                    <td>
                        <?= $form->field($model, 'leher_pulsasi_carotis')->radioList(['Normal' => 'Normal', 'Bruit' => 'Bruit'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Vena Jugularis</th>
                    <td>
                        <?= $form->field($model, 'leher_tekanan_vena_jugularis')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Trachea</th>
                    <td>
                        <?= $form->field($model, 'leher_trachea')->radioList(['Normal' => 'Normal', 'Deviasi' => 'Deviasi'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Lainnya</th>
                    <td>
                        <?= $form->field($model, 'leher_lainnya')->textInput() ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>
                12. Dada
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>Dada</th>
                    <td> <?= $form->field($model, 'dada')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Bentuk</th>
                    <td>
                        <?= $form->field($model, 'dada_bentuk')->radioList(['Simetris' => 'Simetris', 'Asimetris' => 'Asimetris'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Mamae</th>
                    <td>
                        <?= $form->field($model, 'dada_mamae')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%;">
                        <label class="control-label has-star col-md-2">Tumor</label>
                    </td>
                    <td>
                        <?= $form->field($model, 'dada_tumor_ukuran')->textInput() ?>
                        <?= $form->field($model, 'dada_tumor_letak')->textInput() ?>
                        <?= $form->field($model, 'dada_tumor_konsisten')->textInput() ?>
                    </td>
                </tr>
                <tr>
                    <th>Lainnya</th>
                    <td>
                        <?= $form->field($model, 'dada_lainnya')->textInput(['maxlength' => true,])->label(false) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">

            <h4>13. Paru-Paru dan Jantung</h4>


            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>A. Palpasi</th>
                    <td>
                        <?= $form->field($model, 'paru_jantung_palpasi')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr class="tr-label">
                    <td>Kanan</td>
                    <td>Kiri</td>
                </tr>
                <tr>
                    <td>
                        <?= $form->field($model, 'paru_jantung_perkusi_kanan')->radioList(['Sonor' => 'Sonor', 'Redup' => 'Redup', 'Hipersonor' => 'Hipersonor',]) ?>

                    </td>
                    <td>
                        <?= $form->field($model, 'paru_jantung_perkusi_kiri')->radioList(['Sonor' => 'Sonor', 'Redup' => 'Redup', 'Hipersonor' => 'Hipersonor',]) ?>

                    </td>
                </tr>
                <tr class="tr-label">
                    <td colspan="2"><b>C. Auskultasi</b></td>
                </tr>

                <tr>
                    <td>
                        <?= $form->field($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kanan')->radioList(['Tak Ada' => 'Tak Ada', 'Ronkhi' => 'Ronkhi', 'Wheezing' => 'Wheezing',]) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kiri')->radioList(['Tak Ada' => 'Tak Ada', 'Ronkhi' => 'Ronkhi', 'Wheezing' => 'Wheezing',]) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $form->field($model, 'paru_jantung_auskultasi_bunyi_nafas_kanan')->radioList(['Vesikuler' => 'Vesikuler', 'Brc. Vesikuler' => 'Brc. Vesikuler',]) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'paru_jantung_auskultasi_bunyi_nafas_kiri')->radioList(['Vesikuler' => 'Vesikuler', 'Brc. Vesikuler' => 'Brc. Vesikuler',]) ?>
                    </td>
                </tr>
            </table>

            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr class="tr-label">
                    <td colspan="2"><b>D. Jantung</b></td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <label>Iktus Kordis</label>
                        <?= $form->field($model, 'paru_jantung_perkusi_iktus_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal.........'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <label>Batas Jantung</label>
                        <?= $form->field($model, 'paru_jantung_bunyi_jantung')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal.........'])->label(false) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">

            <h4 class="header-title m-t-0 m-b-30">14. Abdomen</h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>Palpasi</th>
                    <td>
                        <?= $form->field($model, 'abdomen')->radioList(['Supel' => 'Supel', 'Rigit' => 'Rigit'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Perkusi</th>
                    <td>
                        <?= $form->field($model, 'abdomen_perkusi')->radioList(['Timpani' => 'Timpani', 'Redup' => 'Redup'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Auskultai Bising Usus</th>
                    <td>
                        <?= $form->field($model, 'abdomen_auskultasi_bising_usus')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Hati</th>
                    <td>
                        <?= $form->field($model, 'abdomen_hati')->radioList(['Teraba' => 'Teraba', 'Tidak Teraba' => 'Tidak Teraba'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <th>Limpa</th>
                    <td>
                        <?= $form->field($model, 'abdomen_limpa')->radioList(['Tidak Teraba Schuffner' => 'Tidak Teraba Schuffner', 'Teraba Schuffner' => 'Teraba Schuffner'])->label(false) ?>
                    </td>
                </tr>

            </table>

            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Kanan</th>
                        <th>Kiri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ginjal</td>
                        <td><?= $form->field($model, 'abdomen_ginjal_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                        </td>
                        <td><?= $form->field($model, 'abdomen_ginjal_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ballotement</td>
                        <td> <?= $form->field($model, 'abdomen_ballotement_kanan')->radioList(['Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada'])->label(false) ?>
                        </td>
                        <td> <?= $form->field($model, 'abdomen_ballotement_kiri')->radioList(['Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nyeri Costo Vertebrae</td>
                        <td><?= $form->field($model, 'abdomen_nyeri_costo_vertebrae_kanan')->radioList(['Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada'])->label(false) ?>
                        </td>
                        <td> <?= $form->field($model, 'abdomen_nyeri_costo_vertebrae_kiri')->radioList(['Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada'])->label(false) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr>


    <div class="row">
        <div class="col-lg-12">
            <h4>15. Genitourinaria</h4>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h6 class="m-0">
                            <a href="#collapseOne" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                Tidak Dilakukan Pemeriksaan #1
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                            <tr>
                                <th>kandung Kemih</th>
                                <td><?= $form->field($model, 'genitourinaria_kandung_kemih')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Anus/Rektum/Perianal</th>
                                <td>
                                    <?= $form->field($model, 'genitourinaria_anus')->dropDownList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                </td>
                                <td>
                                    <?= $form->field($model, 'hemoroid')->radioList(['Hemoroid' => 'Hemoroid'])->label(false) ?>
                                    <?= $form->field($model, 'hemoroid_lainnya')->textInput(['placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Genitalia Eksternal</th>
                                <td>
                                    <?= $form->field($model, 'genitourinaria_genitalia_eksternal')->dropDownList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                </td>
                                <td>
                                    <?= $form->field($model, 'hydrocele')->textInput(['value' => 'Tidak Normal'])->label(true) ?>
                                    <?= $form->field($model, 'varicocele')->textInput(['value' => 'Tidak Normal'])->label(true) ?>
                                    <?= $form->field($model, 'ulceral')->textInput(['value' => 'Tidak Normal'])->label(true) ?>
                                    <?= $form->field($model, 'gonorchoea')->textInput(['value' => 'Tidak Normal'])->label(true) ?>
                                    <?= $form->field($model, 'genitalia_lainnya')->textInput(['value' => 'Tidak Normal'])->label(true) ?>
                                </td>

                            </tr>
                            <?php if (TRUE) { ?>
                                <tr>
                                    <th>Prostat (Khusus Pria)</th>
                                    <td>
                                        <?= $form->field($model, 'genitourinaria_prostat')->radioList(['Tidak Teraba' => 'Tidak Teraba', 'Teraba' => 'Teraba'])->label(false) ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- disini -->


    <!-- 16-20 -->
    <!-- disini -->

    <div class="row">
        <h4 class="header-title m-t-0 m-b-30">24. Kulit</h4>
        <div class="row">
            <hr>
            <div class="col-lg-12">
                <iframe src="<?= Url::base(true) ?>/body-tato/form?id=<?= $pasien->no_rekam_medik ?>" style="display: block;width: 1200px;height: 720px;border: none;"></iframe>
            </div>
            <hr>
        </div>
        <hr>
    </div>
</div>