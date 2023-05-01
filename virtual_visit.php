<!doctype html>
<html lang="en">
  <head>
    <!--========================= Required meta tags =========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINDMYHOME.AT Virtual Search |  Real estate with video and 360 degrees</title>
    <!--========================= Bootstrap CSS =========================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/virtual_visit.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <section class="virtual_visit">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!--========================= Header Start =========================-->
          <?php include 'header_navbar.php'; ?>
        </div>
        <div class="virtual_visit_container row p-0 m-0 mt-5 px-2">
          <div class="col-5 p-0 m-0"><img class="w-100" src="./assets/img/FMH_Live_Suche.jpg" alt=""></div>
          <div class="col-7 p-0 m-0 ps-4">
            <h3 class="mb-4">Visit the property: Simply from home!</h3>
            <p>Finding the perfect new home doesn't have to be exhausting. Together with our renowned and innovative real estate partners, we can make viewing your new property as easy as possible for you: Immerse yourself in your new four walls, discover the kitchen, bathroom and balcony easily via video or 360° tour. Simply select your postal code and type of purchase - we will then show you all the properties that have a digital tour to offer.</p>
            <div class="mt-5">
              <div class="mb-2">
                <span>Form of Acquisition</span>
                <select name="" class="w-100 py-2 ps-3 rounded-2">
                  <option value="1" selected="selected">Property</option>
                  <option value="2">Rent</option>
                </select>
              </div>
              <!--========================= Federal State Dropdown =========================-->
              <div class="mb-5">
                <span>Federal State</span>
                <select name="" class="w-100 py-2 ps-3 rounded-2">
                  <option class="burg" value="1">Burgenland</option>
                  <option value="2">Carinthia</option>
                  <option value="3">Lower Austria</option>
                  <option value="4">Upper Austria</option>
                  <option value="5">Salzburg</option>
                  <option value="6">Styria</option>
                  <option value="7">Tyrol</option>
                  <option value="8">Vienna</option>
                </select>
              </div>
              <!--========================= Districts dropdown =========================-->
              <div class="mb-1">
                <span>Districts</span>
                <select name="" class="prop_district_select_8 w-100 py-2 ps-3 rounded-2">
                  <option>All of Vienna - 427 Objects</option>
                  <option>Vienna 1st, inner city - 5 Objects</option>
                  <option>Vienna 2nd, Leopoldstadt - 8 Objects</option>
                  <option>Vienna 3rd, Landstrasse - 13 Objects</option>
                  <option>Vienna 4th, Wieden - 6 Objects</option>
                  <option>Vienna 5th, Margareten - 14 Objects</option>
                  <option>Vienna 6th, Mariahilf - 2 Objects</option>
                  <option>Vienna 7th, new building - 1 Objects</option>
                  <option>Vienna 8th, Josefstadt - 4 Objects</option>
                  <option>Vienna 9th, Alsergrund - 6 Objects</option>
                  <option>Vienna 10th district, Favoriten - 24 Objects</option>
                  <option>Vienna 11th, Simmering - 1 Objects</option>
                  <option>Vienna 12th, Meidling - 30 Objects</option>
                  <option>Vienna 13th, Hietzing - 26 Objects</option>
                  <option>Vienna 14th, Penzing - 29 Objects</option>
                  <option>Vienna 15th, Rudolfsheim-Fünfhaus - 7 Objects</option>
                  <option>Vienna 16th, Ottakring - 9 Objects</option>
                  <option>Vienna 17th, Hernals - 8 Objects</option>
                  <option>Vienna 18th, Währing - 18 Objects</option>
                  <option>Vienna 19th, Döbling - 150 Objects</option>
                  <option>Vienna 20th, Brigittenau - 8 Objects</option>
                  <option>Vienna 21st, Floridsdorf - 9 Objects</option>
                  <option>Vienna 22nd, Donaustadt - 43 Objects</option>
                  <option>Vienna 23rd, Liesing - 6 Objects</option>
                </select>
              </div>
              <div class="take_home_btn mt-5 text-uppercase">take me home!</div>
            </div>
          </div>
          <a class="text-decoration-underline mt-5" href="index.php">To Home Page</a>
        </div>
        <?php include 'footer.php' ?>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/find_my_home.js"></script>
  </body>
</html>