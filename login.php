<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Immobilien auf Findmyhome - Wohnungen & Häuser in ganz Österreich</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/search_agent.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <section class="privacy_policy">
      <div class="wrapper">
        <div class="row p-0 m-0">
          <!-- Header Start -->
          <?php include 'header_navbar.php'; ?>
          <section class="register_container d-flex pb-4">
            <form class="form d-flex flex-column bg-white">
              <div class="title">Login to my account</div>
              <div class="inputs mt-2">
                <input type="email" class="email w-100 border-0" placeholder="E-Mail Address: eg. meinemail@adresse.at">
                <input type="password" class="password w-100 border-0" minlength="4" maxlength="8" placeholder="Password: eg. 12345">
              </div>
              <button class="register_btn d-flex mt-4 mb-4">to register</button>
              <span class="text-secondary">not registered yet?</span>
              <a href="register.html">To Register</a>
              <span class="text-secondary mt-4">Forgot Password?</span>
              <a href="register.html">Request new password</a>
            </form>
            <div class="mt-4">
              <h2>Let someone find you instead of looking for it yourself</h2>
              <p>Take time for the beautiful moments in life. Meanwhile, our search agent finds your new home.</p>
            </div>
          </section>
          <section class="facility mt-5 ps-2">
            <div class="row p-0 m-0">
              <div class="col-6 p-0 m-0">
                <div class="free">
                  <h5><i class="fa-solid fa-check me-2"></i>For free</h5>
                  <p>The FindMyHome.at search agent is completely free for you. No matter whether you create one or ten search requests. Whether you search for a week or several months. No matter how many properties the search agent finds for you. It is and will remain free of charge for you.</p>
                </div>
                <div class="flexible">
                  <h5><i class="fa-solid fa-check me-2"></i>Flexible</h5>
                  <p>The number of your searches (up to 10). The interval of notifications (from daily to once a week). All details of the search requests. Use our search agent flexibly adapted to your personal needs.</p>
                </div>
                <div class="automatically">
                  <h5><i class="fa-solid fa-check me-2"></i>Automatically</h5>
                  <p>The FindMyHome.at search agent automatically scans all real estate offers according to your search criteria. This applies initially to all existing offers, and then to all new properties - that's 700 to 1,000 new properties every day.</p>
                </div>
                <div class="exactly mb-5">
                  <h5><i class="fa-solid fa-check me-2"></i>Exactly</h5>
                  <p>house or apartment. rent or property. Size, price, interesting zip codes. balcony or terrace. You create your search request and only receive properties that exactly meet the desired criteria.</p>
                </div>
                <a class="text-decoration-underline a_color" href="overview_helper.php">All FindMyHome.at services related to real estate and living</a>
              </div>
              <div class="col-6 p-0 m-0 ps-5">
                <div class="free">
                  <h5><i class="fa-solid fa-check me-2"></i>Comfortable</h5>
                  <p>The nice thing about the search agent: She finds suitable properties based on your search profile and presents them to you on a silver platter - conveniently by e-mail. Just check your email and choose your new home.</p>
                </div>
                <div class="flexible">
                  <h5><i class="fa-solid fa-check me-2"></i>Learn Faster</h5>
                  <p>Reacting quickly is important for a successful property search - many people are interested in good offers. With the FindMyHome.at SuchAgentin you will be the first to know about great offers, as you will receive them immediately by e-mail.</p>
                </div>
                <div class="automatically">
                  <h5><i class="fa-solid fa-check me-2"></i>Search Shorter</h5>
                  <p>The shorter the property search, the better for you. With the FindMyHome.at SuchAgentin you can significantly reduce the duration of the search. Because with this search service you will regularly receive all suitable properties by e-mail.</p>
                </div>
                <div class="exactly">
                  <h5><i class="fa-solid fa-check me-2"></i>Secure</h5>
                  <p>You only have to provide an e-mail address so that we can send you the properties we have found. Of course, we do not pass the e-mail on to third parties. We also guarantee secure processes for your SuchAgent account.</p>
                </div>
              </div>
            </div>
          </section>
          <?php include 'footer.php' ?>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/find_my_home.js"></script>
</body>
</html>