<?php
  $title = "IBI Semper Training";
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

  <section id="hero">
    <div class="content">
      <div class="container">
        <h1>Ibi Semper Training</h1>
        <hr>
        <p class="intro">Engaging Veterans and First Responders with PTSD, improve lives and help dogs in need through
          PTSD Service Dog training and promoting awareness of PTSD</p>
      </div>

    </div>
  </section>

  <section id="tax">
    <div class="container">
      <p>IST has been approved and is now a registered 501c3 tax exempt organization!</p>
      <hr>
      <p>You can select Ibi Semper Training on <a class="amazonLink" href="/purchase.php">Amazon Smile</a> as your charity of choice!</p>
    </div>

  </section>

  <div class="home-sections">
    <div class="container">
      <h2>About Us</h2>
      <hr>
      <p>Ibi Semper Training (IST) is a charitable non-profit that trains Veterans/1st Responders with PTSD and their
        dogs in a small guided group, usually no more than 4 teams at one time, to become PTSD Service Dog teams in a 8
        months program. The teams will complete 6 months of in-classroom training and will then be tested for the
        American Kennel Club CGC (Canine Good Citizen) and CGCU (Canine Good Citizen Urban) tests by accredited AKC
        testers. Upon completion the teams advance to 2 months of Public Access training, where the classroom lessons
        will be reiterated in a public setting at various locations throughout the Capital District. The teams will
        complete the program after successfully passing the Public Access test.</p>
    </div>
  </div>

  <div class="home-sections">
    <div class="container">
      <h2>Our Goal</h2>
      <hr>
      <p>IST will match the person with a temperament tested dog from a local shelter or rescue if needed. If the
        applicant would like to train their dog, we will be happy to temperament test that dog.</p>
    </div>
  </div>

  <div class="home-sections">
    <div class="container">
      <h2>Fees</h2>
      <hr>
      <p>This program is free of charge for Veterans and First Responders with PTSD. We do not have a military or K-9
        breed restriction. </p>
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