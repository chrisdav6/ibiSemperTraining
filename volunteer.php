<?php
  $title = "IBI Semper Training - Volunteer";
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
      <h1>Volunteer</h1>
      <hr>
    </div>
  </div>

  <div class="secondary-content mt-4 mb-5">
    <div class="container">
      <p>Welcome!</p>

      <p>Are you looking to support your community, help our Veterans and love dogs then you have found the ideal combination to volunteer for our Non-Profit!</p>

      <p>Maybe you have recently retired or are a college student looking for volunteer time to add to your resume? Maybe the kids have left for college and you have extra time? We look forward to work with you.
      <p>

      <p>Please join Ibi Semper Training’s Volunteer Group for a mutual beneficial partnership. Fill out the form below.</p>

      <p>Thank you and we look forward to meeting you!</p>

      <iframe class="mt-5" onload="self.scrollTo(0,0)" src="https://docs.google.com/forms/d/e/1FAIpQLSfEE0bIKCQYnR4t068KQUpyN3WoMZ24Xj2ubw4p2BWF8A-vew/viewform?embedded=true" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading…</iframe>
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