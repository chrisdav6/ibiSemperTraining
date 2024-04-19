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
          <img class="img-fluid" src="./public/img/sonya2022-2.png" alt="Sonya Picture">
        </div>
        <div class="staffContent">
          <h3>Sonya Ward</h3>
          <hr>
          <p>Sonya Ward was born in Germany and raised in Europe. She has traveled extensively, visiting all but one continent and an innate interest in culture and history. She has a German and American college degree majoring in business and marketing. Sonya has a lifelong love for dogs and has been training Veterans with PTSD and their dogs since 2015. She has and is continuing to attend workshops and training classes as well as immersing herself in material pertaining to Veterans, dogs and PTSD. It was due to the support and interest of the Veterans in the area that Sonya decided to start Ibi Semper Training, Inc and she is looking very much forward to working and training Veterans and First Responders in the Capital District.
          </p>
        </div>
      </div>

      <div class="staffMember">
        <div class="staffImage">
          <img class="img-fluid" src="./public/img/shelley.png" alt="Shelly Picture">
        </div>
        <div class="staffContent">
          <h3>Shelley Dame</h3>
          <hr>
          <p>Shelley Dame is a Hudson Valley Community College graduate in Business Administration and went on to receive her paralegal degree from National Paralegal Studies Program. She has a lifelong love for dogs and other animals and has been a dog trainer since 2017, training her own Golden Retriever as therapy dog. In 2018 Shelley founded and opened the very successful dog boarding business “All About Dawgs, LLC”. Besides being a Board member, Shelley is an active volunteer at IBI Semper Training and is very excited to be working with veterans and their dogs.”
          </p>
        </div>
      </div>

      <div class="staffMember">
        <div class="staffImage">
          <img class="img-fluid" src="./public/img/amy.png" alt="Amy Picture">
        </div>
        <div class="staffContent">
          <h3>Amy Zappia - Board Member</h3>
          <hr>
          <p>Amy Zappia is a U.S. Navy Veteran and a graduate of the Ibi Semper Training program with her Service Dog Barnabas.
            She has traveled extensively and was stationed State side as well as overseas. Amy lived in Greece, Pakistan and the UK.
            She enjoys helping IST at outreach and educational events, enjoys art, gardening and being with her family and three dogs.
          </p>
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
  <script src="public/js/facebookPixel.js"></script>

</body>

</html>