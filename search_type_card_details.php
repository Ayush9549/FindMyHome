<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real estate for youngsters – the FindMyHome.at type search</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
      @media screen and (max-width:991px)
      {
        .search_type_card_details_container>div
        {
          width: 100% !important;
          padding-left: 0 !important;
        }

        .search_type_card_details_container>div:nth-child(1)
        {
          height: 50% !important;
        }
      }
    </style>
  </head>
  <body>
    <section class="search_type_card_details">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!-- Header Start -->
          <?php include 'header_navbar.php'; ?>
          <!--======================= search_type_card_details =======================-->
          <div class="fs-5 mt-4 p-0">First apartment, shared apartment, student apartment - the right property for young people.</div>
          <div class="row p-0 m-0 mt-5 search_type_card_details_container">
            <div class="col-5 p-0 m-0 h-75 bg-dark">
              <img class="w-100 h-100" src="./assets/img/youngster.jpg" alt="">
            <a class="text-decoration-underline a_color mt-5 d-block" href="#">Back to overview</a>
            </div>
            <div class="col-7 p-0 m-0 ps-4">
              <div class="fs-5"><strong>The youngster</strong></div>
              <div class="fw-bold my-4">Your great freedom awaits here – even for a smaller budget.</div>
              <p class="mb-5">Whether they are 18 or only in their mid-30s: at some point, every child will have a completely new life when they have their first apartment of their own. Clean up or not, come home or not, sleep in late or not. As a headquarters for the exciting time after the children's room, there are many possibilities as long as they remain within a reasonable financial framework. But they all have one thing in common: your first apartment will remain unforgettable.</p>
              <a class="text-white text-uppercase main_bg_color py-2 px-4" href="#">take me Home!</a>
            </div>
          </div>
            <!-- Wrapper end -->
        </div>
        <?php include 'footer.php' ?>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/find_my_home.js"></script>
  </body>
</html>