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

        <div class="col-md-6">
          <div class="event">
            <div class="date red">Mar<span>29</span></div>
            <div class="text">
              <p class="eventTitle">Jump4PTSD ServiceDogs</p>
              <a class="red" href="https://g.page/Airdrenaline?share" target="_blank">Airdrenaline Park</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="./public/pdf/AAPMar292020.pdf" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>

      </div><!-- /row -->

      <h2>Outreach Events</h2>

      <div class="row">

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">Mar<span>20</span></div>
            <div class="text">
              <p class="eventTitle">Arts4Vets</p>
              <a class="red" href="https://goo.gl/maps/Vh8PhSmSDs6GCRfw9" target="_blank">American Legion Post #1520</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="https://www.facebook.com/groups/1231782123562194" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">Apr<span>9</span></div>
            <div class="text">
              <p class="eventTitle">NYS Yellow Ribbon</p>
              <a class="red" href="https://goo.gl/maps/HmCk39bhUfjUd9E66" target="_blank">Halfmoon Town Hall</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="#" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">May<span>16</span></div>
            <div class="text">
              <p class="eventTitle">Pet Fest</p>
              <a class="red" href="https://goo.gl/maps/D34P5XwqwpardCDs9" target="_blank">Glens Falls City Park</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="https://www.glensfalls.com/event/pet-fest-118896" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">June<span>6-7</span></div>
            <div class="text">
              <p class="eventTitle">Adirondack Woof Stock</p>
              <a class="red" href="https://goo.gl/maps/sbJtbPYHtiQrixwN8" target="_blank">Chester Town Hall</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="https://www.visitlakegeorge.com/events/adirondack-woof-stock" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="event">
            <div class="date blue">July<span>25</span></div>
            <div class="text">
              <p class="eventTitle">Wounded Vet Run</p>
              <a class="red" href="https://g.page/BrunswickHarley?share" target="_blank">Brunswick Harley Davidson</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="https://www.facebook.com/UpstateNYWVR" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
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