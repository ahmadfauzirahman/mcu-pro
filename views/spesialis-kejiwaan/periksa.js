/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-05 20:45:35 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2020-10-07 15:10:36
 */


$(document).ready(function () {

    $("#form-spesialis-kejiwaan").on('submit', function (e) {
        e.preventDefault()
        e.stopImmediatePropagation()
        var kepalaform = $("#form-spesialis-kejiwaan").serialize()
        $.post(baseUrl + 'spesialis-kejiwaan/periksa?id=' + $('#spesialiskejiwaan-cari_pasien').val(), kepalaform, function (r) {
            console.log(r)
            if (r.s) {
                $.pjax.reload({container: '#btn-cetak', async: false})
                toastr["success"]("Mantap, Sukses menyimpan boooyyyy...")
            } else {
                toastr["warning"]("Huuft, Gagal menyimpan boooyyyy...<br>" + JSON.stringify(r.e))
            }
        }, 'JSON')
        return false
    })

})

hotkeys("i,o,p,r,shift+s,s,u", function (event, handler) {
  let jumlahItem = $(".dynamicform_wrapper .form-options-item").length;
  let lastIndex = jumlahItem - 1;
  switch (handler.key) {
    // case "i":
    //   $("#btn-print-invoice").click();
    //   break;
    // case "o":
    //  alert()
    //   break;
    // case "p":
    //   $("#btn-print-berkas").click();
    //   break;
    case "r":
     $("#spesialiskejiwaan-cari_pasien").select2("open");
      break;
    // case "shift+s":
    //   $("#btn-simpan-penjualan").click();
    //   break;
    // case "s":
    //   $("#btn-simpan-penjualan").click();
    //   break;
    // case "u":
    //   $("#btn-update-penjualan")[0].click();
    //   break;
    default:
      alert(event);
  }
});