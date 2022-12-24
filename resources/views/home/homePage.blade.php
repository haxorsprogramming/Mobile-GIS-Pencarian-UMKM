<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Klasifikasi Penyakit Kulit</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}" defer></script>
</head>

<body>
  <div id='divApps'>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper  green darken-1">
          <a href="#!" class="brand-logo">
            <marquee><small id="judulApps">Aplikasi lacak rute terdekat</small></marquee>
          </a>
          <a href="#!" data-activates="menu-mobile" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-small-only">
            <li><a href="#!">Home</a></li>
            <li><a href="#!">Profile</a></li>
            <li><a href="#!">LogOut</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <ul id="menu-mobile" class="side-nav">
      <li>
        <div class="user-view">
          <div class="background blue">
          </div>
          <a href="javascript:void(0)"><img class="circle" src="https://nos.jkt-1.neo.id/aditiastorage/asset/logo/logo-uin-baru.jpg"></a>
          <a href="javascript:void(0)"><span class="white-text name">Selamat datang visitor</span></a>
          <a href="javascript:void(0)"><span class="white-text email">{{ $waktu }}</span></a>
        </div>
      </li>
      <li><a href="javascript:void(0)" @click="berandaAtc" id="homeSideNav" class="hoverable"><i class="material-icons">home</i>Beranda</a></li>
      <li><a href="javascript:void(0)" @click="dataUmkmAtc" class="hoverable"><i class="material-icons">healing</i>Data UMKM</a>
      </li>
      <!-- <li><a href="#!" class="hoverable"><i class="material-icons">history</i>History Pengujian</a></li> -->
      <li><a href="{{ env('APP_URL') }}login" class="hoverable"><i class="material-icons">undo</i>Log In</a></li>
      <li>
        <footer class="page-footer white">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="grey-text">Aplikasi Pencarian Lokasi UMKM</h5>
                <small class="grey-text">Annisa Nasution - Ilmu Komputer Uinsu</small>
              </div>
            </div>
          </div>
        </footer>
      </li>
    </ul>

    <div id="loading"></div>

    <div class="container" id="divUtama">

      <!-- end container -->
    </div>

  </div>
    <script>
        const server = "{{ url('') }}/";
    </script>
  <script src="https://nos.jkt-1.neo.id/aditiastorage/lib/datatable/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <script type="text/javascript" src="{{ asset('') }}ladun/js/resamble.js"></script>
  <script type="text/javascript" src="{{ asset('') }}ladun/js/beranda.js"></script>
</body>

</html>