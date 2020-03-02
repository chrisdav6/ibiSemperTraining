<?php
  $title = "IBI Semper Training - Events";
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
      <h1>Events</h1>
      <hr>
    </div>
  </div>

  <div id="events" class="secondary-content mt-4 mb-5">
    <div class="container">
      <h2>Fundraisers</h2>

      <div class="row">
        <!-- <div class="col-md-6">
          <div class="event">
            <div class="date red">Feb<span>28</span></div>
            <div class="text">
              <a class="text-dark event-link" href="./public/pdf/triviaNightFeb282020.pdf" target="_blank">Trivia Night</a>
              <a class="red" href="https://goo.gl/maps/tK4uHfRwboRJZceq7" target="_blank">Katie O'Byrnes Restaurant</a>
            </div>
          </div>
        </div> -->

        <div class="col-md-6">
          <div class="event">
            <div class="date red">Mar<span>29</span></div>
            <div class="text">
              <a class="text-dark event-link" href="./public/pdf/AAPMar292020.pdf" target="_blank">Jump4PTSD ServiceDogs</a>
              <a class="red" href="https://g.page/Airdrenaline?share" target="_blank">Airdrenaline Park</a></div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="event">
            <div class="date red">May<span>16</span></div>
            <div class="text">
              <a class="text-dark event-link" href="https://www.glensfalls.com/event/pet-fest-118896" target="_blank">Pet Fest</a>
              <a class="red" href="https://goo.gl/maps/D34P5XwqwpardCDs9" target="_blank">Glens Falls City Park</a></div>
          </div>
        </div>
      </div><!-- /row -->

      <h2>Outreach Events</h2>

      <div class="row">
        <!-- <div class="col-md-6">
          <div class="event">
            <div class="date blue">Feb<span>25</span></div>
            <div class="text">
              <a class="text-dark event-link" href="#" target="_blank">Battlefield 2 Boardroom</a>
              <a class="blue" href="https://goo.gl/maps/fjPhbndtjDVM8kXy5" target="_blank">Tully Rinckey PLLC</a></div>
          </div>
        </div> -->

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">Mar<span>20</span></div>
            <div class="text">
              <a class="text-dark event-link" href="#" target="_blank">Arts4Vets</a>
              <a class="blue" href="https://goo.gl/maps/Vh8PhSmSDs6GCRfw9" target="_blank">American Legion Post #1520</a></div>
          </div>
        </div>
      </div><!-- /row -->

    </div>
  </div>

  <?php include_once "includes/footer.php"; ?>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>

</body>

</html>