var rToBeranda = server + "beranda";
var rToDataUmkm = server + "data-umkm";

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
    dataUmkmAtc : function()
    {
      $('#divUtama').load(rToDataUmkm);
      $('.button-collapse').sideNav('hide');
    },
    berandaAtc : function()
    {
      $('#divUtama').load(rToBeranda);
      $('.button-collapse').sideNav('hide');
    }
  }
});
