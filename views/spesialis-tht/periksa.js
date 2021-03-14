/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-05 20:45:35 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-14 22:34:28
 */

const rataBerubah = _ => {
    const ac_kanan_avg = parseFloat($('#spesialisaudiometri-rata_kanan_ac').val())
    const ac_kiri_avg = parseFloat($('#spesialisaudiometri-rata_kiri_ac').val())
    const bc_kanan_avg = parseFloat($('#spesialisaudiometri-rata_kanan_bc').val())
    const bc_kiri_avg = parseFloat($('#spesialisaudiometri-rata_kiri_bc').val())

    if (ac_kanan_avg >= 0 & ac_kanan_avg <= 25)
        $('#SpesialisAudiometri_kesimpulan_kanan_0').prop('checked', true)
    else
        $('#SpesialisAudiometri_kesimpulan_kanan_1').prop('checked', true)

    if (ac_kiri_avg >= 0 & ac_kiri_avg <= 25)
        $('#SpesialisAudiometri_kesimpulan_kiri_0').prop('checked', true)
    else
        $('#SpesialisAudiometri_kesimpulan_kiri_1').prop('checked', true)

    kesimpulanArray = {
        0: 'Tidak ada kesulitan mendengar, dapat mendengar bisikan',
        1: 'Bisa mendengar dan meniru kata-kata dengan suara normal pada jarak satu meter',
        2: 'Bisa mendengar suara keras pada jarak satu meter',
        3: 'Bisa mendengar suara yang diteriakkan dekat telinga',
        4: 'Tidak mendengar suara yang diteriakkan dekat telinga',
    }

    let kesimpulan = ''
    let kesimpulan_kanan, kesimpulan_kiri

    if (ac_kanan_avg >= 0 & ac_kanan_avg < 26)
        kesimpulan_kanan = 0
    else if (ac_kanan_avg >= 26 & ac_kanan_avg < 41)
        kesimpulan_kanan = 1
    else if (ac_kanan_avg >= 41 & ac_kanan_avg < 61)
        kesimpulan_kanan = 2
    else if (ac_kanan_avg >= 61 & ac_kanan_avg < 81)
        kesimpulan_kanan = 3
    else if (ac_kanan_avg >= 81)
        kesimpulan_kanan = 4

    if (ac_kiri_avg >= 0 & ac_kiri_avg < 26)
        kesimpulan_kiri = 0
    else if (ac_kiri_avg >= 26 & ac_kiri_avg < 41)
        kesimpulan_kiri = 1
    else if (ac_kiri_avg >= 41 & ac_kiri_avg < 61)
        kesimpulan_kiri = 2
    else if (ac_kiri_avg >= 61 & ac_kiri_avg < 81)
        kesimpulan_kiri = 3
    else if (ac_kiri_avg >= 81)
        kesimpulan_kiri = 4

    if (kesimpulan_kanan == kesimpulan_kiri)
        kesimpulan = 'Kanan & Kiri: ' + kesimpulanArray[kesimpulan_kanan]
    else
        kesimpulan += 'Kanan: ' + kesimpulanArray[kesimpulan_kanan] + '\nKiri: ' + kesimpulanArray[kesimpulan_kiri]

    $('#spesialisaudiometri-kesimpulan').val(kesimpulan)
}

$(document).ready(function () {

    // angka di tabel audiometri terselect saat onFocus 
    $('.tabel-audiometri input').on('focus', function (e) {
        $(this).select()
    })

    // radio & input berhubungan dengan baik 
    $('#spesialistht-hd_septum_nasi_lainnya').on('focus', function (e) {
        $("#hd_septum_nasi_1").prop("checked", true)
    })
    $('#spesialistht-hd_konka_nasal_lainnya').on('focus', function (e) {
        $("#hd_konka_nasal_1").prop("checked", true)
    })
    $('#spesialistht-hd_nyeri_ketok_sinus_maksilar_lainnya').on('focus', function (e) {
        $("#hd_nyeri_ketok_sinus_maksilar_1").prop("checked", true)
    })

    $('#spesialistht-tl_test_garpu_tala_periksa').on('change', function (e) {
        let tl_test_garpu_tala_periksa = $('#SpesialisTht_tl_test_garpu_tala_periksa_0').prop('checked')
        console.log(tl_test_garpu_tala_periksa);
        if (tl_test_garpu_tala_periksa) {
            $('.tr_test_garpu_tala').show('slow')
            $('.tr_test_garpu_tala_td_no').attr('rowspan', '6')
        } else {
            $('.tr_test_garpu_tala').hide('slow')
            $('.tr_test_garpu_tala_td_no').attr('rowspan', '1')
        }
    });
    $('#spesialistht-tl_test_berbisik_periksa').on('change', function (e) {
        let tl_test_berbisik_periksa = $('#SpesialisTht_tl_test_berbisik_periksa_0').prop('checked')
        console.log(tl_test_berbisik_periksa);
        if (tl_test_berbisik_periksa)
            $('.tr_test_berbisik').show('slow')
        else {
            $('.tr_test_berbisik').hide('slow')
        }
    });
    $('#spesialistht-tl_audiometri_periksa').on('change', function (e) {
        let tl_audiometri_periksa = $('#SpesialisTht_tl_audiometri_periksa_0').prop('checked')
        console.log(tl_audiometri_periksa);
        if (tl_audiometri_periksa)
            $('.tr_audiometri_periksa').show('slow')
        else {
            $('.tr_audiometri_periksa').hide('slow')
        }
    });

    $('#spesialistht-kesan').on('change', function (e) {
        let kesan = $('#SpesialisTht_kesan_0').prop('checked')
        console.log(kesan);
        if (kesan)
            $('.div-penata').hide('slow')
        else {
            $('.div-penata').show('slow')
            $("#form-spesialis-tht").submit()
        }
    });

    $("#form-spesialis-tht").on('submit', function (e) {
        e.preventDefault()
        e.stopImmediatePropagation()
        var kepalaform = $("#form-spesialis-tht").serialize()
        $.post(baseUrl + 'spesialis-tht/periksa?id=' + $('#spesialistht-cari_pasien').val(), kepalaform, function (r) {
            console.log(r)
            if (r.s) {
                $.pjax.reload({
                    container: '#btn-cetak',
                    async: false
                })
                $.pjax.reload({
                    container: '#btn-cetak-penata',
                    async: false
                })
                toastr["success"]("Mantap, Sukses menyimpan boooyyyy...")
            } else {
                toastr["warning"]("Huuft, Gagal menyimpan boooyyyy...<br>" + JSON.stringify(r.e))
            }
        }, 'JSON')
        return false
    })

    $("#form-spesialis-tht-penata").on('submit', function (e) {
        e.preventDefault()
        e.stopImmediatePropagation()
        var kepalaform = $("#form-spesialis-tht-penata").serialize()
        $.post(baseUrl + 'spesialis-tht/simpan-penata?id=' + $('#spesialistht-id_spesialis_tht').val(), kepalaform, function (r) {
            console.log(r)
            if (r.s) {
                $.pjax.reload({
                    container: '#btn-cetak-penata',
                    async: false
                })
                $.pjax.reload({
                    container: '#tbl-penata',
                    async: false
                })
                toastr["success"]("Mantap, Sukses menyimpan boooyyyy...")
            } else {
                toastr["warning"]("Huuft, Gagal menyimpan boooyyyy...<br>" + JSON.stringify(r.e))
            }
        }, 'JSON')
        return false
    })

    $('.tr-ac-bc input').on('input change', function (e) {
        let ac_kanan = {};
        let ac_kiri = {};
        let bc_kanan = {};
        let bc_kiri = {};
        let ac_125_kanan = parseFloat($('#spesialisaudiometri-ac_125_kanan').val());
        let ac_250_kanan = parseFloat($('#spesialisaudiometri-ac_250_kanan').val());
        let ac_500_kanan = parseFloat($('#spesialisaudiometri-ac_500_kanan').val());
        let ac_1000_kanan = parseFloat($('#spesialisaudiometri-ac_1000_kanan').val());
        let ac_2000_kanan = parseFloat($('#spesialisaudiometri-ac_2000_kanan').val());
        let ac_3000_kanan = parseFloat($('#spesialisaudiometri-ac_3000_kanan').val());
        let ac_4000_kanan = parseFloat($('#spesialisaudiometri-ac_4000_kanan').val());
        let ac_6000_kanan = parseFloat($('#spesialisaudiometri-ac_6000_kanan').val());
        let ac_8000_kanan = parseFloat($('#spesialisaudiometri-ac_8000_kanan').val());
        let ac_125_kiri = parseFloat($('#spesialisaudiometri-ac_125_kiri').val());
        let ac_250_kiri = parseFloat($('#spesialisaudiometri-ac_250_kiri').val());
        let ac_500_kiri = parseFloat($('#spesialisaudiometri-ac_500_kiri').val());
        let ac_1000_kiri = parseFloat($('#spesialisaudiometri-ac_1000_kiri').val());
        let ac_2000_kiri = parseFloat($('#spesialisaudiometri-ac_2000_kiri').val());
        let ac_3000_kiri = parseFloat($('#spesialisaudiometri-ac_3000_kiri').val());
        let ac_4000_kiri = parseFloat($('#spesialisaudiometri-ac_4000_kiri').val());
        let ac_6000_kiri = parseFloat($('#spesialisaudiometri-ac_6000_kiri').val());
        let ac_8000_kiri = parseFloat($('#spesialisaudiometri-ac_8000_kiri').val());
        let bc_125_kanan = parseFloat($('#spesialisaudiometri-bc_125_kanan').val());
        let bc_250_kanan = parseFloat($('#spesialisaudiometri-bc_250_kanan').val());
        let bc_500_kanan = parseFloat($('#spesialisaudiometri-bc_500_kanan').val());
        let bc_1000_kanan = parseFloat($('#spesialisaudiometri-bc_1000_kanan').val());
        let bc_2000_kanan = parseFloat($('#spesialisaudiometri-bc_2000_kanan').val());
        let bc_3000_kanan = parseFloat($('#spesialisaudiometri-bc_3000_kanan').val());
        let bc_4000_kanan = parseFloat($('#spesialisaudiometri-bc_4000_kanan').val());
        let bc_6000_kanan = parseFloat($('#spesialisaudiometri-bc_6000_kanan').val());
        let bc_8000_kanan = parseFloat($('#spesialisaudiometri-bc_8000_kanan').val());
        let bc_125_kiri = parseFloat($('#spesialisaudiometri-bc_125_kiri').val());
        let bc_250_kiri = parseFloat($('#spesialisaudiometri-bc_250_kiri').val());
        let bc_500_kiri = parseFloat($('#spesialisaudiometri-bc_500_kiri').val());
        let bc_1000_kiri = parseFloat($('#spesialisaudiometri-bc_1000_kiri').val());
        let bc_2000_kiri = parseFloat($('#spesialisaudiometri-bc_2000_kiri').val());
        let bc_3000_kiri = parseFloat($('#spesialisaudiometri-bc_3000_kiri').val());
        let bc_4000_kiri = parseFloat($('#spesialisaudiometri-bc_4000_kiri').val());
        let bc_6000_kiri = parseFloat($('#spesialisaudiometri-bc_6000_kiri').val());
        let bc_8000_kiri = parseFloat($('#spesialisaudiometri-bc_8000_kiri').val());

        if (ac_125_kanan > 0) ac_kanan["ac_125_kanan"] = ac_125_kanan;
        if (ac_250_kanan > 0) ac_kanan["ac_250_kanan"] = ac_250_kanan;
        if (ac_500_kanan > 0) ac_kanan["ac_500_kanan"] = ac_500_kanan;
        if (ac_1000_kanan > 0) ac_kanan["ac_1000_kanan"] = ac_1000_kanan;
        if (ac_2000_kanan > 0) ac_kanan["ac_2000_kanan"] = ac_2000_kanan;
        if (ac_3000_kanan > 0) ac_kanan["ac_3000_kanan"] = ac_3000_kanan;
        if (ac_4000_kanan > 0) ac_kanan["ac_4000_kanan"] = ac_4000_kanan;
        if (ac_6000_kanan > 0) ac_kanan["ac_6000_kanan"] = ac_6000_kanan;
        if (ac_8000_kanan > 0) ac_kanan["ac_8000_kanan"] = ac_8000_kanan;
        if (ac_125_kiri > 0) ac_kiri["ac_125_kiri"] = ac_125_kiri;
        if (ac_250_kiri > 0) ac_kiri["ac_250_kiri"] = ac_250_kiri;
        if (ac_500_kiri > 0) ac_kiri["ac_500_kiri"] = ac_500_kiri;
        if (ac_1000_kiri > 0) ac_kiri["ac_1000_kiri"] = ac_1000_kiri;
        if (ac_2000_kiri > 0) ac_kiri["ac_2000_kiri"] = ac_2000_kiri;
        if (ac_3000_kiri > 0) ac_kiri["ac_3000_kiri"] = ac_3000_kiri;
        if (ac_4000_kiri > 0) ac_kiri["ac_4000_kiri"] = ac_4000_kiri;
        if (ac_6000_kiri > 0) ac_kiri["ac_6000_kiri"] = ac_6000_kiri;
        if (ac_8000_kiri > 0) ac_kiri["ac_8000_kiri"] = ac_8000_kiri;
        if (bc_125_kanan > 0) bc_kanan["bc_125_kanan"] = bc_125_kanan;
        if (bc_250_kanan > 0) bc_kanan["bc_250_kanan"] = bc_250_kanan;
        if (bc_500_kanan > 0) bc_kanan["bc_500_kanan"] = bc_500_kanan;
        if (bc_1000_kanan > 0) bc_kanan["bc_1000_kanan"] = bc_1000_kanan;
        if (bc_2000_kanan > 0) bc_kanan["bc_2000_kanan"] = bc_2000_kanan;
        if (bc_3000_kanan > 0) bc_kanan["bc_3000_kanan"] = bc_3000_kanan;
        if (bc_4000_kanan > 0) bc_kanan["bc_4000_kanan"] = bc_4000_kanan;
        if (bc_6000_kanan > 0) bc_kanan["bc_6000_kanan"] = bc_6000_kanan;
        if (bc_8000_kanan > 0) bc_kanan["bc_8000_kanan"] = bc_8000_kanan;
        if (bc_125_kiri > 0) bc_kiri["bc_125_kiri"] = bc_125_kiri;
        if (bc_250_kiri > 0) bc_kiri["bc_250_kiri"] = bc_250_kiri;
        if (bc_500_kiri > 0) bc_kiri["bc_500_kiri"] = bc_500_kiri;
        if (bc_1000_kiri > 0) bc_kiri["bc_1000_kiri"] = bc_1000_kiri;
        if (bc_2000_kiri > 0) bc_kiri["bc_2000_kiri"] = bc_2000_kiri;
        if (bc_3000_kiri > 0) bc_kiri["bc_3000_kiri"] = bc_3000_kiri;
        if (bc_4000_kiri > 0) bc_kiri["bc_4000_kiri"] = bc_4000_kiri;
        if (bc_6000_kiri > 0) bc_kiri["bc_6000_kiri"] = bc_6000_kiri;
        if (bc_8000_kiri > 0) bc_kiri["bc_8000_kiri"] = bc_8000_kiri;

        const ac_kanan_avg = Object.keys(ac_kanan).length == 0 ? 0 : parseFloat((Object.values(ac_kanan).reduce((t, n) => t + n) / Object.keys(ac_kanan).length).toFixed(2))
        const ac_kiri_avg = Object.keys(ac_kiri).length == 0 ? 0 : parseFloat((Object.values(ac_kiri).reduce((t, n) => t + n) / Object.keys(ac_kiri).length).toFixed(2))
        const bc_kanan_avg = Object.keys(bc_kanan).length == 0 ? 0 : parseFloat((Object.values(bc_kanan).reduce((t, n) => t + n) / Object.keys(bc_kanan).length).toFixed(2))
        const bc_kiri_avg = Object.keys(bc_kiri).length == 0 ? 0 : parseFloat((Object.values(bc_kiri).reduce((t, n) => t + n) / Object.keys(bc_kiri).length).toFixed(2))

        $('#spesialisaudiometri-rata_kanan_ac').val(ac_kanan_avg).trigger('change')
        $('#spesialisaudiometri-rata_kiri_ac').val(ac_kiri_avg).trigger('change')
        $('#spesialisaudiometri-rata_kanan_bc').val(bc_kanan_avg).trigger('change')
        $('#spesialisaudiometri-rata_kiri_bc').val(bc_kiri_avg).trigger('change')
    })

    $('#spesialisaudiometri-rata_kanan_ac, #spesialisaudiometri-rata_kiri_ac, #spesialisaudiometri-rata_kanan_bc, #spesialisaudiometri-rata_kiri_bc').on('input change', function (e) {
        rataBerubah()
    })
})