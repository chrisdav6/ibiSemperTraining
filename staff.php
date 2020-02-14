<?php
  $title = "IBI Semper Training - Staff";
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
      <h1>Staff</h1>
      <hr>
    </div>
  </div>

  <div class="secondary-content mt-4 mb-5">
    <div class="container">

      <div class="staffMember">
        <div class="staffImage">
          <img class="img-fluid" src="./public/img/sonya.png" alt="Sonya Picture">
        </div>
        <div class="staffContent">
          <h3>Sonya Ward</h3>
          <hr>
          <p>Board member and fellow trainer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda asperiores ex excepturi veniam quidem dolore quaerat consectetur iure corporis aperiam aut, earum beatae? Qui dicta excepturi nihil deserunt earum tempore?</p>
        </div>
      </div>

      <div class="staffMember">
        <div class="staffImage">
          <img class="img-fluid" src="./public/img/shelley.png" alt="Shelly Picture">
        </div>
        <div class="staffContent">
          <h3>Shelley Dame</h3>
          <hr>
          <p>Board member and fellow trainer. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, at vero. Expedita distinctio et dignissimos minus, voluptatum eos optio asperiores?</p>
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

</body>

</html>