var rToBeranda = server + "beranda";

$(document).ready(function(){
  $(".materialboxed").materialbox();
  $(".button-collapse").sideNav();
  $("select").material_select();
  var loading = "<div class='progress'><div class='indeterminate'></div></div>";
  console.log("Halaman berhasil di load");
  $("#divUtama").html(loading);
  $("#divUtama").load(rToBeranda);
  $("#judulApps").html("Aplikasi pencarian lokasi UMKM berbasis Mobile GIS");
  //tombol beranda
  $("#homeSideNav").click(function () {
    location.reload();
  });

  function updateSistem() {
    $('#divUtama').load('')
    Materialize.toast("Tak ada respon dari server", 1100);
  }

});

var divApps = new Vue({
  el : '#divApps',
  data : {
    developer : 'Annisa Nasution',
  },
  methods : {
    pengujianAtc : function()
    {
      $('#divUtama').load('pengujian.html');
      $('.button-collapse').sideNav('hide');
    },
    daftarPenyakitAtc : function()
    {
      $('#divUtama').load('daftarPenyakit.html');
      $('.button-collapse').sideNav('hide');
    }
  }
});
