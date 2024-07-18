<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPBS - Detalle de Producto</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/assets/img/spbs.png" rel="icon">


  <link href="/assets/assets/img/spbs.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/assets/css/style.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Sep 20 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lunes a Sábado: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
        </ul>
      </div>
    </div>
  </div>

  <main id="main">

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="section-title">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
          <a href="/inicio"class="book-a-table-btn scrollto d-none d-lg-flex">Volver a la página de inicio</a>
        </div><br>
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
          <a href="/cat"class="book-a-table-btn scrollto d-none d-lg-flex">Productos</a>
        </div><br><br>
        <h2>Product Detail</h2>
        <p>Detalle de Producto</p>
            
      </div>

      
          
      <div class="row gy-4">
        {{-- @foreach ($products as $product) --}}

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3 style="text-transform:uppercase">{{$product->name}}</h3>
          </div>
          <div class="portfolio-description">
            <h2 style="text-transform:uppercase">Descripción</h2>
            <p style="font-size:14px">{{$product->description}}</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="/storage/{{$product->image_1}}" alt="{{$product->image_1}}" width="50px">
              </div>

              <div class="swiper-slide">
                <img src="/storage/{{$product->image_2}}" alt="{{$product->image_2}}" width="50px">
              </div>

              <div class="swiper-slide">
                <img src="/storage/{{$product->image_3}}" alt="{{$product->image_3}}" width="50px">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h4 style="text-transform:uppercase;font-size:14px">Información del producto</h4>
            <ul style="font-size:10px">
              <li><strong>Tipo</strong>: {{$product->type}}</li>
              <li><strong>Color</strong>: {{$product->color}}</li>
              <li><strong>Capacidad</strong>: {{$product->capability}} {{$product->capability_type}}</li>
            </ul>
            <h3>$ {{$product->price}}</h3>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="id">
              <input type="hidden" value="{{ $product->name }}" name="name">
              <input type="hidden" value="{{ $product->price }}" name="price">
              <input type="hidden" value="{{ $product->image_1 }}"  name="image_1">
              <input type="hidden" value="1" name="quantity">
              <button class="book-a-table-btn" style="color: magenta"><b>Añadir al carrito</b></button>
          </form>
          </div>
        </div>
        {{-- @endforeach --}}
      </div>  

    </div>
  </section><!-- End Portfolio Details Section -->
</main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h2>spbs</h2>
              <p>
                C. Independencia 55, Centro <br>
                44100 Guadalajara, Jal<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/inicio">Página principal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inicio#about">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/cat">Productos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/admin">Administrador</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> --}}

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>spbs</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Sofia & Paulette</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/assets/vendor/aos/aos.js"></script>
  <script src="/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/assets/js/main.js"></script>

</body>

</html>