<?php
  $title = "IBI Semper Training - Purchase";
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
      <h1>Support Program</h1>
      <hr>
    </div>
  </div>

  <div id="purchase" class="secondary-content mt-4 mb-5">
    <div class="container">
      <p class="intro">We welcome you to show your support of our program to help Veterans, save shelter dogs and changing lives by purchasing the following items. Shoot us an <a href="mailto:ibisempertraining@gmail.com?subject=Ibi Semper Website Purchase" class="purchaseLink"><i class="far fa-envelope"></i> email</a> to purchase any items below. Thank you for your support!</p>

      <div class="amazon">
        <h2 class="mb-4">Amazon Smile</h2>
        <p>You can select us now on Amazon Smile as your charity of choice. IST is ONLY working from donations and fundraisers. Any help is greatly appreciated! <strong>Thank you!</strong></p>
        <p>To change your charitable organization:</p>
        <p><strong>1.</strong> Sign in to <a class="link text-dark" href="https://smile.amazon.com" target="_blank">smile.amazon.com</a> on your desktop or mobile phone browser.</p>
        <p><strong>2.</strong> From your desktop, go to Your Account from the navigation at the top of any page, and then select the option to Change your Charity. Or, from your mobile browser, select Change your Charity from the options at the bottom of the page.</p>
        <p><strong>3.</strong> Select a new charitable organization to support.</p>
        <p>For more information about the AmazonSmile program, go to <a class="link text-dark" href="https://smile.amazon.com/gp/chpf/about" target="_blank">smile.amazon.com/about</a>.</p>
      </div>

      <div class="purchase-group">
        <h2 class="mb-4">IST T-Shirts</h2>
        <div class="info">
          <p>High quality cotton t-shirts that show IST logo on front</p>
        </div>
        <div id="tshirts" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/purchase/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
          <a href="tshirt1.jpg" data-ngthumb="tshirt1.jpg" data-ngdesc="Ibi Semper Training T-Shirt"></a>
          <a href="tshirt2.jpg" data-ngthumb="tshirt2.jpg" data-ngdesc="Ibi Semper Training T-Shirt"></a>
        </div>
        <div class="pricing">
          <p>$20 each for shirts size S through XL</p>
          <p>$30 for 2 shirts size S through XL</p>
          <p>$25 each for size 2XL</p>
        </div>
      </div>

      <div class="purchase-group">
        <h2 class="mb-4">IST Car Window Decal - 5" x 5" </h2>
        <div class="info">
          <p>Proudly display our clear backing window decal</p>
        </div>
        <div id="decals" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/purchase/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
          <a href="decal.jpg" data-ngthumb="decal.jpg" data-ngdesc="Ibi Semper Training Car Window Decal"></a>
        </div>
        <div class="pricing">
          <p>Only $7 each
            <!--- <small class="text-danger">Temporarily out of stock, please check back soon.</small>-->
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
  <script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
  <script src="public/js/facebookPixel.js"></script>
</body>

</html>