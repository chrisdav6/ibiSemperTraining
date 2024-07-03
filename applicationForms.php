<?php
  $title = "IBI Semper Training - Application Forms";
  $metaDesc = "Engage Veterans and First Responders with PTS, improve lives and help dogs in need through PTS Service
  Dog training and promoting awareness of PTS";
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
      <h1>PTS Application &amp; ADA Info</h1>
      <hr>
    </div>
  </div>

  <div id="applications" class="secondary-content mt-4 mb-5">
    <div class="container">

      <div class='application-container'>
        <h3>Forms</h3>
        <a href="ptsdApplicationForm.php">IST PTS Service Dog Application</a>
      </div>

      <div class='application-container'>
        <h3>ADA Information</h3>
        <a href="https://www.ada.gov/resources/service-animals-2010-requirements/?fbclid=IwZXh0bgNhZW0CMTAAAR1lCZb3CvpLzR01H-y_IiC89eT3MelB1Dt0RQxeRdP2zhmRqIxKt6eyfN8_aem__5nBT35fLkQkAp_4XeIvAQ" target="_blank">NYS Laws Pertaining to Service Dogs</a>
        <a href="https://criminaldefense.1800nynylaw.com/new-york-penal-law-242-05-interference-harassment-or-intimidatio.html?fbclid=IwZXh0bgNhZW0CMTAAAR0mDiPdULDwAiAbPnhvIXJHZVngw_p22Xcjb0FJnc83BNcNOkVK4TppbKw_aem_lubcMY0bKGIKiPfAj0xRHw" target="_blank">NYS Penalties If Interfering with SDs</a>
        <a href="https://www.animallaw.info/topic/table-state-assistance-animal-laws?fbclid=IwZXh0bgNhZW0CMTAAAR2LN5NMgZzXFhap7GbWv-y5i53tnAfDIqAnVnq2Guh2qS9-Z0ONlO8mK20_aem_7yLVFC0E9pTgodGqK5FpZg" target="_blank">State Service Animal Laws</a>
      </div>

    </div>
  </div>

  <?php include_once "includes/footer.php"; ?>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>
  <script src="public/js/facebookPixel.js"></script>

</body>

</html>