<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPBS - Catálogo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/assets/img/spbs.png" rel="icon">
  <link href="assets/assets/img/spbs.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Sep 20 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <a href="/inicio" class="book-a-table-btn scrollto d-none d-lg-flex">Volver a la página de inicio</a>
      </div><br><br>
      <h2>Catálogo</h2>
      <p>Catálogo</p>
    </div>

    <!-- Filtros con checkboxes -->
    <div id="filterOptions" class="d-flex justify-content-center">
      {{-- <label class="container"><input type="checkbox" checked="checked" > Pestañas</label>
      <label class="container"><input type="checkbox" checked="checked" name="filter" value="Pinzas"> Pinzas</label>
      <label class="container"><input type="checkbox" checked="checked" name="filter" value="Shampoo"> Shampoo</label>
      <label class="container"><input type="checkbox" checked="checked" name="filter" value="Pegamento"> Pegamento</label> --}}
<style>
  /* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: magenta;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
      <label class="container">Pestañas
        <input type="checkbox" checked="checked" name="filter" value="Pestañas">
        <span class="checkmark"></span>
        <label class="container">Pinzas
          <input type="checkbox" checked="checked" name="filter" value="Pinzas">
          <span class="checkmark"></span>
          <label class="container">Shampoo
            <input type="checkbox" checked="checked" name="filter" value="Shampoo">
            <span class="checkmark"></span>
            <label class="container">Pegamento
              <input type="checkbox" checked="checked" name="filter" value="Pegamento">
              <span class="checkmark"></span>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 portfolio-item {{$product->type}}">
          <img class="card-img-top" src="/storage/{{$product->image_1}}" alt="{{$product->image_1}}" />
          <div class="portfolio-info">
            <h4>{{$product->name}}</h4>
            <p>$ {{$product->price}}</p><br>
              <a class="book-a-table-btn" href="/cat/detail/{{$product->id}}" title="More Details">Ver más</a><br><br>
              <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->name }}" name="name">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->image_1 }}"  name="image_1">
                <input type="hidden" value="1" name="quantity">
                <button class="book-a-table-btn" style="color: magenta">Comprar</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section><!-- End Portfolio Section -->

<script>
  // Función para filtrar los productos según los checkboxes seleccionados
  function filterProducts() {
    const checkboxes = document.querySelectorAll('input[name="filter"]');
    const selectedTypes = Array.from(checkboxes)
      .filter(checkbox => checkbox.checked)
      .map(checkbox => checkbox.value);

    // Oculta todos los elementos
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    portfolioItems.forEach(item => {
      item.style.display = 'none';
    });

    // Muestra solo los elementos seleccionados
    selectedTypes.forEach(type => {
      const selectedItems = document.querySelectorAll(`.portfolio-item.${type}`);
      selectedItems.forEach(item => {
        item.style.display = 'block';
      });
    });
  }

  // Asocia la función al cambio en los checkboxes
  document.querySelectorAll('input[name="filter"]').forEach(checkbox => {
    checkbox.addEventListener('change', filterProducts);
  });
</script>

  </main><!-- End #main -->

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
  <script src="assets/assets/vendor/aos/aos.js"></script>
  <script src="assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/assets/js/main.js"></script>

</body>

</html>