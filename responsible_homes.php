<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsible Homes: Greener living!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsible_homes.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <section class="responsible_homes">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!-- Header Start -->
          <?php include 'header_navbar.php'; ?>
        </div>
        <div class="responsible_homes_container row p-0 m-0 mt-5 px-2">
          <div class="col-5 p-0 m-0"><img class="w-100" src="./assets/img/FMH_responsiblehomes_suche.jpg" alt=""></div>
          <div class="col-7 p-0 m-0 ps-4">
            <h3 class="mb-4">Responsible Homes: Greener living!</h3>
            <p>Finding a more sustainable home doesn't have to be complicated. Climate change shows how important it is to pay attention to our environment and to rethink many areas of our daily life. For this reason, we have not only created our own search option with 'Responsible Homes', but also label all ecologically heated properties with a green seal. You can simply select the federal state and type of purchase - then we will only show you properties that are heated ecologically.</p>
            <div class="prop_rent_filter d-flex flex-column justify-content-center align-items-center mt-5 py-5">
              <div class="">
                Form of Acquisition
              </div>
              <ul class="list-unstyled d-flex gap-1 text-uppercase mt-2">
                <li class="toggle_border prop">Property</li>
                <li class="rent">Rent</li>
              </ul>
              <div class="mt-4">Federal State</div>
              <!--======================== Property Select ========================-->
              <select class="mt-2 prop_select">
                <option value="9">Vienna - 1206 objects</option>
                <option value="1">Burgenland - 28 objects</option>
                <option value="2">Carinthia - 6 objects</option>
                <option value="3">Lower Austria - 407 objects</option>
                <option value="4">Upper Austria - 15 objects</option>
                <option value="5">Salzburg - 28 objects</option>
                <option value="6">Styria - 277 objects</option>
                <option value="7">Tyrol - 23 objects</option>
              </select>
              <!--======================== Rent select ========================-->
              <select class="mt-2 rent_select">
                <option value="9">Wien - 975 Objekte</option>
                <option value="1">Burgenland - 5 Objekte</option>
                <option value="3">Niederösterreich - 134 Objekte</option>
                <option value="4">Oberösterreich - 3 Objekte</option>
                <option value="5">Salzburg - 3 Objekte</option>
                <option value="6">Steiermark - 86 Objekte</option>
              </select>
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