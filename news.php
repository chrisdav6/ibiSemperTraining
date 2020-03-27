<?php
  $title = "IBI Semper Training - News";
  $metaDesc = "Engage Veterans and First Responders with PTSD, improve lives and help dogs in need through PTSD Service
  Dog training and promoting awareness of PTSD";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo $metaDesc; ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">
  <?php include_once "includes/navbar.php"; ?>

  <div class="secondary-heading">
    <div class="container">
      <h1>News</h1>
      <hr>
    </div>
  </div>

  <div id="news" class="secondary-content mt-4 mb-5">
    <div class="container">

      <a class="newsItem" href="https://amp.cnn.com/cnn/2020/03/26/health/therapy-dog-er-doctor-trnd-wellness/index.html?fbclid=IwAR2YMEo_GSwFg5QWbIfZ3bT_7WkSkJiElFM7k7iduJeOWLvA7m3PvLYCyzY" target="_blank">
        A service dog in training brings comfort to ER doctors on the frontlines
      </a>

      <a class="newsItem" href="https://www.military.com/daily-news/2020/02/07/bill-provide-service-dogs-veterans-ptsd-passes-house-unanimously.html" target="_blank">
        Bill to Provide Service Dogs for Veterans with PTSD Passes House Unanimously
      </a>

      <a class="newsItem" href="https://abc7chicago.com/pets-animals/only-service-dogs-allowed-on-flights-in-new-dot-rules/5871271" target="_blank">
        Only service dogs allowed on flights in new DOT rules
      </a>

      <a class="newsItem" href="https://www.npr.org/2020/01/23/798662547/federal-government-may-tighten-restrictions-on-service-animals-on-planes" target="_blank">
        Federal Government May Tighten Restrictions On Service Animals On Planes
      </a>

      <a class="newsItem" href="https://vancouversun.com/opinion/columnists/daphne-bramham-before-planes-become-noahs-ark-some-regulation-is-needed" target="_blank">
        Daphne Bramham: Before planes become Noah's ark, some regulation is needed
      </a>

      <a class="newsItem" href="https://www.syossetadvance.com/articles/therapy-dogs-visit-syossets-harvest-house" target="_blank">
        Therapy dogs visit Syosset’s Harvest House
      </a>

      <a class="newsItem" href="https://www.palmbeachpost.com/news/20200128/cerabino-doggone-it-feds-looking-to-ground-emotional-support-pets" target="_blank">
        Cerabino: Doggone it, feds looking to ground “emotional support” pets
      </a>

      <a class="newsItem" href="https://www.distractify.com/p/uber-wheelchair-service-dog" target="_blank">
        Uber Driver Refuses Rider with Service Animal - for the fourth time in one week
      </a>

      <a class="newsItem" href="https://www.telegram.com/news/20200112/princetons-neads-supporting-fergusons-efforts-to-fight-service-dog-fraud" target="_blank">
        Princeton’s NEADS supporting Ferguson’s efforts to fight service dog fraud
      </a>

      <a class="newsItem" href="https://www.denverpost.com/2020/01/09/snowmass-village-hoa-service-dog" target="_blank">
        Snowmass Village HOA illegally banned a resident’s service dog, is ordered to pay victim $50,000
      </a>

      <a class="newsItem" href="https://abcnews4.com/news/local/lowcountry-veteran-says-he-and-his-service-dog-are-being-harassed-because-of-leash-laws" target="_blank">
        Lowcountry veteran says he and his service dog are being harassed because of leash laws
      </a>

      <a class="newsItem" href="https://fox17.com/news/local/why-are-pets-everywhere-businesses-airlines-cracking-down-on-service-animal-rules" target="_blank">
        Why are pets everywhere? Businesses, airlines cracking down on service animal rules
      </a>

      <a class="newsItem" href="https://www.theexaminernews.com/respect-the-vest-working-canines-and-what-they-do" target="_blank">
        Respect the Vest: Working Canines and What They Do
      </a>

    </div>
  </div>

  <?php include_once "includes/footer.php"; ?>

  <script src=" public/js/jquery.min.js"> </script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>

</body>

</html>