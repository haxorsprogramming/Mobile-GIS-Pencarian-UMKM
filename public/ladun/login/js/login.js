/* Route */
var routeToLogin = server + "auth/login/proses";
var routeToDaftar = server + "auth/daftar";
var routeToDashboard = server + "admin";

/* Vue object */
var divUtama = new Vue({
  el :'#divUtama',
  data : {
    pengembang : 'Annisa Nasution'
  },
  methods : {
    masukAtc : function()
    {
      prosesLogin();
    },
    daftarAtc : function()
    {
      window.location.assign(routeToDaftar);
    }
  }
});

/* Inisialisasi */

let statusKoneksi = navigator.onLine;
document.querySelector("#txtUsername").focus();

if(statusKoneksi === true){
  $('#capCekServer').html('Terhubung');
  $('#capCekServer').addClass('badge-info');
}else{
  $('#capCekServer').html('Tidak terkoneksi');
  $('#capCekServer').addClass('badge-warning');
}

/* Function */ 
function prosesLogin()
{
  let username = document.querySelector("#txtUsername").value;
  let password = document.querySelector("#txtPassword").value;

  if(username === "" || password === ""){
    pesanUmumApp('warning', 'Isi field!!', 'Harap isi username & password');
  }else{
    let dataSend = {'username':username, 'password':password}
    axios.post(routeToLogin, dataSend).then(function(res){
      let dr = res.data;
      if(dr.status === 'success'){
        window.location.assign(routeToDashboard);
      }else{
        pesanUmumApp("error", "Gagal", "Login gagal, periksa kembali username & password ...");
      }
    });
  }
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}