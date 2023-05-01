<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 404 - The page was not found</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .error_msg a
    {
    color: #1e5587 !important;
    }
    @media screen and (max-width:991px)
    {
    .error_msg>div
    {
    position: unset !important;
    padding-top: 0 !important;
    }
    .error_msg img
    {
    display: none !important;
    }
    .error_msg
    {
    height: 10% !important;
    }
    .error_msg p:nth-child(2),
    .error_msg p:nth-child(3)
    {
    display: none;
    }
    }
    </style>
  </head>
  <body>
    <section class="privacy_policy">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!-- Header Start -->
          <header class="">
            <div class="row gap- p-0 m-0">
              <div class="logo d-flex p-0 m-0 col-4">
                <a href="index.php">
                  <img title="To Home Page" src="./assets/img/FindMyHome-at-Logo.svg" alt="">
                </a>
              </div>
              <div class="col-6 header_ad p-0 m-0">
                <a href="#">
                  <!-- <img src="./assets/img/4a945c18296110128da06fb216ae0a84.gif" alt=""> -->
                </a>
              </div>
            </div>
          </header>
          <!-- Header end -->
          <div class="col-12 p-0 m-0">
            <?php include 'navbar.php'; ?>
          </div>
          <div class="hero_section p-0 m-0">
            <!--===================== error_msg =====================-->
            <div class="w-100 h-50 position-relative error_msg">
              <img class="w-100 h-100" src="./assets/img/Immobiliensuche-404-FindMyHome.jpg" alt="">
              <div class="position-absolute top-0 w-100 pt-5">
                <p class="fs-4 text-center pt-2"><strong>404</strong> – Unfortunately, the property you are looking for is gone.</p>
                <p class=" text-center"><strong>24,999 other properties</strong> are waiting for you on <strong>FindMyHome.at !</strong></p>
                <p class="fs-6 text-center">Start the quick search below or hire our <strong>free <a class="text-decoration-underline" href="register.php">search agent</a></strong></p>
              </div>
            </div>
            <!--===================== filter_container =====================-->
            <div class="filter_container w-100">
              <h1 class="title bg-white d-flex text-nowrap">YOU'LL BE AT HOME SOON!</h1>
              <div class="filter row row-cols-lg-7 m-0 d-flex justify-content-between align-items-center w-100 border">
                <ul class="list-unstyled d-flex rent_list border p-0 d-none">
                  <li class="d-flex flex-column justify-content-center align-items-center active_bg"><i class="fa-solid fa-building"></i><span class="">Apartment</span></li>
                  <li class="d-flex flex-column justify-content-center align-items-center border-start border-end"><i class="fa-sharp fa-solid fa-house"></i><span class="">House</span></li>
                  <li class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-tree"></i><span class="">Property</span></li>
                </ul>
                <div class="col-2 p-0 m-0 zip_city position-relative">
                  <input class="border-0" type="text">
                  <span class="position-absolute">Zip or City</span>
                </div>
                <div class="col-2 p-0 m-0 zip_city position-relative">
                  <input class="border-0" type="text">
                  <span class="position-absolute">Area m<sup>2</sup> Approx</span>
                </div>
                <div class="col-2 p-0 m-0 zip_city position-relative">
                  <input class="border-0" type="text">
                  <span class="position-absolute">Price € Approx</span>
                </div>
                <div class="col-2 p-0 m-0 apartment dropdown border-0">
                  <button class="btn p-0 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Apartment</button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Apartment</a></li>
                    <li><a class="dropdown-item" href="#">House</a></li>
                    <li><a class="dropdown-item" href="#">Property</a></li>
                    <li><a class="dropdown-item" href="#">Apartment building</a></li>
                    <li><a class="dropdown-item" href="#">Investment/Precaution</a></li>
                  </ul>
                </div>
                <div class="col-1 p-0 m-0 me-3 purchase dropdown border-0">
                  <button class="btn p-0 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Purchase</button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Purchase</a></li>
                    <li><a class="dropdown-item" href="#">Rent</a></li>
                  </ul>
                </div>
                <div class="dropdown col-1 room p-0 m-0 border-0">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Room
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">from 1</a></li>
                    <li><a class="dropdown-item" href="#">Starting at 2</a></li>
                    <li><a class="dropdown-item" href="#">from 3</a></li>
                    <li><a class="dropdown-item" href="#">from 4</a></li>
                    <li><a class="dropdown-item" href="#">any</a></li>
                  </ul>
                </div>
                <button submit="submit" class="col p-0 m-0 border-0 background-transparent find_btn">FIND</button>
                <div class="d-none">
                  <div class="col-2 zip_city zip_city_input position-relative">
                    <i class="fa-solid fa-location-dot"></i>
                    <input class="border-0" type="text" placeholder="Zip or City">
                    <span class="position-absolute">Zip or City</span>
                  </div>
                  <div class="col-2 zip_city position-relative">
                    <input class="border-0" type="text" placeholder="Area m² Approx.">
                    <span class="position-absolute">Area m<sup>2</sup> Approx</span>
                  </div>
                  <div class="col-2 zip_city position-relative">
                    <input class="border-0" type="text" placeholder="Price € Approx.">
                    <span class="position-absolute">Price € Approx</span>
                  </div>
                  <div class="col apartment dropdown border-0">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Apartment</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Apartment</a></li>
                      <li><a class="dropdown-item" href="#">House</a></li>
                      <li><a class="dropdown-item" href="#">Property</a></li>
                      <li><a class="dropdown-item" href="#">Apartment building</a></li>
                      <li><a class="dropdown-item" href="#">Investment/Precaution</a></li>
                    </ul>
                  </div>
                  <div class="col-1 me-3 purchase dropdown border-0">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Purchase</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Purchase</a></li>
                      <li><a class="dropdown-item" href="#">Rent</a></li>
                    </ul>
                  </div>
                  <div class="dropdown col border-0">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Room
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">from 1</a></li>
                      <li><a class="dropdown-item" href="#">Starting at 2</a></li>
                      <li><a class="dropdown-item" href="#">from 3</a></li>
                      <li><a class="dropdown-item" href="#">from 4</a></li>
                      <li><a class="dropdown-item" href="#">any</a></li>
                    </ul>
                  </div>
                  <button submit="submit" class="col border-0 background-transparent find_btn">FIND</button>
                </div>
              </div>
              <div class="d-none phone_filter flex-column">
                <ul class="list-unstyled rent_buy d-none gap-5">
                  <li class="active">To Rent</li>
                  <li class="buy">Buy</li>
                </ul>
                <ul class="list-unstyled d-flex rent_list border-top flex-wrap justify-content-center p-0 mt-3">
                  <li class="d-flex flex-column justify-content-center align-items-center active_bg border-start border-bottom"><i class="fa-solid fa-building"></i><span class="">Apartment</span></li>
                  <li class="d-flex flex-column justify-content-center align-items-center border-start border-end border-bottom"><i class="fa-sharp fa-solid fa-house"></i><span class="">House</span></li>
                  <li class="d-flex flex-column justify-content-center align-items-center border-end border-bottom"><i class="fa-solid fa-tree"></i><span class="">Property</span></li>
                  <li class="flex-column justify-content-center align-items-center border apart_build"><i class="fa-regular fa-building"></i><span class="text-center">Apartment  Building</span></li>
                  <li class="flex-column justify-content-center align-items-center border-end border-bottom border-top invest"><i class="fa-solid fa-tree"></i><span class="text-center">Investment Provision</span></li>
                </ul>
                <span class="more_opsn">More Options ></span>
                <div class="col-2 zip_city zip_city_input position-relative d-flex align-items-center">
                  <i class="fa-solid fa-location-dot px-2"></i>
                  <input class="border-0" type="text" placeholder="Zip or City">
                </div>
                <div class="col-2 zip_city position-relative ps-2">
                  <input class="border-0" type="text" placeholder="Area m² Approx.">
                </div>
                <div class="col-2 zip_city position-relative ps-2">
                  <input class="border-0" type="text" placeholder="Price € Approx.">
                </div>
                <div class="col mt-3 apartment dropdown border-0">
                  <button class="btn d-flex justify-content-between align-items-center w-100 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Apartment</button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Apartment</a></li>
                    <li><a class="dropdown-item" href="#">House</a></li>
                    <li><a class="dropdown-item" href="#">Property</a></li>
                    <li><a class="dropdown-item" href="#">Apartment building</a></li>
                    <li><a class="dropdown-item" href="#">Investment/Precaution</a></li>
                  </ul>
                </div>
                <div class="col-1 w-100 me-5 purchase dropdown border-0">
                  <button class="btn d-flex justify-content-between align-items-center w-100 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Purchase</button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Purchase</a></li>
                    <li><a class="dropdown-item" href="#">Rent</a></li>
                  </ul>
                </div>
                <div class="dropdown col border-0 ps-2">
                  <button class="btn btn-secondary dropdown-toggle w-100 d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Room
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">from 1</a></li>
                    <li><a class="dropdown-item" href="#">Starting at 2</a></li>
                    <li><a class="dropdown-item" href="#">from 3</a></li>
                    <li><a class="dropdown-item" href="#">from 4</a></li>
                    <li><a class="dropdown-item" href="#">any</a></li>
                  </ul>
                </div>
                <button submit="submit" class="col border-0 background-transparent find_btn">FIND</button>
                <span class="more_pocblit">More possibilities? <a class="" href="#">For detailed search</a></span>
              </div>
            </div>
          </div>
          <?php include 'footer.php' ?>
        </div>
      </div>
      <!-- Wrapper end -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/find_my_home.js"></script>