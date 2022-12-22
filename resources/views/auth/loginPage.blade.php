<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1", shrink-to-fit="no">
  <title>Aplikasi Klasifikasi Penyakit Kulit</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('') }}ladun/login/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('') }}ladun/login/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://nos.jkt-1.neo.id/aditiastorage/lib/iziToast/iziToast.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <!-- inject:css -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="ladun/login/css/style.css">
  <!-- endinject -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
  <div class="container-scroller" id="divUtama">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo" style='text-align:center;'>
                  <img src="https://nos.jkt-1.neo.id/aditiastorage/asset/logo/logo-uin-baru.jpg" alt="logo" style='width:100px;'>
                </div>
                <div style="text-align:center;">
                <h3><strong>Sistem Informasi Geografis Mobile (MOBILE GIS)</strong></h3>
                <h4>Persebaran Lokasi UMKM</h4>
                <h5>Menggunakan Algoritma DIJKSTRA</h5>
                <div style="margin-top:20px;">
                  <div id="frm_login">
                      <div class="form-group">
                          <input type="text" class="form-control form-control-lg" id="txtUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-lg" id="txtPassword" placeholder="Password">
                        </div>
                        <div id="capNotifLogin"></div>
                        <div class="mt-3">
                          <a id="btnMasuk" v-on:click="masukAtc" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="javascript:void(0)">
                            <i class="fas fa-sign-in-alt"></i> Masuk
                          </a>
                          <div style="margin-top: 20px;">
                            <a href="javascript:void(0)" v-on:click="daftarAtc"><h5>Registrasi User</h5></a>
                          </div>
                        </div>
                  </div>
                  <div class="mt-2">
                      <div style="padding-top:22px;">
                        <h6 class="font-weight-light">Oleh by : Annisa Nasution</h6>
                        <h6 class="font-weight-light">Program Studi Ilmu Komputer - Fakultas Sains dan Teknologi</h6>
                          <div class="badges">
                            <small>Status koneksi </small><a href="javascript:void(0)" id="capCekServer" class="badge">-</a>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</div>
<script>

    const server = "{{ url('') }}/";

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('') }}ladun/login/vendors/base/vendor.bundle.base.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- inject:js -->
<script src="{{ asset('') }}ladun/login/js/template.js"></script>
<script src="{{ asset('') }}ladun/login/js/login.js"></script>
<!-- endinject -->
</body>

</html>