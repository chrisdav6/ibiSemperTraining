<?php
  $title = "IBI Semper Training - IST Partners";
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
  <!-- Nano Gallery -->
  <link rel="stylesheet" href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css">
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
      <h1>IST Partners</h1>
      <hr>
    </div>
  </div>

  <div id="istPartners" class="secondary-content mt-4 mb-5">
    <div class="container">
      <p>Ibi Semper Training is COMPLETELY funded from donations and fundraisers to provide training and dog adoption free of charge to our PTSD Service Dog teams.
        We would like to thank these organizations and persons for their continued support.
      </p>

      <p>IST is very grateful to have such excellent partners to work with. If you are visiting our site, please know that we highly recommend these organizations to you.</p>

      <p>Thank you for your continued support! The IST Teams</p>

      <div class="row mt-5">
        <div class="col-6 col-md-3">
          <img class="img-fluid partnerImage" src="./public/img/allAboutDogs.jpg" alt="All About Dogs">
        </div>
        <div class="col-6 col-md-3">
          <img class="img-fluid partnerImage" src="./public/img/luckyPuppyRescue.jpg" alt="Lucky Puppy Rescue">
        </div>
        <div class="col-6 col-md-3">
          <img class="img-fluid partnerImage" src="./public/img/tomsBarberShop.jpg" alt="Toms Barber Shop">
        </div>
      </div>

    </div>
  </div>

  <?php include_once "includes/footer.php"; ?>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>
  <script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
</body>

</html>