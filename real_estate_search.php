<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detailed property search |  FindMyHome.at real estate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/adjust_my_result.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/real_estate_search.css">
    <link rel="icon" type="text/css" href="./assets/img/favicon-128.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <section class="adjust_my_result">
      <div class="wrapper">
        <div class="row gap-4 p-0 m-0">
          <!-- Header Start -->
          <?php include 'header_navbar.php'; ?>
          <!-- Nav end -->
          <div class="p-0 m-0">
            <div class="hero_img w-100 fs-4 position-relative">
              <img class="w-100 h-100" src="./assets/img/Immobiliensuche_Kinder_aus_dem_Haus_FindMyHome.at_de.jpg" alt="">
              <div class="position-absolute ps-4">
                <div>Our children got everything from us.</div>
                <strong>Now it's our turn again!</strong>
              </div>
            </div>
            <div class="my-3 fs-4"><strong>PROPERTY SEARCH</strong> WITH AN EYE FOR DETAIL</div>
            <div class="fw-bold mb-4">This is how my home should be...</div>
            <div class="row buy_container border-bottom p-0 m-0 pb-4">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>I want to buy</strong> a property</div>
              </div>
              <div class="col-9 p-0 m-0">
                <ul class="list-unstyled d-flex flex-wrap gap-4">
                  <li class="border remove">Apartment</li>
                  <li class="border remove">House</li>
                  <li class="border prop">Property</li>
                  <li class="border remove">Apartment Building</li>
                  <li class="border remove">Special Objects</li>
                  <li class="border remove">Investment Provision Apartment</li>
                </ul>
              </div>
            </div>
            <div class="row buy_container border-bottom p-0 m-0 mt-5 pb-4">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>I want to rent</strong> a property</div>
              </div>
              <div class="col-9 p-0 m-0">
                <ul class="list-unstyled d-flex flex-wrap gap-4">
                  <li class="border remove">Apartment</li>
                  <li class="border remove">House</li>
                  <li class="border prop">Property</li>
                  <li class="border remove">Special Object</li>
                </ul>
              </div>
            </div>
            <div class="row particularities p-0 m-0 mt-5">
              <div class="col-3 p-0 m-0"><div class="title"><strong>Particularities</strong></div></div>
              <div class="col-9 p-0 m-0">
                <ul class="list-unstyled d-flex flex-wrap gap-4">
                  <li class="border">Balcony or Terrace</li>
                </ul>
              </div>
            </div>
            <div class="row room_container p-0 m-0 mt-5">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>Room</strong></div>
              </div>
              <div class="col-9 p-0 m-0">
                <ul class="list-unstyled d-flex flex-wrap gap-4">
                  <li class="border active_bg_buy">Any</li>
                  <li class="border">Form 1</li>
                  <li class="border">Startig at 2</li>
                  <li class="border">From 3</li>
                  <li class="border">From 4</li>
                </ul>
              </div>
            </div>
            <div class="row surface_container p-0 m-0 mt-5">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>Area m<sup>2</sup></strong></div>
              </div>
              <div class="col-9 p-0 m-0 d-flex gap-4">
                <input type="number" class="border-0 border-bottom rounded-0" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" name="" placeholder="From">
                <input type="number" class="border-0 border-bottom rounded-0" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Until'" name="" placeholder="Until">
              </div>
            </div>
            <div class="row surface_container border-bottom p-0 m-0 mt-4 pb-4">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>Price &euro;</strong></div>
              </div>
              <div class="col-9 p-0 m-0 d-flex gap-4">
                <input type="number" class="border-0 border-bottom rounded-0" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" name="" placeholder="From">
                <input type="number" class="border-0 border-bottom rounded-0" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Until'" name="" placeholder="Until">
              </div>
            </div>
            <div class="row country_container p-0 m-0 mt-4">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>Country</strong></div>
              </div>
              <div class="col-9 p-0 m-0 d-flex align-items-center gap-4">
                <ul class="list-unstyled d-flex align-items-center flex-wrap gap-4 w-100">
                  <li class="active_bg_buy border austria">Austria</li>
                  <li class="border abord">Abroad</li>
                  <li class="border hide_country">Hungary</li>
                  <li class="border hide_country">Germany</li>
                  <li class="border hide_country">Italy</li>
                  <li class="border hide_country">Greece</li>
                </ul>
              </div>
            </div>
            <div class="row fedral_state_container p-0 m-0 mt-1">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>Federal State</strong></div>
              </div>
              <div class="col-9 p-0 m-0 d-flex align-items-center flex-column">
                <ul class="list-unstyled d-flex align-items-center flex-wrap gap-4 w-100">
                  <li class="active_bg_buy border vienna">Vienna</li>
                  <li class="border vienna_area">Vienna Area</li>
                  <li class="border lower_austr">Lower Austria</li>
                  <li class="border burgland">Burgenland</li>
                  <li class="border upr_austr">Upper Austria</li>
                  <li class="border salzburg">Salzburg</li>
                  <li class="border stria">Styria</li>
                  <li class="border carinthia">Carinthia</li>
                  <li class="border tyrol">Tyrol</li>
                  <li class="border vorarlberg">Vorarlberg</li>
                </ul>
              </div>
            </div>
            <div class="row district_container p-0 m-0 mt-1 border-bottom pb-5">
              <div class="col-3 p-0 m-0">
                <div class="title"><strong>District</strong></div>
              </div>
              <div class="col-9 p-0 m-0 align-items-center">
                <ul class="list-unstyled vienna_list flex-wrap gap-4">
                  <li class="border fprop active_bg_buy">Vienna(Total)</li>
                  <li class="border fremove">Vienna 1st,inner city</li>
                  <li class="border fremove">2nd district of Vienna, Leopoldstadt</li>
                  <li class="border fremove">Vienna 3rd, country road</li>
                  <li class="border fremove">Vienna 4th, Wieden</li>
                  <li class="border fremove">Vienna 5th, Margareten</li>
                  <li class="border fremove">Vienna 6th, Mariahilf</li>
                  <li class="border fremove">7th district of Vienna, new building</li>
                  <li class="border fremove">8th district of Vienna, Josefstadt</li>
                  <li class="border fremove">9th district of Vienna, Alsergrund</li>
                  <li class="border fremove">Vienna 10th, favorites</li>
                  <li class="border fremove">Vienna 11th, Simmering</li>
                  <li class="border fremove">12th district of Vienna, Meidling</li>
                  <li class="border fremove">13th district of Vienna, Hietzing</li>
                  <li class="border fremove">Vienna 14th, Penzing</li>
                  <li class="border fremove">Vienna 15th district, Rudolfsh.-Funfhaus</li>
                  <li class="border fremove">16th district of Vienna, Ottakring</li>
                  <li class="border fremove">Vienna 17th, Hernals</li>
                  <li class="border fremove">18th district of Vienna, Wahring</li>
                  <li class="border fremove">19th district of Vienna, Dobling</li>
                  <li class="border fremove">Vienna 20th, Brigittenau</li>
                  <li class="border fremove">Vienna 21st, Floridsdorf</li>
                  <li class="border fremove">Vienna 22nd, Donaustadt</li>
                  <li class="border fremove">Vienna 23rd, Liesing</li>
                </ul>
                <ul class="list-unstyled burgland_list flex-wrap gap-4 ">
                  <li class="border">Eisenstadt (City)</li>
                  <li class="border">Rust (town)</li>
                  <li class="border">Eisenstadt area</li>
                  <li class="border">casting</li>
                  <li class="border">Jennersdorf</li>
                  <li class="border">Mattersburg</li>
                  <li class="border">Neusiedl am See</li>
                  <li class="border">Oberpullendorf</li>
                  <li class="border">Oberwart</li>
                  <li class="border">Living at the lake</li>
                </ul>
                <ul class="list-unstyled carinthia_list flex-wrap gap-4 ">
                  <li class="border">Klagenfurt (City)</li>
                  <li class="border">Villach (City)</li>
                  <li class="border">hermagor</li>
                  <li class="border">Klagenfurt country</li>
                  <li class="border">Sankt Vitus an der Glan</li>
                  <li class="border">Hospital on the Drau</li>
                  <li class="border">Villach country</li>
                  <li class="border">peoples market</li>
                  <li class="border">Wolfsberg</li>
                  <li class="border">Feldkirchen</li>
                  <li class="border">Living at the lake</li>
                  <li class="border">ski regions</li>
                  <li class="border">Woerthersee</li>
                </ul>
                <ul class="list-unstyled lower_austr_list flex-wrap gap-4 ">
                  <li class="border">Krems an der Donau (City) </li>
                  <li class="border">Sankt Pölten (City) </li>
                  <li class="border">Sankt Pölten (Country) </li>
                  <li class="border">Wiener Neustadt (City) </li>
                  <li class="border">amstetten </li>
                  <li class="border">Bathe </li>
                  <li class="border">Bruck an der Leitha </li>
                  <li class="border">Gänserndorf </li>
                  <li class="border">Gmuend </li>
                  <li class="border">Hollabrunn </li>
                  <li class="border">horn </li>
                  <li class="border">Klosterneuburg </li>
                  <li class="border">Korneuburg </li>
                  <li class="border">Krems (country) </li>
                  <li class="border">lily field </li>
                  <li class="border">milking </li>
                  <li class="border">mistletoe stream </li>
                  <li class="border">Modling </li>
                  <li class="border">Neunkirchen </li>
                  <li class="border">Waidhofen an der Ybbs (City)</li>
                  <li class="border">Scheibbs </li>
                  <li class="border">Tulln </li>
                  <li class="border">Waidhofen an der Thaya </li>
                  <li class="border">Wiener Neustadt (Country) </li>
                  <li class="border">Vienna area total </li>
                  <li class="border">Vienna area West </li>
                  <li class="border">Vienna area east </li>
                  <li class="border">Vienna area north </li>
                  <li class="border">Vienna area south </li>
                  <li class="border">Zwettl </li>
                  <li class="border">Living at the lake </li>
                  <li class="border">Schwechat</li>
                </ul>
                <ul class="list-unstyled upr_austr_list flex-wrap gap-4 ">
                  <li class="border">Linz (City)</li>
                  <li class="border">Steyr (City)</li>
                  <li class="border">catfish (city)</li>
                  <li class="border">Braunau am Inn</li>
                  <li class="border">Eferding</li>
                  <li class="border">freetown</li>
                  <li class="border">gmunden</li>
                  <li class="border">Grieskirchen</li>
                  <li class="border">Kirchdorf an der Krems</li>
                  <li class="border">Linz country</li>
                  <li class="border">perg </li>
                  <li class="border">Ried im Innkreis</li>
                  <li class="border">Rohrbach</li>
                  <li class="border">Schärding</li>
                  <li class="border">Steyr country</li> <li class="border">Urfahr environment</li>
                  <li class="border">Voecklabruck</li>
                  <li class="border">Catfish Country</li>
                  <li class="border">Living at the lake</li>
                  <li class="border">ski regions</li>
                  <li class="border">Wolfgs. / Atters. / Mondsee</li>
                </ul>
                <ul class="list-unstyled salzburg_list flex-wrap gap-4 ">
                  <li class="border">Salzburg (City)</li>
                  <li class="border">Hallein </li>
                  <li class="border">Salzburg area </li>
                  <li class="border">Sankt Johann im Pongau </li>
                  <li class="border">Tamsweg </li>
                  <li class="border">Zell am See </li>
                  <li class="border">Living at the lake </li>
                  <li class="border">ski regions</li>
                </ul>
                <ul class="list-unstyled stria_list flex-wrap gap-4 ">
                  <li class="border">Graz (City) </li>
                  <li class="border">Bruck an der Mur </li>
                  <li class="border">Deutschlandsberg </li>
                  <li class="border">Feldbach </li>
                  <li class="border">Furstenfeld </li>
                  <li class="border">Graz surroundings </li>
                  <li class="border">Hartberg </li>
                  <li class="border">Judenburg </li>
                  <li class="border">Knittelfeld </li>
                  <li class="border">Leibnitz </li>
                  <li class="border">Leoben </li>
                  <li class="border">Liezen </li>
                  <li class="border">Mürzsurcharge </li>
                  <li class="border">Murau </li>
                  <li class="border">Radkersburg </li>
                  <li class="border">Voitsberg </li>
                  <li class="border">wheat </li>
                  <li class="border">ski regions </li>
                  <li class="border">Murtal</li>
                </ul>
                <ul class="list-unstyled tyrol_list flex-wrap gap-4 ">
                  <li class="border">nnsbruck city </li>
                  <li class="border">Imst </li>
                  <li class="border">Innsbruck country </li>
                  <li class="border">Kitzbuehel </li>
                  <li class="border">Kufstein </li>
                  <li class="border">land corner </li>
                  <li class="border">Lienz </li>
                  <li class="border">reutte </li>
                  <li class="border">black </li>
                  <li class="border">Living at the lake </li>
                  <li class="border">ski </li>
                  <li class="border">regions</li>
                </ul>
                <ul class="list-unstyled vorarlberg_list flex-wrap gap-4 ">
                  <li class="border">Bludenz </li>
                  <li class="border">Bregenz </li>
                  <li class="border">Dornbirn </li>
                  <li class="border">Feldkirch </li>
                  <li class="border">ski regions</li>
                </ul>
                <ul class="list-unstyled vienna_area_list flex-wrap gap-4 ">
                  <li class="border">Vienna area total </li>
                  <li class="border">Vienna area West </li>
                  <li class="border">Vienna area east </li>
                  <li class="border">Vienna area north </li>
                  <li class="border">Vienna area south</li>
                </ul>
              </div>
              <div class="row p-0 m-0">
                <div class="col-3 p-0 m-0"></div>
                <div class="col-9 p-0 m-0">
                  <div class="all_select mt-4">Select All</div>
                </div>
              </div>
            </div>
            <div class="row p-0 m-0 mt-5 object_container">
              <div class="col-3 p-0 m-0"><div class="title"><strong>Object Number</strong></div></div>
              <div class="col-9 p-0 m-0 d-flex">
                <div class="w-25"><input type="number" class="w-100 border-0 border-bottom rounded-0" onfocus="this.placeholder = ''" onblur="this.placeholder = '1234'" name="" placeholder="1234"></div>
                <div class="ps-4 text-secondary">Do you already know the object number? Enter here and you will go directly to the desired property.</div>
              </div>
            </div>
            <div class="row p-0 m-0 last_days_container mt-5">
              <div class="col-3 p-0 m-0"><div class="title"><strong>Show only items from the last ... days</strong></div></div>
              <div class="col-9 p-0 m-0">
                <ul class="list-unstyled d-flex gap-5">
                  <li class="border active_bg_buy">Any</li>
                  <li class="border">3 Days</li>
                  <li class="border">7 Days</li>
                  <li class="border">14 Days</li>
                  <li class="border">30 Days</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-3"></div>
              <div class="col-9"></div>
            </div>
            <div class="row p-0 m-0 mt-5">
              <div class="col-3 p-0 m-0"></div>
              <div class="col-9 p-0 m-0 justify-content-center">
                <button class="border-0 find_my_properties text-uppercase fw-bold">FIND MY PROPERTIES IN VIENNA NOW</button>
                <button class="border-0 text-uppercase disabled_btn text-white rounded-2">SELECT OBJECT TYPE</button>
              </div>
            </div>
            <div class="row p-0 m-0 mt-5 prop_search">
              <div class="col-12 p-0 m-0">
                <h5>Property search online: easy, fast, free.</h5>
                <p class="m-0 mt-4">More than 95% of all people searching conduct their real estate search online on the Internet - no wonder, since the search process here is simply structured, carried out quickly and is free of charge. The online search also works perfectly on mobile devices, thanks to a specially adapted design and search features.</p>
                <p class="m-0">In addition, you can have a whole pack of work done for you: Simply hand over your property search to our <a href="register.php" class="text-decoration-underline a_color">digital search agent</a> and you will automatically receive all new publications that appear every day for your search criteria. The FindMyHome.at search agent is also free for you.</p>
                <p>Of course, we at FindMyHome.at will stay on the ball when it comes to offering technical search innovations, developing new offers that make your real estate search and the entire move even easier - from financing to defining real <a href="#" class="text-decoration-underline a_color">estate</a> legal <a href="terms.php" class="text-decoration-underline a_color">terms</a> through to various <a href="#" class="text-decoration-underline a_color">services related to your new home</a> .</p>
                <p>And for those who are particularly demanding, we now have our own platform for the most beautiful and exclusive properties in Austria on FindMyHome.at: <a href="#" class="text-decoration-underline a_color">Premium Living - exclusive luxury properties & luxury apartments</a></p>
              </div>
            </div>
          </div>
        </div>
        <?php include 'footer.php' ?>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/find_my_home.js"></script>
  </body>
</html>