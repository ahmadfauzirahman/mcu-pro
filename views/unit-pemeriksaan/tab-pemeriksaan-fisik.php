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

    <!-- 11-15 -->
    <div class="row">
        <div class="col-md-12">
            <h4>
                11. Leher
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Gerakan Leher</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_gerakan_leher', ['id' => 'mpemeriksaanfisik_leher_gerakan_leher_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_gerakan_leher == 'Terbatas') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_gerakan_leher_1" name="MPemeriksaanFisik[leher_gerakan_leher]" value="Terbatas">
                                Terbatas
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Otot Leher</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_otot_leher', ['id' => 'mpemeriksaanfisik_leher_otot_leher_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_otot_leher == 'Spasme / Kontraksi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_otot_leher_1" name="MPemeriksaanFisik[leher_otot_leher]" value="Spasme / Kontraksi">
                                Spasme / Kontraksi
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Kelenjer Thyroid</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_kelenjar_thyroid', ['id' => 'mpemeriksaanfisik_leher_kelenjar_thyroid_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_kelenjar_thyroid == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_kelenjar_thyroid_1" name="MPemeriksaanFisik[leher_kelenjar_thyroid]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">4</td>
                        <td style="width: 25%;">Pulsasi Carotis</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_pulsasi_carotis', ['id' => 'mpemeriksaanfisik_leher_pulsasi_carotis_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_pulsasi_carotis == 'Bruit') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_pulsasi_carotis_1" name="MPemeriksaanFisik[leher_pulsasi_carotis]" value="Bruit">
                                Bruit
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">5</td>
                        <td style="width: 25%;">Vena Jugularis</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_tekanan_vena_jugularis', ['id' => 'mpemeriksaanfisik_leher_tekanan_vena_jugularis_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_tekanan_vena_jugularis == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_tekanan_vena_jugularis_1" name="MPemeriksaanFisik[leher_tekanan_vena_jugularis]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">6</td>
                        <td style="width: 25%;">Trachea</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'leher_trachea', ['id' => 'mpemeriksaanfisik_leher_trachea_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->leher_trachea == 'Deviasi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_trachea_1" name="MPemeriksaanFisik[leher_trachea]" value="Deviasi">
                                Deviasi
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">7</td>
                        <td style="width: 25%;">Lainnya</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td colspan="4" style="width: 35%;">
                            <?= $form->field($model, 'leher_lainnya')->textInput(['maxlength' => true])->label(false) ?>
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
                12. Dada
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Dada</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'dada', ['id' => 'mpemeriksaanfisik_dada_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->dada == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_1" name="MPemeriksaanFisik[dada]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Bentuk</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'dada_bentuk', ['id' => 'mpemeriksaanfisik_dada_bentuk_0', 'value' => 'Simetris', 'label' => 'Simetris']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->dada_bentuk == 'Asimetris') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_bentuk_1" name="MPemeriksaanFisik[dada_bentuk]" value="Asimetris">
                                Asimetris
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Mamae</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'dada_mamae', ['id' => 'mpemeriksaanfisik_dada_mamae_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->dada_mamae == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_mamae_1" name="MPemeriksaanFisik[dada_mamae]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center" style="width: 40px;">4</td>
                        <td rowspan="3" style="width: 25%;">Tumor</td>
                        <td rowspan="3" class="text-center" style="width: 20px;">:</td>
                        <td>
                            Ukuran
                        </td>
                        <td colspan="3" style="width: 35%;">
                            <?= $form->field($model, 'dada_tumor_ukuran')->textInput(['maxlength' => true])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Letak
                        </td>
                        <td colspan="3" style="width: 35%;">
                            <?= $form->field($model, 'dada_tumor_letak')->textInput(['maxlength' => true])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Konsisten
                        </td>
                        <td colspan="3" style="width: 35%;">
                            <?= $form->field($model, 'dada_tumor_konsisten')->textInput(['maxlength' => true])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">5</td>
                        <td style="width: 25%;">Lainnya</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td colspan="4" style="width: 35%;">
                            <?= $form->field($model, 'dada_lainnya')->textInput(['maxlength' => true])->label(false) ?>
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
                13. Paru-Paru dan Jantung
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">A</td>
                        <td style="width: 25%;">Palpasi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_palpasi', ['id' => 'mpemeriksaanfisik_paru_jantung_palpasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_palpasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_palpasi_1" name="MPemeriksaanFisik[paru_jantung_palpasi]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <th colspan="3"></th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-center" style="width: 40px;">B</td>
                        <td rowspan="2">Palpasi</td>
                        <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_perkusi_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_kanan_0', 'value' => 'Sonor', 'label' => 'Sonor']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_perkusi_kanan == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kanan_1" name="MPemeriksaanFisik[paru_jantung_perkusi_kanan]" value="Redup">
                                Redup
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_perkusi_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_kiri_0', 'value' => 'Sonor', 'label' => 'Sonor']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_perkusi_kiri == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kiri_1" name="MPemeriksaanFisik[paru_jantung_perkusi_kiri]" value="Redup">
                                Redup
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_perkusi_kanan == 'Hipersonor') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kanan_2" name="MPemeriksaanFisik[paru_jantung_perkusi_kanan]" value="Hipersonor">
                                Hipersonor
                            </label>
                        </td>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_perkusi_kiri == 'Hipersonor') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kiri_2" name="MPemeriksaanFisik[paru_jantung_perkusi_kiri]" value="Hipersonor">
                                Hipersonor
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center" style="width: 40px;">C</td>
                        <td rowspan="2">Auskultasi Bunyi Nafas Tambah</td>
                        <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_0', 'value' => 'Tak Ada', 'label' => 'Tak Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kanan == 'Ronkhi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kanan]" value="Ronkhi">
                                Ronkhi
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_0', 'value' => 'Tak Ada', 'label' => 'Tak Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kiri == 'Ronkhi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kiri]" value="Ronkhi">
                                Ronkhi
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kanan == 'Wheezing') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_2" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kanan]" value="Wheezing">
                                Wheezing
                            </label>
                        </td>
                        <td>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kiri == 'Wheezing') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_2" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kiri]" value="Wheezing">
                                Wheezing
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Auskultasi Bunyi Nafas </td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kanan_0', 'value' => 'Vesikuler', 'label' => 'Vesikuler']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_kanan == 'Brc. Vesikuler') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kanan_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_kanan]" value="Brc. Vesikuler">
                                Brc. Vesikuler
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kiri_0', 'value' => 'Vesikuler', 'label' => 'Vesikuler']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_kiri == 'Brc. Vesikuler') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kiri_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_kiri]" value="Brc. Vesikuler">
                                Brc. Vesikuler
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center" style="width: 40px;">D</td>
                        <td style="width: 25%;">Jantung</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td colspan="4" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Iktus Kordis</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_perkusi_iktus_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_iktus_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_perkusi_iktus_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_iktus_kiri_1" name="MPemeriksaanFisik[paru_jantung_perkusi_iktus_kiri]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td style="width: 25%;">Batas Jantung</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'paru_jantung_bunyi_jantung', ['id' => 'mpemeriksaanfisik_paru_jantung_bunyi_jantung_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->paru_jantung_bunyi_jantung == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_bunyi_jantung_1" name="MPemeriksaanFisik[paru_jantung_bunyi_jantung]" value="Tidak Normal">
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
                14. Abdomen
            </h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">1</td>
                        <td style="width: 25%;">Palpasi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen', ['id' => 'mpemeriksaanfisik_abdomen_0', 'value' => 'Supel', 'label' => 'Supel']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen == 'Rigit') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_1" name="MPemeriksaanFisik[abdomen]" value="Rigit">
                                Rigit
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">2</td>
                        <td style="width: 25%;">Perkusi</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_perkusi', ['id' => 'mpemeriksaanfisik_abdomen_perkusi_0', 'value' => 'Timpani', 'label' => 'Timpani']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_perkusi == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_perkusi_1" name="MPemeriksaanFisik[abdomen_perkusi]" value="Redup">
                                Redup
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">3</td>
                        <td style="width: 25%;">Auskultai Bising Usus</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_auskultasi_bising_usus', ['id' => 'mpemeriksaanfisik_abdomen_auskultasi_bising_usus_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_auskultasi_bising_usus == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_auskultasi_bising_usus_1" name="MPemeriksaanFisik[abdomen_auskultasi_bising_usus]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">4</td>
                        <td style="width: 25%;">Hati</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_hati', ['id' => 'mpemeriksaanfisik_abdomen_hati_0', 'value' => 'Teraba', 'label' => 'Teraba']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_hati == 'Tidak Teraba') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_hati_1" name="MPemeriksaanFisik[abdomen_hati]" value="Tidak Teraba">
                                Tidak Teraba
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">5</td>
                        <td style="width: 25%;">Limpa</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_limpa', ['id' => 'mpemeriksaanfisik_abdomen_limpa_0', 'value' => 'Tidak Teraba Schuffner', 'label' => 'Tidak Teraba Schuffner']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_limpa == 'Teraba Schuffner') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_limpa_1" name="MPemeriksaanFisik[abdomen_limpa]" value="Teraba Schuffner">
                                Teraba Schuffner
                            </label>
                        </td>
                        <td colspan="2" style="width: 35%;"></td>
                    </tr>
                    <tr>
                        <th colspan="3"></th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                        <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">6</td>
                        <td style="width: 25%;">Ginjal</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_ginjal_kanan', ['id' => 'mpemeriksaanfisik_abdomen_ginjal_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_ginjal_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ginjal_kanan_1" name="MPemeriksaanFisik[abdomen_ginjal_kanan]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_ginjal_kiri', ['id' => 'mpemeriksaanfisik_abdomen_ginjal_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_ginjal_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ginjal_kiri_1" name="MPemeriksaanFisik[abdomen_ginjal_kiri]" value="Tidak Normal">
                                Tidak Normal
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">7</td>
                        <td style="width: 25%;">Ballotement</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_ballotement_kanan', ['id' => 'mpemeriksaanfisik_abdomen_ballotement_kanan_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_ballotement_kanan == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ballotement_kanan_1" name="MPemeriksaanFisik[abdomen_ballotement_kanan]" value="Tidak Ada">
                                Tidak Ada
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_ballotement_kiri', ['id' => 'mpemeriksaanfisik_abdomen_ballotement_kiri_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_ballotement_kiri == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ballotement_kiri_1" name="MPemeriksaanFisik[abdomen_ballotement_kiri]" value="Tidak Ada">
                                Tidak Ada
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">8</td>
                        <td style="width: 25%;">Nyeri Costo Vertebrae</td>
                        <td class="text-center" style="width: 20px;">:</td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_nyeri_costo_vertebrae_kanan', ['id' => 'mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kanan_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_nyeri_costo_vertebrae_kanan == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kanan_1" name="MPemeriksaanFisik[abdomen_nyeri_costo_vertebrae_kanan]" value="Tidak Ada">
                                Tidak Ada
                            </label>
                        </td>
                        <td>
                            <?= Html::activeRadio($model, 'abdomen_nyeri_costo_vertebrae_kiri', ['id' => 'mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kiri_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                        </td>
                        <td>
                            <label>
                                <input <?= ($model->abdomen_nyeri_costo_vertebrae_kiri == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kiri_1" name="MPemeriksaanFisik[abdomen_nyeri_costo_vertebrae_kiri]" value="Tidak Ada">
                                Tidak Ada
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
            <div id="accordion">
                <div class="card mb-1 shadow-none">
                    <div class="card-header bg-warning" id="headingOne">
                        <h6 class="m-0">
                            <a href="#collapseOne" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                <h4>
                                    15. Genitourinaria
                                </h4>
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

                        <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                            <tbody>
                                <tr>
                                    <td class="text-center" style="width: 40px;">1</td>
                                    <td style="width: 25%;">Kandung Kemih</td>
                                    <td class="text-center" style="width: 20px;">:</td>
                                    <td>
                                        <?= Html::activeRadio($model, 'genitourinaria_kandung_kemih', ['id' => 'mpemeriksaanfisik_genitourinaria_kandung_kemih_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                    </td>
                                    <td>
                                        <label>
                                            <input <?= ($model->genitourinaria_kandung_kemih == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_genitourinaria_kandung_kemih_1" name="MPemeriksaanFisik[genitourinaria_kandung_kemih]" value="Tidak Normal">
                                            Tidak Normal
                                        </label>
                                    </td>
                                    <td colspan="2" style="width: 35%;"></td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 40px;">2</td>
                                    <td style="width: 25%;">Anus/Rektum/Perianal</td>
                                    <td class="text-center" style="width: 20px;">:</td>
                                    <td>
                                        <?= Html::activeRadio($model, 'genitourinaria_anus', ['id' => 'mpemeriksaanfisik_genitourinaria_anus_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                    </td>
                                    <td>
                                        <label>
                                            <input <?= ($model->genitourinaria_anus == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_genitourinaria_anus_1" name="MPemeriksaanFisik[genitourinaria_anus]" value="Tidak Normal">
                                            Tidak Normal
                                        </label>
                                    </td>
                                    <td>
                                        <?= Html::activeRadio($model, 'hemoroid', ['id' => 'mpemeriksaanfisik_hemoroid_0', 'value' => 'Hemoroid', 'label' => 'Hemoroid']) ?>
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'hemoroid_lainnya')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="5" class="text-center" style="width: 40px;">3</td>
                                    <td rowspan="5" style="width: 25%;">Genitalia Eksternal</td>
                                    <td rowspan="5" class="text-center" style="width: 20px;">:</td>
                                    <td rowspan="5">
                                        <?= Html::activeRadio($model, 'genitourinaria_genitalia_eksternal', ['id' => 'mpemeriksaanfisik_genitourinaria_genitalia_eksternal_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                    </td>
                                    <td rowspan="5">
                                        <label>
                                            <input <?= ($model->genitourinaria_genitalia_eksternal == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_genitourinaria_genitalia_eksternal_1" name="MPemeriksaanFisik[genitourinaria_genitalia_eksternal]" value="Tidak Normal">
                                            Tidak Normal
                                        </label>
                                    </td>
                                    <td>
                                        Hydrocele
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'hydrocele')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Varicocele
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'varicocele')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ulceral
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'ulceral')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gonorchoea
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'gonorchoea')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Genitalia Lainnya
                                    </td>
                                    <td>
                                        <?= $form->field($model, 'genitalia_lainnya')->textInput(['maxlength' => true])->label(false) ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <h4>16. Vertebra</h4>
            <div class="row">
                <div class="col-lg-12">
                    <?= $form->field($model, 'vertebra')->radioList(['Normal' => 'Normal', 'Lordosis' => 'Lordosis', 'Skoliosis' => 'Skoliosis', 'Kiposis' => 'Kiposis',]) ?>
                    <?= $form->field($model, 'vertebra_lainnya')->textInput(['maxlength' => true,]) ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4>17. Tulang / Sendi (Ekstremitas Atas)</h4>

            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>Tulang Bawah Simetris</th>
                    <td>
                        <?= $form->field($model, 'tulang_atas_simetris')->radioList(['Ya' => "Ya", "Tidak Ada" => "Tidak Ada"])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>

                        <?= $form->field($model, 'tulang_atas_gerakan_abduksi_neer_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_abduksi_hawkin_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_drop_arm_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_yergason_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_speed_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_tulang_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_sensibilitas_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_atas_oedem_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_atas_varises_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_pin_prick_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_phallent_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_tinnel_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_finskelstein_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_vaskularisasi_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_atas_kelaianan_kukujari_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'tulang_atas_gerakan_abduksi_neer_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_abduksi_hawkin_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_drop_arm_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_yergason_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_gerakan_speed_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"]) ?>
                        <?= $form->field($model, 'tulang_atas_tulang_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_sensibilitas_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_atas_oedem_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_atas_varises_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_pin_prick_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_phallent_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_tinnel_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_kekuatan_otot_finskelstein_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'tulang_atas_vaskularisasi_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_atas_kelaianan_kukujari_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <!-- 16-20 -->
    <div class="row">
        <div class="col-lg-12">
            <h4>18. Tulang / Sendi (Ektremitas Bawah)</h4>

            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <th>
                        Tulang Bawah Simetris
                    </th>
                    <td>
                        <?= $form->field($model, 'tulang_bawah_simetris')->radioList(['Ya' => "Ya", "Tidak Ada" => "Tidak Ada"])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>

                        <?= $form->field($model, 'tulang_bawah_laseque_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_kernique_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_patrick_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_contrapatrick_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_nyeri_tekanan_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_bawah_kekuatan_otot_kanan')->radioList(['Tidak Normal' => 'Tidak Normal', 'Normal' => 'Normal']) ?>
                        <?= $form->field($model, 'tulang_bawah_sensibilitas_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_bawah_oedema_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_bawah_vaskularisasi_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_bawah_kelainan_kuku_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'tulang_bawah_laseque_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_kernique_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_patrick_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_contrapatrick_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"]) ?>
                        <?= $form->field($model, 'tulang_bawah_nyeri_tekanan_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_bawah_kekuatan_otot_kiri')->radioList(['Tidak Normal' => 'Tidak Normal', 'Normal' => 'Normal']) ?>
                        <?= $form->field($model, 'tulang_bawah_sensibilitas_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_bawah_oedema_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                        <?= $form->field($model, 'tulang_bawah_vaskularisasi_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik']) ?>
                        <?= $form->field($model, 'tulang_bawah_kelainan_kuku_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4>19. Otot Motorik</h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <td>
                        <?= $form->field($model, 'otot_motorik_trofi_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'otot_motorik_tonus_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'otot_motorik_gerakan_abnormal_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'otot_motorik_trofi_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'otot_motorik_tonus_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'otot_motorik_gerakan_abnormal_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada']) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4>20. Fungsi Sensorik dan Autonom</h4>
            <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                <tr>
                    <td>
                        <?= $form->field($model, 'fungsi_sensorik_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'fungsi_autonom_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                    </td>
                    <td>
                        <?= $form->field($model, 'fungsi_sensorik_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                        <?= $form->field($model, 'fungsi_autonom_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal']) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
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