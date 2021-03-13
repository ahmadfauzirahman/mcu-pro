/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-05 20:45:35 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2020-10-11 12:51:45
 */


$(document).ready(function () {

    $('#SpesialisGigi_oklusi_3_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_oklusi_3_teks').val()
        $('#SpesialisGigi_oklusi_3').val(teks)
        $('#SpesialisGigi_oklusi_3').prop('checked', true)
        // console.log(teks);
    });
    $('#SpesialisGigi_torus_palatinus_5_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_torus_palatinus_5_teks').val()
        $('#SpesialisGigi_torus_palatinus_5').val(teks)
        $('#SpesialisGigi_torus_palatinus_5').prop('checked', true)
    });
    $('#SpesialisGigi_torus_mandibularis_4_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_torus_mandibularis_4_teks').val()
        $('#SpesialisGigi_torus_mandibularis_4').val(teks)
        $('#SpesialisGigi_torus_mandibularis_4').prop('checked', true)
    });
    $('#SpesialisGigi_palatum_3_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_palatum_3_teks').val()
        $('#SpesialisGigi_palatum_3').val(teks)
        $('#SpesialisGigi_palatum_3').prop('checked', true)
    });
    $('#SpesialisGigi_supernumerary_teeth_2_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_supernumerary_teeth_2_teks').val()
        $('#SpesialisGigi_supernumerary_teeth_2').val(teks)
        $('#SpesialisGigi_supernumerary_teeth_2').prop('checked', true)
    });
    $('#SpesialisGigi_diastema_2_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_diastema_2_teks').val()
        $('#SpesialisGigi_diastema_2').val(teks)
        $('#SpesialisGigi_diastema_2').prop('checked', true)
    });
    $('#SpesialisGigi_spacing_2_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_spacing_2_teks').val()
        $('#SpesialisGigi_spacing_2').val(teks)
        $('#SpesialisGigi_spacing_2').prop('checked', true)
    });
    $('#SpesialisGigi_oral_hygiene_3_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_oral_hygiene_3_teks').val()
        $('#SpesialisGigi_oral_hygiene_3').val(teks)
        $('#SpesialisGigi_oral_hygiene_3').prop('checked', true)
    });
    $('#SpesialisGigi_gingiva_periodontal_3_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_gingiva_periodontal_3_teks').val()
        $('#SpesialisGigi_gingiva_periodontal_3').val(teks)
        $('#SpesialisGigi_gingiva_periodontal_3').prop('checked', true)
    });
    $('#SpesialisGigi_oral_mucosa_2_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_oral_mucosa_2_teks').val()
        $('#SpesialisGigi_oral_mucosa_2').val(teks)
        $('#SpesialisGigi_oral_mucosa_2').prop('checked', true)
    });
    $('#SpesialisGigi_tongue_2_teks').on('input change focus', function (e) {
        let teks = $('#SpesialisGigi_tongue_2_teks').val()
        $('#SpesialisGigi_tongue_2').val(teks)
        $('#SpesialisGigi_tongue_2').prop('checked', true)
    });

    $('#spesialisgigi-kesan').on('change', function (e) {
        let kesan = $('#SpesialisGigi_kesan_0').prop('checked')
        console.log(kesan);
        if (kesan)
            $('.div-penata').hide('slow')
        else {
            $('.div-penata').show('slow')
            $("#form-spesialis-gigi").submit()
        }
    });

    $("#form-spesialis-gigi").on('submit', function (e) {
        e.preventDefault()
        e.stopImmediatePropagation()
        var kepalaform = $("#form-spesialis-gigi").serialize()
        // $.post(baseUrl + 'spesialis-gigi/periksa?no_rm=' + $('#spesialisgigi-no_rekam_medik').val(), kepalaform, function (r) {
        $.post(baseUrl + 'spesialis-gigi/periksa?id=' + $('#spesialisgigi-cari_pasien').val(), kepalaform, function (r) {
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

    $("#form-spesialis-gigi-penata").on('submit', function (e) {
        e.preventDefault()
        e.stopImmediatePropagation()
        var kepalaform = $("#form-spesialis-gigi-penata").serialize()
        $.post(baseUrl + 'spesialis-gigi/simpan-penata?id=' + $('#spesialisgigi-id_spesialis_gigi').val(), kepalaform, function (r) {
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

    $("#spesialisgigi-g18, #spesialisgigi-g38, #spesialisgigi-g17, #spesialisgigi-g37, #spesialisgigi-g16, #spesialisgigi-g36, #spesialisgigi-g15, #spesialisgigi-g35, #spesialisgigi-g14, #spesialisgigi-g34, #spesialisgigi-g13, #spesialisgigi-g33, #spesialisgigi-g12, #spesialisgigi-g32, #spesialisgigi-g11, #spesialisgigi-g31, #spesialisgigi-g21, #spesialisgigi-g41, #spesialisgigi-g22, #spesialisgigi-g42, #spesialisgigi-g23, #spesialisgigi-g43, #spesialisgigi-g24, #spesialisgigi-g44, #spesialisgigi-g25, #spesialisgigi-g45, #spesialisgigi-g26, #spesialisgigi-g46, #spesialisgigi-g27, #spesialisgigi-g47, #spesialisgigi-g28, #spesialisgigi-g48").on("click", function () {
        $(this).select();
    });

})