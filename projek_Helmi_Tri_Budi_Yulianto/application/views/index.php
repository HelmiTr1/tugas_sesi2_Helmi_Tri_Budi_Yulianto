<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Impact Dashboard</title>

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/impact-design-system" />

  <!--  Social tags      -->
  <meta name="keywords" content="impact design system, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, impact, impact ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, impact dashboard">
  <meta name="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Impact Design System by Creative Tim">
  <meta itemprop="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Impact Design System by Creative Tim">

  <meta name="twitter:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">


  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Impact Design System by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/impact-design-system/" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg" />
  <meta property="og:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included." />
  <meta property="og:site_name" content="Creative Tim" />

  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets') ?>/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/dashboard.css" type="text/css">
  <!-- DatePicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/filepond/dist/filepond.min.css')?>">
  <!-- Anti-flicker snippet (recommended) 
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-K9BGS8K':true});</script>

<!-- Analytics-Optimize Snippet
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-46172202-22', 'auto', {allowLinker: true});
ga('set', 'anonymizeIp', true);
ga('require', 'GTM-K9BGS8K');
ga('require', 'displayfeatures');
ga('require', 'linker');
ga('linker:autoLink', ["2checkout.com","avangate.com"]);
</script>
<!-- end Analytics-Optimize Snippet -->

  <!-- Google Tag Manager
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
<!-- End Google Tag Manager -->
</head>


<body>
  <!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="../../../index.html">
          <img src="<?php echo base_url('assets') ?>/img/brand/dark.svg" height="40" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php if ($this->uri->segment(1) == '') echo "active" ?>" href="<?php echo base_url() ?>">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Pendaftaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($this->uri->segment(1) == 'rekam_medik' || $this->uri->segment(1) == 'rekam_medik_form') echo "active" ?>" href="<?php echo base_url('main/rekam_medik') ?>">
                <i class="ni ni-email-83 text-orange"></i>
                <span class="nav-link-text">Rekam Medik</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url('assets') ?>/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">SIP</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
</div>
                <a href="" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?php echo ucfirst($title) ?></h6>

            </div>
            <div class="col-lg-6 col-5 text-right">

            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <?php echo $content ?>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> & <a href="https://themesberg.com?ref=creative-tim" class="font-weight-bold ml-1" target="_blank">Themesberg</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://themesberg.com" class="nav-link" target="_blank">Themesberg</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url('assets') ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url('assets') ?>/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('assets') ?>/js/dashboard.js?v=1.2.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo base_url('assets') ?>/js/demo.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="<?php echo base_url('assets') ?>/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

  <!-- JQuery Validation-->
  <script src="<?php echo base_url('assets') ?>/vendor/jquery-validation/jquery.validate.js"></script>

  <!-- Datepicker-->
  <script src="<?php echo base_url('assets') ?>/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <!-- DataTables -->
  <script src="<?php echo base_url('assets') ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

  <script src="<?php echo base_url('assets/vendor/filepond/dist/filepond.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js')?>"></script>
<script>
    $(document).ready(function(){
        $('#idPendaftaran').on('change', function(){
            const selectedPackage = $('#idPendaftaran').val();

            $.ajax({
              url:"<?php echo base_url('main/ajax_pendaftaran')?>",
              type: 'POST',
              dataType: 'json',
              data: {id : selectedPackage},
              success:function(response){
                console.log();
                $('#namaPasien').val(response.data[0].namaPasien);
                $('#namaDokter').val(response.data[0].namaDokter);
                $('#keluhan').val(response.data[0].keluhan);
              }
            })
        });
    })
</script>
  <script>
    $(document).ready(function() {
      $('table').DataTable({
        responsive: true,
        "language": {
            "paginate": {
              "previous": "<i class='fas fa-angle-left'></i>",
              "next": "<i class='fas fa-angle-right'></i>",
              "first": "<i class='fas fa-angle-double-left'></i>",
              "last": "<i class='fas fa-angle-double-right'></i>"
                }
          }
      });
      

    });

  </script>

  <!-- AJAX PENDAFTARAN -->
  <script type="text/javascript">
    var jvalidate = $("#pendaftaran_form").validate({
      ignore: [],
      rules: {
        idPasien: {
          required: true
        },
        idDokter: {
          required: true
        },
        keluhan: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {

            if (response.status == 'ok') {
              swal({
                title: 'Berhasil',
                text: response.msg,
                type: 'success',
                buttons: true
              }).then((value) => {
                window.location.href = response.redirect;
              })
            } else {
              swal({
                title: 'gagal',
                text: response.msg,
                type: 'error',
                timer: 2000,
                showConfirmButton: false
              })
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

  <!-- AJAX REKAM MEDIK -->
  <script type="text/javascript">
    var jvalidate = $("#rekam_medik_form").validate({
      ignore: [],
      rules: {
        idPendaftaran: {
          required: true
        },
        diagnosa: {
          required: true
        },
        tanggalKonsultasiKembali:{
          required: true
        },
        ruangan:{
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {

            if (response.status == 'ok') {
              swal({
                title: 'Berhasil',
                text: response.msg,
                type: 'success',
                buttons: true
              }).then((value) => {
                window.location.href = response.redirect;
              })
            } else {
              swal({
                title: 'gagal',
                text: response.msg,
                type: 'error',
                timer: 2000,
                showConfirmButton: false
              })
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>
</body>

</html>