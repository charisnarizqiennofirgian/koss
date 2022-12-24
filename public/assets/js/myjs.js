$(document).ready(function () {
  // detail data
  $("#modal").click(function () {
    var code = Math.floor(100 + Math.random() * 1000);
    // masukan kode bayar
    $("#kode").val(code);
    var masuk = $("#masuk").val();
    var keluar = $("#keluar").val();
    var harga = $("#harga").val();
    var diff = new Date(keluar).getTime() - new Date(masuk).getTime();
    var days = diff / (1000 * 60 * 60 * 24);
    // format angka rupiah
    function formatRupiah(angka) {
      var rupiah = "";
      var angkarev = angka.toString().split("").reverse().join("");
      for (var i = 0; i < angkarev.length; i++) {
        if (i % 3 == 0) {
          rupiah += angkarev.substr(i, 3) + ".";
        }
      }
      return (
        "Rp. " +
        rupiah
          .split("", rupiah.length - 1)
          .reverse()
          .join("")
      );
    }
    // Menghitung jika kelipatan bulan
    if (days <= 30) {
      total = 1;
      $("#total").html(": " + formatRupiah(total * harga + code));
    } else {
      var count = 1;
      for (var i = 30; i < days; i += 30) {
        count++;
      }
      total = count;
      $("#total").html(": " + formatRupiah(total * harga + code));
      $("#total_harga").val(total * harga + code);
    }
    $("#val-date").html(`: <b>${masuk}</b> sampai <b>${keluar}</b>`);
  });
});

function openModal() {
  // Menampilkan modal
  document.getElementById("qris").style.display = "block";
}
