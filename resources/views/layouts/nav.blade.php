<!DOCTYPE html>

<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SMP 3 Selomerto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="{{asset('cp/layout/styles/layout.css')}}" type="text/css" />

<script type="text/javascript" src="{{asset('cp/layout/scripts/jquery.min.js')}}"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="{{asset('cp/layout/scripts/liteaccordion-v2.2/css/liteaccordion.css')}}" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <img src="{{ asset('images/logo.jpg') }}" style="padding-right: 30px" width="60" height="60" alt="">
    </div>
    <div class="fl_left">
      <h1><a href="index.html">SMP 3 Selomerto</a></h1>
      <a> Adiwarno 02/03 Kec. Selomerto Wonosobo</a>

    </div>
    <div style="float:right;">
      @if (Auth::guest())
          <h3><a href="{{ route('login') }}">Login</a></h3>
      @else
          <h3>  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></h3>
          
      @endif
    </div> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="/">Beranda</a></li>
      <li><a href="/profil">Profil Sekolah</a>
        <ul>
          <li><a href="/visi_misi">Visi Misi</a></li>
          <li><a href="/struktur">Struktur Organisasi</a></li>
          <li><a href="/peta">Lokasi Sekolah</a></li>
          <li><a href="/sejarah">Sejarah Sekolah</a></li>
        </ul>
      </li>
      <li><a href="/fasilitas">Fasilitas Sekolah</a></li>
     
      @if (!Auth::guest())
      @if (Auth::User()->role === 'siswa')
      <li><a href="/daftar_pelanggaran">Daftar Pelanggaran</a></li>
      @endif
      @endif
      <li><a href="/contact">Hubungi Kami </a></li>
      <!-- <li><a href="pages/3-columns.html">Galeri Sekolah</a></li> -->
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
@yield('content')
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">SMP 3 Selomerto</a></p>
  </div>
</div>
<!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="{{asset('cp/layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwIJPKjivcjhrCa0lZwwuPQT1qr3KoM3c&callback=myMap"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
  activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>