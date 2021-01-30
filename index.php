<?php

include './php/config.php';

function visitor()
{
  $ip = '';
  if (getenv('HTTP_CLIENT_IP'))
    $ip = getenv('HTTP_CLIENT_IP');
  else if (getenv('HTTP_X_FORWARDED_FOR'))
    $ip = getenv('HTTP_X_FORWARDED_FOR');
  else if (getenv('HTTP_X_FORWARDED'))
    $ip = getenv('HTTP_X_FORWARDED');
  else if (getenv('HTTP_FORWARDED_FOR'))
    $ip = getenv('HTTP_FORWARDED_FOR');
  else if (getenv('HTTP_FORWARDED'))
    $ip = getenv('HTTP_FORWARDED');
  else if (getenv('REMOTE_ADDR'))
    $ip = getenv('REMOTE_ADDR');
  else
    $ip = 'Ip visitor tidak ditemukan';
  return $ip;
}

$file = fopen('logs.txt', 'w');
fwrite($file, "\n IP : ".visitor()." User Agent : ".$_SERVER['HTTP_USER_AGENT']."\n");
fclose($file);

$jumlahv = count(file('logs.txt'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php

    $url = explode('/', $_SERVER['REQUEST_URI']);

    if ( $url['2'] == '') {
      
      echo "<title>".$config['title-utama']."</title>";

    } 

  ?>

  <!-- <title><?php echo $config['title']?></title> -->
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero-koi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bubbler.min.css" rel="stylesheet">
  <link href="assets/toastr/toastr.css" rel="stylesheet">
  <link href="assets/toastr/toastr.min.css" rel="stylesheet">
  
  <!-- Template Main JS File -->
  <script src="assets/js/bubbler.min.js"></script>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/toastr/toastr.min.js"></script>
  <script src="https://kit.fontawesome.com/62165396ea.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Bootslander - v2.3.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="./"><span><?=$config['judul-bar']?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#list-item">Tentang</a></li>
          <li><a href="#pricing">Stok</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><?=$config['judul-utama']?></h1>
            <h2><?=$config['deskripsi-utama']?></h2>
            <div class="text-center text-lg-left">
              <a href="<?=$kontak['whatsapp']?>" target="_blank" class="btn-get-started scrollto"><?=$config['tombol-start']?> <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-koi.png" class="animated" alt="" style="width: 150%;">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-users"></i>
              <span data-toggle="counter-up"><?=$jumlahv?></span>
              <p>Pengunjung <small>(Hari Ini)</small></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fas fa-fish"></i>
              <span data-toggle="counter-up"><?=$count['jenis']?></span>
              <p>± Jenis Koi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-phone"></i>
              <span data-toggle="counter-up"><?=$count['support']?></span>
              <p>Jam Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-briefcase"></i>
              <span data-toggle="counter-up"><?=$count['pekerja']?></span>
              <p>Pekerja</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right" style="background: url('./assets/img/bg-about.png') center no-repeat; background-size: contain; min-height: 300px;">
            <a href="https://www.youtube.com/watch?v=2CrUdxS3bxQ&t=34s" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left" id="list-item">
            <h3>Tentang</h3>
            <p><?=ucfirst($config['tentang-kami'])?></p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-handshake"></i></div>
              <h4 class="title"><a href=""><?=$config['item-1']?></a></h4>
              <p class="description"><?=$config['deskripsi-item-1']?></p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-health"></i></div>
              <h4 class="title"><a href=""><?=$config['item-2']?></a></h4>
              <p class="description"><?=$config['deskripsi-item-2']?></p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-shield-quarter"></i></div>
              <h4 class="title"><a href=""><?=$config['item-3']?></a></h4>
              <p class="description"><?=$config['deskripsi-item-3']?></p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-package"></i></div>
              <h4 class="title"><a href=""><?=$config['item-4']?></a></h4>
              <p class="description"><?=$config['deskripsi-item-4']?></p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-dollar"></i></div>
              <h4 class="title"><a href=""><?=$config['item-5']?></a></h4>
              <p class="description"><?=$config['deskripsi-item-5']?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Stok Kami</h2>
          <p>Stok Kami</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3><?=$koleksi['1']?></h3>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <img src="<?=$koleksi['gambar-1']?>" class="img-thumbnail mx-auto d-block">
              <div class="btn-wrap">
                <a target="_blank" href="<?=$kontak['whatsapp']?>" class="btn-buy">Cek Sekarang <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3><?=$koleksi['2']?></h3>
              <img src="<?=$koleksi['gambar-2']?>" class="img-thumbnail mx-auto d-block">
              <div class="btn-wrap">
                <a target="_blank" href="<?=$kontak['whatsapp']?>" class="btn-buy">Cek Sekarang <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3><?=$koleksi['3']?></h3>
              <img src="<?=$koleksi['gambar-3']?>" class="img-thumbnail mx-auto d-block">
              <div class="btn-wrap">
                <a target="_blank" href="<?=$kontak['whatsapp']?>" class="btn-buy">Cek Sekarang <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <!-- <span class="advanced"><?=$koleksi['4']?></span> -->
              <h3><?=$koleksi['4']?></h3>
              <img src="<?=$koleksi['gambar-4']?>" class="img-thumbnail mx-auto d-block">
              <div class="btn-wrap">
                <a target="_blank" href="<?=$kontak['whatsapp']?>" class="btn-buy">Cek Sekarang <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Galeri</h2>
          <p>Galeri Kami</p>
        </div>

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="<?=$galeri['1']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['1']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="<?=$galeri['2']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['2']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="<?=$galeri['3']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['3']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="<?=$galeri['4']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['4']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="<?=$galeri['5']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['5']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="<?=$galeri['6']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['6']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="<?=$galeri['7']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['7']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="<?=$galeri['8']?>" class="venobox" data-gall="gallery-item">
                <img src="<?=$galeri['8']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Lokasi :</h4>
                <p><?=$kontak['lokasi']?></p>
              </div>

              <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <h4>WhatsApp :</h4>
                <p><?=$kontak['nomor']?></p>
              </div>

              <div class="phone">
                <i class="fab fa-instagram"></i>
                <h4>Instagram :</h4>
                <p>Lihat kami di <a href="<?=$kontak['instagram']?>">Instagram</a></p>
              </div>

              <div class="phone">
                <i class="fab fa-facebook-f"></i>
                <h4>Facebook :</h4>
                <p>Lihat kami di <a href="<?=$kontak['facebook']?>">Facebook</a></p>
              </div>

              <div class="phone">
                <i class="fab fa-youtube"></i>
                <h4>YouTube :</h4>
                <p>Lihat kami di <a href="<?=$kontak['youtube']?>">YouTube</a></p>
              </div>

              <div class="phone">
                <i class="fas fa-user-friends"></i>
                <h4>Group Facebook :</h4>
                <p>Gabung ke <a href="<?=$kontak['gc-fb']?>">group kami</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form id="form-kontak">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="<?=$form['ph_nama']?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="<?=$form['ph_email']?>" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="<?=$form['ph_subject']?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="15" data-rule="required" data-msg="Please write something for us" placeholder="<?=$form['ph_message']?>"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="button" class="btn btn-success btn-block" onclick="send()"><?=$form['btn']?> <i class="fas fa-paper-plane"></i></button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <?=date('Y')?> Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade </a>Recoded by <?=$kontak['author']?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!--   <a href="https://wa.me/6285157868610" target="_blank" class="back-to-top"><i class="fab fa-whatsapp"></i></a> -->

  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Additional Script -->
  <script type="text/javascript">
    
    var options = [

      {
        icon: '<i class="fa fa-whatsapp" aria-hidden="true"></i>',
        label: 'Hubungi via WhatsApp',
        callback: function() {
          window.location.replace('https://wa.me/6281555633367');
        }
      },
      {
        icon: '<i class="fa fa-arrow-up" aria-hidden="true"></i>',
        label: 'Kembali ke Atas',
        callback: function() {
          location.href = "#hero";
        }
      }

    ];

    var menu = new Bubbler(options);

    function send(){

      var formkontak = new FormData($("#form-kontak")[0]);

      $.ajax({
          
          type: "POST",
          url: "php/send.php",
          dataType: "JSON",
          data: formkontak,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            toastr.success('Sedang mengirim pesan anda ....', {timeOut: 6000});
          },
          success: function(data){

            if (data.success) {
              toastr.clear();
              $("#nama").val('');
              $("#email").val('');
              $("#subject").val('');
              $("#message").val('');
              toastr.success('Pesan anda berhasil dikirim!', 'Berhasil');
            } else {
              toastr.error('Pesan anda tidak berhasil dikirim!', 'Error');
            }

          }

      })
    }

  </script>

</body>

</html>