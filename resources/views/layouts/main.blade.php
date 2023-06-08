<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elite</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/stylear.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> الاثنين - السبت, من الثامنه صباحا حتى العاشره مساءً
      </div>
      <div class="d-flex align-items-center flex-row-reverse">
         اتصل بنا على 01101620826<i class="bi bi-phone"></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo ms-auto"><img src="assets/img/LOGO.jpg" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>


          <li><a class="nav-link scrollto fs-5" href="/">الرئيسية</a></li>
          <li><a class="nav-link scrollto fs-5" href="#about">من نحن </a></li>
          <li><a class="nav-link scrollto fs-5" href="#services">خدماتنا</a></li>
          <li><a class="nav-link scrollto fs-5" href='{{ route('doctors') }}'>الاطباء </a></li>
          <li><a class="nav-link scrollto fs-5" href='{{ route('hospitals') }}'> المستشفيات </a></li>
          <li><a class="nav-link scrollto fs-5" href='{{ route('pharmacy') }}'> الصيدليات </a></li>
          @if (Auth::guard('patient')->check())

            <li><a class="nav-link scrollto fs-5" href='{{ route('follows') }}'> المتابعات </a></li>

          @endif

          <li><a class="nav-link scrollto fs-5" href="#appointment"> حجز موعد </a></li>

          <li><a class="nav-link scrollto fs-5" href="#contact">تواصل معنا</a></li>
          {{-- <li class="dropdown"><a href="#"><span class="fs-5 ms-2 color"> اللغه  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 512 512" strok="#626262"><title>ionicons-v5-l</title><line x1="48" y1="112" x2="336" y2="112" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="192" y1="64" x2="192" y2="112" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="272 448 368 224 464 448" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="301.5" y1="384" x2="434.5" y2="384" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M281.3,112S257,206,199,277,80,384,80,384" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M256,336s-35-27-72-75-56-85-56-85" style="fill:none;stroke:#626262;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./indexar.html">الانجليزية</a></li>
              <li><a href="./index.html">العربية</a></li>
            </ul>
          </li> --}}

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->


    @if (Auth::guard('doctor')->check())
        <!-- Content for doctors -->
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="   margin-left: 25px;
            background: #3fbbc0;
            color: #fff;
            border-radius: 4px;
            padding: 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;"
            >
             {{ Auth::guard('doctor')->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li> <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">تسجيل الخروج</button>
              </form>
            </li>
            </ul>
          </div>

         <!-- Additional doctor-specific content -->
    @elseif (Auth::guard('patient')->check())
        <!-- Content for patients -->
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="   margin-left: 25px;
            background: #3fbbc0;
            color: #fff;
            border-radius: 4px;
            padding: 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;"
            >
             {{ Auth::guard('patient')->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li>
                <form id="logout-form" action="{{ route('logout_patient') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">تسجيل الخروج</button>
              </form>
            </li>
            </ul>
          </div>
        <!-- Additional patient-specific content -->
    @elseif (Auth::guard('hospital')->check())
        <!-- Content for hospitals -->
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="   margin-left: 25px;
            background: #3fbbc0;
            color: #fff;
            border-radius: 4px;
            padding: 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;"
            >
             {{ Auth::guard('hospital')->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li>
                <form id="logout-form" action="{{ route('logout_hospital') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">تسجيل الخروج</button>
              </form>
            </li>
            </ul>
          </div>
        <!-- Additional hospital-specific content -->
    @elseif (Auth::guard('pharmacy')->check())
        <!-- Content for pharmacies -->
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="   margin-left: 25px;
            background: #3fbbc0;
            color: #fff;
            border-radius: 4px;
            padding: 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;"
            >
             {{ Auth::guard('pharmacy')->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li>
                <form id="logout-form" action="{{ route('logout_pharmacy') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">تسجيل الخروج</button>
              </form>
            </li>
            </ul>
          </div>
        <!-- Additional pharmacy-specific content -->

    @else

      <div class="dropdown-center">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
        style="   margin-left: 25px;
        background: #3fbbc0;
        color: #fff;
        border-radius: 4px;
        padding: 8px 25px;
        white-space: nowrap;
        transition: 0.3s;
        font-size: 14px;
        display: inline-block;"
        >
          تسجيل الدخول
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href='{{ url('login_doctor') }}'>طبيب</a></li>
          <li><a class="dropdown-item" href='{{ url('login_patient') }}'>مريض</a></li>
          <li><a class="dropdown-item" href='{{ url('login_hospital') }}'>مستشفي</a></li>
          <li><a class="dropdown-item" href='{{ url('login_pharmacy') }}'>صيدليه</a></li>
        </ul>
      </div>

      <div class="dropdown-center">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
        style="   margin-left: 25px;
        background: #3fbbc0;
        color: #fff;
        border-radius: 4px;
        padding: 8px 25px;
        white-space: nowrap;
        transition: 0.3s;
        font-size: 14px;
        display: inline-block;"
        >
           حساب جديد
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href='{{ url('signup_doctor') }}'>طبيب</a></li>
          <li><a class="dropdown-item" href='{{ url('signup_patient') }}'>مريض</a></li>
          <li><a class="dropdown-item" href='{{ url('signup_hospital') }}'>مستشفي</a></li>
          <li><a class="dropdown-item" href='{{ url('signup_pharmacy') }}'>صيدليه</a></li>
        </ul>
      </div>

      @endif

    </div>

  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><img src="./assets/img/LOGO.jpg" ></h3>
              <p>
                68 السيد الميرغني،<br>
                المنتزه، قسم مصر الجديدة، محافظة القاهرة 11757<br><br>
                <strong>الهاتف:</strong> +201101620826<br>
                <strong>البريد الالكترون:</strong> info@elitecare.com<br>
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
            <h4>روابط مفيده</h4>
            <ul>
              <li><i class="bx bx-chevron-left"></i> <a href="#hero">الرئسية</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="#about">من نحن </a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="#services">خدماتنا</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="#appointment">حجز ميعاد</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="#departments">الأقسام</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>خدماتنا</h4>
            <ul>
              <li><i class="bx bx-chevron-left"></i> <a href="">الفحص الشامل</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="">الصيدلية الإكلينيكة</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="">الإستشارة</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="">
                التحاليل الجينية</a></li>
              <li><i class="bx bx-chevron-left"></i> <a href="">الأشعة</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>لمزيد من الأخبار</h4>

            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="اشترك الان">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        EliteCare <strong><span>&copy; جميع </span></strong>. الحقوق محفوظة
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
