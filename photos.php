<?php
  $title = "IBI Semper Training - Photos";
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
      <h1>Photos</h1>
      <hr>
    </div>
  </div>

  <div id="photos" class="secondary-content mt-4 mb-5">
    <div class="container">

      <div id="photo-group">
        <h2 class="mb-3">Training</h2>
        <p class="mb-4">Service dogs and their humans in training</p>
        <div id="training" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/ibi/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
          <a href="duane.jpg" data-ngthumb="duane.jpg" data-ngdesc="Veteran Duane and his Service Dog In Training Panda"></a>
          <a href="remington1.jpg" data-ngthumb="remington1.jpg" data-ngdesc="Remington and his human Blair"></a>
          <a href="remington2.jpg" data-ngthumb="remington2.jpg" data-ngdesc="Remington and his human Blair"></a>
        </div>
      </div>

      <div id="photo-group">
        <h2 class="mb-3">Trivia Night at Katie O’Byrnes Pub</h2>
        <p class="mb-4">Thank you Trivia Teams Scared Shotless, Chicken Little, Fünf Gewinnt, Meatball Joint, The Dameinators and Team Panda!! A HUGE shoutout to John and Tomy at Katie O’Byrnes for hosting the event, the wonderful support we received and the added gift card for the team prize!! Go check them out at <a class="link text-dark" href="https://katieobyrnespub.com" target="_blank">https://katieobyrnespub.com</a> </p>
        <div id="ngy2p" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/triviaKatie2019/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
          <a href="trivia0.jpg" data-ngthumb="trivia0.jpg" data-ngdesc="Panda at Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia00.jpg" data-ngthumb="trivia00.jpg" data-ngdesc="Panda at Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia1.jpg" data-ngthumb="trivia1.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia2.jpg" data-ngthumb="trivia2.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia3.jpg" data-ngthumb="trivia3.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia4.jpg" data-ngthumb="trivia4.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia5.jpg" data-ngthumb="trivia5.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
          <a href="trivia6.jpg" data-ngthumb="trivia6.jpg" data-ngdesc="Trivia Night at Katie O’Byrnes Pub"></a>
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