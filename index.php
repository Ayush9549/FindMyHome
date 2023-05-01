<!doctype html>
<html lang="en">
  <head>
    <!--========================= Required meta tags =========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Properties on Findmyhome - apartments & houses throughout Austria</title>
    <!--========================= Bootstrap CSS =========================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <section class="privacy_policy">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!--========================= Header Start =========================-->
          <?php include 'header_navbar.php'; ?>
          <section class="hero_section  mb-4 p-0">
            <!--=========================  =========================-->
            <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
              <div class="carousel-inner video_slider">
                <div class="carousel-item active">
                  <video class="w-100 overflow-hidden" loop autoplay muted>
                    <source src="./assets/img/Header_9.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="carousel-item">
                  <video class="w-100 overflow-hidden" loop autoplay muted>
                    <source src="./assets/img/Header_8.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="carousel-item">
                  <video class="w-100 overflow-hidden" loop autoplay muted>
                    <source src="./assets/img/Header_7.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
              <div class="filter_container position-absolute">
                <h1 class="title bg-white d-flex text-nowrap">YOU'LL BE AT HOME SOON!</h1>
                <div class="filter row row-cols-lg-7 m-0 d-flex justify-content-between align-items-center w-100">
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
                  <button submit="submit" class="col p-0 m-0 border-0 background-transparent find_btn"><a class="d-block h-100 pt-4 text-white" href="condominiums_list.php">FIND</a></button>
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
          </section>
          <!--========================= PAID AD =========================-->
          <div class="advertisment">
            <span class="text-secondary">Paid Ad</span>
            <iframe id="" src="https://fas.findmyhome.at/www/admin/html5bannerpreview.php?url=https://fas1.findmyhome.at/www/upload/banner_3510/1018_export/index.html&amp;clickurl=https://fas.findmyhome.at/www/delivery/ck.php?oaparams=2__bannerid=3510__zoneid=177__cb=93c9abd813__oadest=https%3A%2F%2Fwww.3si.at%2Fde%2Fbautraeger-projekte%2F%3Futm_source%3Dfindmyhome%26utm_medium%3Dstartseite&amp;dest=https://www.3si.at/de/bautraeger-projekte/?utm_source=findmyhome&amp;utm_medium=startseite&amp;cb=" width="100%" height="100%" frameborder="0" scrolling="no" style="width: 100% !important; height: 100 !important;"> </iframe>
          </div>
          <section class="search_recomandtion text-nowrap mt-4">
            <h4>OUR SEARCH RECOMMENDATION</h4>
            <div class="slide-container">
              <div class="slide-content">
                <div class="swiper-wrapper">
                  <a href="virtual_visit.php" title="To The Search Agent" class="swiper-slide p">
                    <img src="./assets/img/kachel_virtuell_desktop.jpg" alt="">
                    <strong>VIRTUAL VISIT</strong>
                  </a>
                  <a href="responsible_homes.php" title="To The Search Agent" class="swiper-slide p">
                    <img src="./assets/img/kachel_responsiblehomes_desktop.jpg" alt="">
                    <strong>RESPONSIBLE HOMES</strong>
                  </a>
                  <a href="#" title="To The Search Agent" class="swiper-slide p">
                    <img src="./assets/img/kachel_premiumliving_desktop.jpg" alt="">
                    <strong>PREMIUM LIVING</strong>
                  </a>
                  <a href="register.php" title="To The Search Agent" class="swiper-slide p">
                    <img src="./assets/img/kachel_suchagentin_desktop.jpg" alt="">
                    <strong>LET IT BE FOUND</strong>
                  </a>
                  <a href="new_residental_projects.php" title="To The Search Agent" class="swiper-slide p">
                    <img src="./assets/img/kachel_nwp_desktop.jpg" alt="">
                    <strong>NEW RESIDENTIAL PROJECTS</strong>
                  </a>
                </div>
              </div>
              <div class="swiper-button-prev swiper-navBtn"><i class="fa-solid fa-chevron-left"></i></div>
              <div class="swiper-button-next swiper-navBtn"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
          </section>
          <section class="recommended p-0 m-0 mt-5">
            <h2><span>RECOMMENDED</span> TOP REAL ESTATE</h2>
            <div class="row mt-4 p-0 m-0">
              <div class="col-8 p-0 m-0">
                <div class="auto_slider mb-4">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner overflow-hidden">
                      <div class="carousel-item active">
                        <a href="details.php">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/82_TO1.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Property</div>
                              <div class="apart_area fw-bold ">97 m<sup>2</sup> - 3500 Krems</div>
                              <a class="view_property text-white" href="details.php">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/83_TO2.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Rent</div>
                              <div class="apart_area fw-bold ">134 m<sup>2</sup> - 1190 Vienna</div>
                              <a class="view_property text-white" href="#">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/86_TO4.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Property</div>
                              <div class="apart_area fw-bold ">97 m<sup>2</sup> - 3500 Krems</div>
                              <a class="view_property text-white" href="#">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/87_TO5.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Property</div>
                              <div class="apart_area fw-bold ">97 m<sup>2</sup> - 3500 Krems</div>
                              <a class="view_property text-white" href="#">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/84_TO3.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Rent</div>
                              <div class="apart_area fw-bold ">134 m<sup>2</sup> - 1190 Vienna</div>
                              <a class="view_property text-white" href="#">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/85_TO6.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold fw-bold mt-2">Apartment - Property</div>
                              <div class="apart_area fw-bold ">97 m<sup>2</sup> - 3500 Krems</div>
                              <a class="view_property text-white" href="#">View Property</a>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <i class="fa-solid fa-chevron-right carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"></i>
                    <i class="fa-solid fa-chevron-left carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></i>
                  </div>
                </div>
                <h2>Little helpers: <span>our </span>services <span>for everything to do with living</span></h2>
                <div class="click_slider mt-4">
                  <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="helpers_service.php">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_rechtswissen.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Legal Knowledge</div>
                              <div class="apart_area fw-bold">Tips & information on real estate law</div>
                              <a class="view_property text-white" href="#">FOR LEGAL INFORMATION</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_lesenswert.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Worth</div>
                              <div class="apart_area fw-bold">reading Entertainment & information about living</div>
                              <a class="view_property text-white" href="#">TO THE NEWS AREA</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_suchagentin.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Search agent</div>
                              <div class="apart_area fw-bold">Find real estate easily and free of charge</div>
                              <a class="view_property text-white" href="#">TO THE SEARCH AGENT</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_sozial.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Facebook</div>
                              <div class="apart_area fw-bold">Nice, funny & with lots of competitions</div>
                              <a class="view_property text-white" href="#">GO TO FACEBOOK PAGE</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/typensuche.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Type search</div>
                              <div class="apart_area fw-bold">Finding the right property is easy and playful</div>
                              <a class="view_property text-white" href="#">FOR TYPE SEARCH</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_umzug.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Moving</div>
                              <div class="apart_area fw-bold">This is how much it costs to move to your new home</div>
                              <a class="view_property text-white" href="#">FOR RELOCATION COMPARISON</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_finanzierung.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Financing</div>
                              <div class="apart_area fw-bold">Finance your property purchase</div>
                              <a class="view_property text-white" href="#">FOR FINANCING</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/fixkosten.png" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Fixed Costs Little Helpers</div>
                              <div class="apart_area fw-bold">How to: save really good money.</div>
                              <a class="view_property text-white" href="#">Fixed cost helper</a>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                          <div class="auto_slider_card border-0 ">
                            <div class="pic"><img src="./assets/img/helferlein_immomarie.jpg" alt=""></div>
                            <div class="slider_card_body">
                              <div class="card_title fw-bold mt-2">Sell Yourself</div>
                              <div class="apart_area fw-bold">It's easy to sell with ImmoMarie</div>
                              <a class="view_property text-white" href="#">TO REAL ESTATE</a>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <i class="fa-solid fa-chevron-right carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next"></i>
                    <i class="fa-solid fa-chevron-left carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev"></i>
                  </div>
                </div>
                <!--========================= for mobile screen =========================-->
                <div class="helper_container">
                  <h2><span>Our </span><strong>little helpers</strong><span> FOR YOUR </span> <strong>NEW HOME</strong></h2>
                  <div class="card mt-4 border-0">
                    <div class="card_img">
                      <img src="./assets/img/helferlein_uebersicht.jpg" alt="">
                    </div>
                    <div class="helper_card_body mt-3 d-flex justify-content-center flex-column">
                      <h6>Overview: real estate services</h6>
                      <p>All of our property search, relocation and housing services at a glance.</p>
                      <a href="#">MORE</a>
                    </div>
                  </div>
                  <hr>
                  <div class="card mt-4 border-0">
                    <div class="card_img">
                      <img src="./assets/img/db_500x238px.jpg" alt="">
                    </div>
                    <div class="helper_card_body mt-3 d-flex justify-content-center flex-column">
                      <h6>Overview: real estate services</h6>
                      <p>How to: save really good money. This is how you can easily find the cheapest providers</p>
                      <a href="#">Fixed cost helpers</a>
                    </div>
                  </div>
                  <hr>
                  <div class="card mt-4 border-0">
                    <div class="card_img">
                      <img src="./assets/img/helferlein_lesenswert.jpg" alt="">
                    </div>
                    <div class="helper_card_body mt-3 d-flex justify-content-center flex-column">
                      <h6>Worth Reading</h6>
                      <p>Living trends in Austria, statistics, legal tips, test results, famous properties from films and games</p>
                      <a href="#">TO THE NEWS AREA</a>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class="suits_property">
                  <h5><span>Which property suits </span><strong>your type?</strong></h5>
                  <div class="suits_property_cards d-flex justify-content-between flex-wrap">
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/youngster.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>youngsters</h6>
                        <p>Here your great freedom awaits - even for the smaller purse.</p>
                        <a href="#">SEEk</a>
                      </div>
                    </div>
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/frischverliebt.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>Newly in love</h6>
                        <p class="nil">Lots of space for really big feelings.</p>
                        <a href="#">SEEk</a>
                      </div>
                    </div>
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/familienmensch.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>family guy</h6>
                        <p>Here you will find real estate for your family - in every size.</p>
                        <a href="#">SEEk</a>
                      </div>
                    </div>
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/chefetage.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>executive floor</h6>
                        <p>You have achieved a lot - now you also want to get a lot.</p>
                        <a class="mt-3" href="#">SEEk</a>
                      </div>
                    </div>
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/anleger.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>investor</h6>
                        <p>Your capital will also find the right home here.</p>
                        <a href="#">SEEk</a>
                      </div>
                    </div>
                    <div class="suits_property_card border-bottom border-2">
                      <div class="suits_property_card_img"><img src="./assets/img/highclass.jpg" alt=""></div>
                      <div class="suits_property_card_body d-flex flex-column justify-content-center">
                        <h6>high class</h6>
                        <p>In these properties, no day is ordinary.</p>
                        <a href="#">SEEk</a>
                      </div>
                    </div>
                  </div>
                  <a class="mt-4" href="#">Show more types ></a>
                </div>
                <hr>
                <!--========================= .home_news start =========================-->
                <div class="home_news">
                  <h2 class="title">HOME <strong>NEWS</strong></h2>
                  <div class="row p-0 gap-4 m-0 mt-3">
                    <div class="col-4 p-0">
                      <div title="Read Artical" class="pic"><img src="./assets/img/deborah-diem-pnvPGgk4aZ0-unsplash-683x1024.jpg" alt=""></div>
                    </div>
                    <div class="col-7 p-0 m-0 pt-2">
                      <a title="Read Artical" class="a_color text-decoration-underline" href="#">Furnishing tips for small apartments</a>
                      <p class="mt-5 mb-4">Furnishing tips for small apartments Little space means little storage space? That is only partly true. Because there are now all sorts of ways to set up your home in such a way that you can also be in a ...</p>
                      <a title="Read Artical" class="more text-white" href="#">More</a>
                    </div>
                  </div>
                  <div class="row small_card p-0 gap-4 m-0 mt-4  mb-5">
                    <div class="col-4 p-0">
                      <div title="Read Artical" class="pic"><img src="./assets/img/paragraph-g79823d943_1280-768x576.jpg" alt=""></div>
                    </div>
                    <div class="col-7 p-0 m-0 pt-2">
                      <a title="Read Artical" class="a_color text-decoration-underline" href="#">Furnishing tips for small apartments</a>
                      <p class="mt-5 mb-4">Furnishing tips for small apartments Little space means little storage space? That is only partly true. Because there are now all sorts of ways to set up your home in such a way that you can also be in a ...</p>
                      <a title="Read Artical" class="more text-white" href="#">More</a>
                    </div>
                  </div>
                  <a class="a_color text-decoration-underline" href="#"><span class="w-100 d-flex justify-content-center">To all real estate news</span></a>
                </div>
                <hr>
                <!--========================= .home_news end =========================-->
                <!--========================= .portal Start =========================-->
                <div class="portal">
                  <h2>WELCOME TO FINDMYHOME.AT - <span>YOUR REAL ESTATE PORTAL</span></h2>
                  <p>With your <a href="real_estate_search.php" title="Property to Search">real estate search</a> , you've come to the right place at FindMyHome.at. Simply use one of our search functions - the quick search, the detailed search, the unique type search or our automatic search agent - and you will receive the latest offers in Austria. More than 350 of the most renowned brokers and property developers present fresh objects of all kinds here every day, from cozy houses in the country to exclusive penthouse apartments in the city, from building plots to dream <a href="#" title="Plots">of</a>.</p>
                  <p>Quick and detailed searches are for everyone who already has a precise idea of what the new property should look like. For those who are not quite sure yet, we offer the innovative <a title="Type Search" href="search_type.php">type search</a> exclusively on FindMyHome.at : based on over 22 years of experience, we have predefined 12 search types that provide a suitable home in every situation: from youngsters to high-class clientele , from young couples to sea romantics, from climbers to the executive floor. But what's the point of long talk, it's best to just try it out!</p>
                  <p>And in the unlikely event that you still don't find the perfect property despite the huge offer, simply activate the FindMyHome.at <a href="register.php" title="The FindMyHome.at search agent">search agent</a> - it will deliver all new releases that match your search criteria directly to your inbox! Of course completely free of charge, reliably and completely automatically!</p>
                  <p>If you like it very exclusive, you will be really happy with the <a href="#" title="Luxury real estate and luxury apartments on Premium Living" target="_blank">luxury real estate and luxury apartments on Premium Living - our own platform for particularly beautiful real estate.</a> When it comes to quality of life and the price only plays a secondary role, these houses and apartments are just the thing.</p>
                  <p>These and many other advantages are the result of more than <a href="about_us.php" title="FindMyHome.at History">22 years of market experience</a> - since 2001 it has been our task to offer Austria's property seekers the home they have always dreamed of. And just as our past was shaped by innovation and further development, you can already look forward to the future developments of FindMyHome.at</p>
                  <p>We wish you every success in your search!</p>
                </div>
                <!--========================= .portal end =========================-->
              </div>
              <div class="col-4 p-0 m-0 ps-4">
                <div class="brings_you_home pe-3 mb-5">
                  <h3><strong>This is how FindMyHome.at</strong><span> brings you home</span></h3>
                  <ul class="list-unstyled mt-3">
                    <li class="d-flex">
                      <i class="fa-solid fa-check text-danger mt-1 me-2"></i>
                      <span class="text-secondary d-block w-100">Since 2001, with over
                        <a class="d-block text-decoration-underline" href="#">25,000 current properties every day.</a>
                      </span>
                    </li>
                    <li class="d-flex mt-3">
                      <i class="fa-solid fa-check text-danger mt-1 me-2"></i>
                      <span class="text-secondary d-block w-100">The latest properties by email with the
                        <a class="d-block text-decoration-underline" href="register.php">ree search agent</a>
                      </span>
                    </li>
                    <li class="d-flex mt-3">
                      <i class="fa-solid fa-check text-danger mt-1 me-2"></i>
                      <span class="text-secondary">
                        <a class="text-decoration-underline" href="#">Quality Program</a> with verified providers through user ratings
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="search_state row p-0 m-0 mb-4">
                  <h5>Search <strong>States</strong></h5>
                  <div class="col-7 p-0 m-0">
                    <ul class="list-unstyled">
                      <li><a href="#">Real Estate Vienna</a></li>
                      <li><a href="#">Tyrol</a></li>
                      <li><a href="#">Salzburg</a></li>
                      <li><a href="#">Lower Austria</a></li>
                      <li><a href="#">Upper Austria</a></li>
                    </ul>
                  </div>
                  <div class="col-5 p-0 m-0">
                    <ul class="list-unstyled">
                      <li><a href="#">Burgenland</a></li>
                      <li><a href="#">Styria</a></li>
                      <li><a href="#">Vorarlberg</a></li>
                      <li><a href="#">Carinthia</a></li>
                    </ul>
                  </div>
                </div>
                <div class="search_state row p-0 m-0">
                  <h5>Browse <strong>Categories</strong></h5>
                  <div class="col-7 p-0 m-0">
                    <ul class="list-unstyled">
                      <li><a href="#">Flats</a></li>
                      <li><a href="#">condominiums</a></li>
                      <li><a href="#">Rental Flats</a></li>
                      <li><a href="#">Old Buildings</a></li>
                      <li><a href="#">New Build Flats</a></li>
                      <li><a href="#">Holiday Flats</a></li>
                    </ul>
                  </div>
                  <div class="col-5 p-0 m-0">
                    <ul class="list-unstyled">
                      <li><a href="#">Houses</a></li>
                      <li><a href="#">Land</a></li>
                      <li><a href="#">Rentals</a></li>
                      <li><a href="#">Property</a></li>
                      <li><a href="#">Rentals</a></li>
                      <li><a href="#">Apartment</a></li>
                      <li><a href="#">Hunting</a></li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="quality_bokers my-5">
                  <h3>THE QUALITY BROKERS</h3>
                  <span class="text-secondary gap-1 mt-5 mb-4">Rated by <strong>searchers</strong> , awarded by <strong>FindMyHome.at</strong> </span>
                  <div class="pic d-flex flex-column gap-4">
                    <img src="./assets/img/logo_686.jpg" title="-Logo FBI Immobilien GmbH" alt="">
                    <a class="a_color text-decoration-underline" href="404_error.php">FBI Real Estate Ltd</a>
                  </div>
                  <div class="pic d-flex flex-column mt-4 mb-5 gap-4">
                    <img src="./assets/img/logo_1618.jpg" alt="">
                    <a class="a_color text-decoration-underline" href="#">JP Real Estate</a>
                  </div>
                  <a class="quality_brokers px-4 text-white mb-4" href="#">Show all quality brokers</a>
                  <hr>
                </div>
                <!--========================= .review start =========================-->
                <div class="review">
                  <h5>Review</h5>
                  <div class="review_card row p-0 m-0">
                    <div class="col-12 d-flex gap-4">
                      <div class="pic"><img src="./assets/img/stephan_altenburg.jpg" alt=""></div>
                      <div class="d-flex flex-column justify-content-end">
                        <div class="name"><strong>Stephan Altenburg</strong></div>
                        <span>Altenburg realities</span>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <p>We show our portfolio at FindMyHome.at because the quality of the offers and the quality of the inquiries is excellent. Rightly one of the largest platforms in Austria.</p>
                    </div>
                  </div>
                  <div class="review_card row p-0 m-0 mt-2">
                    <div class="col-12 d-flex gap-4">
                      <div class="pic"><img src="./assets/img/christian_haidinger.jpg" alt=""></div>
                      <div class="d-flex flex-column justify-content-end">
                        <div class="name"><strong>Christian Haidinger</strong></div>
                        <span>RE/MAX Innova in Braunau</span>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <p>Quality is the only way to survive economically in the long term. It is therefore important that quality programs such as FindMyHome.at increase the confidence of buyers and sellers.</p>
                    </div>
                  </div>
                </div>
                <!--========================= .review End =========================-->
                <hr>
                <div class="fs-5 popular_cat">Popular <span>Categories</span></div>
              </div>
            </div>
          </section>
        </div>
      <?php include 'footer.php' ?>
      </div>
    </div>
    <!--========================= Wrapper end =========================-->
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/find_my_home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
  var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  infiniteLoop: true,
  autoplay: {
  delay: 2000,
  },
  navigation: {
  prevEl: ".swiper-button-prev",
  nextEl: ".swiper-button-next",
  },
  breakpoints:{
  0:
  {
  slidesPerView: 1,
  },
  520:
  {
  slidesPerView: 2,
  },
  950:
  {
  slidesPerView: 3,
  },
  },
  });
  </script>
</body>
</html>