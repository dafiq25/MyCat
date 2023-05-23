<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div class="container px-4 px-lg-5">
              <img class="mt-1" src="{{URL::to('/')}}/assets/logofix.png" style="height: 40px " alt=...>
              <a class="navbar-brand text-light ms-3" href="/dashboard">MyCat</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    @foreach($list as $d)
                      <li class="nav-item"><a class="nav-link text-light" href="/shop/{{$d->nama_kategori}}">{{$d->nama_kategori}}</a></li>
                    @endforeach
                      <!-- <li class="nav-item"><a class="nav-link text-light active" aria-current="page" href="/DFood">Dry Food</a></li>
                      <li class="nav-item"><a class="nav-link text-light" href="/WFood">Wet Food</a></li>
                      <li class="nav-item"><a class="nav-link text-light" href="/Snack">Snack</a></li>
                      <li class="nav-item"><a class="nav-link text-light" href="/Vit">Multivitamin</a></li>
                      <li class="nav-item"><a class="nav-link text-light" href="/Accessories">Accessories</a></li> -->
                      <!-- <li class="nav-item dropdown"></li> -->
                  </ul>
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fa-solid fa-bag-shopping btn-dark fa-xl" href="/cart"></a></i>
                  </form>
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fas fa-user-alt btn-dark" href="/Profile" style="font-size:24px"></a></i>
                  </form>
                  <form class="d-flex mb-lg-0 ms-lg-4">
                    <i><a class="fas fa-sharp fa-solid fa-right-from-bracket btn-dark" href="/logout" style="font-size:24px"></a></i>
                  </form>
              </div>
          </div>
      </nav>

      <div class="erga">
            @yield('container')
      </div>

      <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">About company</h5>

              <p>
              MyCat is an online shop that provides for your cat's need at home.
              </p>
              <p>
              We provide goods with high quality but at an affordable price.
              </p>

              <div class="mt-4">
                <!-- Facebook -->
                <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
                <!-- Dribbble -->
                <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
                <!-- Twitter -->
                <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
                <!-- Google + -->
                <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
                <!-- Linkedin -->
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">operational hour</h5>

              <table class="table text-center text-white">
                <tbody class="font-weight-normal">
                  <tr>
                    <td>Mon - Fri </td>
                    <td>08.00 - 20.00</td>
                  </tr>
                  <tr>
                    <td>Sat - Sun </td>
                    <td>08.00 - 12.00</td>
                  </tr>
                  <tr>
                  </tr>
                </tbody>
              </table>
              <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jl. Pucang Anom Timur II No. 44 Surabaya</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">mycat@gmail.com</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">0898-9739-434</span>
            </div>
             <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

              <div class="form-outline form-white mb-4">
                <input type="text" id="formControlLg" class="form-control form-control-lg">
                <label class="form-label" for="formControlLg" style="margin-left: 0px;"></label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
          </div>
          <!--Grid row-->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://MyCat.com/">MyCat.com</a>
        </div>
        <!-- Copyright -->
        <script src="{{ asset('https://kit.fontawesome.com/1a60c45adc.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
          <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js') }}"></script>
      </footer>

