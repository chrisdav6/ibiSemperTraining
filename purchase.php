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

      <div class="purchase-group">
        <h2 class="mb-4">Our 2024 CALENDARS ARE HERE!</h2>
        <div class="info">
          <h5 class='mb-4'>Early Christmas 🎄 shopping!</h5>
          <p class="mb-3">Every month you will have a different dog that either has completed, is currently going or has been adopted through our program! We have included fun facts every month. This is a one-of-a-kind gift! $20 each and we accept cash/check/credit cards/Venmo/PayPal. Please contact Sonya at <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=IST Calendar, Yes Please!" target="_blank">sonya@ibisempertraining.org</a> for orders. And dont forget to add your contact/mailing address, please. Thank you!!</p>

          <div id="calendar" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/calendar/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
            <a href="1.jpg" data-ngthumb="1.jpg" data-ngdesc=""></a>
            <a href="2.jpg" data-ngthumb="2.jpg" data-ngdesc=""></a>
            <a href="3.jpg" data-ngthumb="3.jpg" data-ngdesc=""></a>
            <a href="4.jpg" data-ngthumb="4.jpg" data-ngdesc=""></a>
            <a href="5.jpg" data-ngthumb="5.jpg" data-ngdesc=""></a>
          </div>
        </div>
      </div>

      <div class="silver">
        <h2 class="mb-4">Silver Seal of Transparency</h2>
        <div class="silverBody">
          <p>
            <a href="https://www.guidestar.org/profile/shared/ab68fa10-a82b-4dd8-bbb9-b18c8891e3d6" target="_blank"><img src="https://widgets.guidestar.org/TransparencySeal/9882055" /></a>
          </p>
          <p class='silverText'>We’re excited to share that our organization has earned a 2022 Silver Seal of Transparency with Candid! Now, you can support our work with trust and confidence by viewing our #NonprofitProfile
          </p>
        </div>
      </div>

      <div class="purchase-group">
        <h2 class="mb-4">Donate</h2>
        <div class="info">
          <p>Thank you for your support for and contribution to our Veterans and First Responder Service Dog teams!
            By clicking on the donation button, your contribution benefits directly the training of Service Dog teams and if needed, adopting dogs from shelters for our teams.
            Ibi Semper Training solely exist of donations and fundraising funds to provide our services free of charge to our teams.
          </p>
        </div>
        <div class='mt-4'>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="RVMY4GVNUKVTE" />
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          </form>
        </div>
      </div>

      <div class="amazon">
        <h2 class="mb-4">Amazon Wishlist</h2>
        <p>You can support Ibi Semper Training by clicking <a class="link text-dark" href="https://a.co/3p1Kvby" target="_blank">here</a> to purchase training tools directly from Amazon wishlist. The products will be shipped directly to Ibi Semper Training to be used during the 8 months Service Dog training program. <strong>We thank you for your support!</strong></p>
      </div>

      <div class="purchase-group">
        <h2 class="mb-4">IST Cookbook</h2>
        <div class="info">
          <h5>Available Now Until Supplies Last - <a class="btn btn-primary btn-sm" href="/public/pdf/ISTCookbook.pdf" target="_blank">Sneak Peek Here</a></h5>
          <p class="mb-3">Collection of recipes from our Service Dog teams, partners and friends, with team photos.<br />Please contact <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=IST Cookbook, Yes Please!" target="_blank">sonya@ibisempertraining.org</a> to order yours before supplies run out.</p>

          <div class="pricing">
            <p>$15 each</p>
          </div>


          <div id="cookbook" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/cookbook/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
            <a href="1.jpg" data-ngthumb="1.jpg" data-ngdesc=""></a>
          </div>
        </div>
      </div>


      <div class="purchase-group">
        <h2 class="mb-4 bonfire">Bonfire Merchandise</h2>
        <div class="info">
          <p class="mb-3">All proceeds directly benefit rescue dogs and Service Dog training. <i class="fas fa-arrow-right"></i> <a class="link text-dark" href="https://www.bonfire.com/store/ibi-semper-training/" target="_blank">Place Your Order Today!</a></p>

          <div id="bonfire" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/bonfire/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
            <a href="1.jpg" data-ngthumb="1.jpg" data-ngdesc=""></a>
            <a href="2.jpg" data-ngthumb="2.jpg" data-ngdesc=""></a>
            <a href="3.jpg" data-ngthumb="3.jpg" data-ngdesc=""></a>
            <a href="4.jpg" data-ngthumb="4.jpg" data-ngdesc=""></a>
            <a href="5.jpg" data-ngthumb="5.jpg" data-ngdesc=""></a>
            <a href="6.jpg" data-ngthumb="6.jpg" data-ngdesc=""></a>
            <a href="7.jpg" data-ngthumb="7.jpg" data-ngdesc=""></a>
            <a href="8.jpg" data-ngthumb="8.jpg" data-ngdesc=""></a>
            <a href="9.jpg" data-ngthumb="9.jpg" data-ngdesc=""></a>
          </div>
        </div>
      </div>

      <!-- <div class="purchase-group">
        <h2 class="mb-4">IST T-Shirts - Limited Time Offer</h2>
        <div class="info">
          <p class="mb-1">High quality cotton t-shirts that show IST logo on front and message on back</p>
          <p class="mt-0">Sale ends May 10th, get yours today! <i class="fas fa-arrow-right"></i> <a class="link text-dark" href="https://www.bonfire.com/ibi-semper-training/" target="_blank">Place Order</a>
          <div id="tshirts" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/purchase/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
            <a href="limitedShirtF.jpg" data-ngthumb="limitedShirtF.jpg" data-ngdesc="Ibi Semper Training Limited T-Shirt"></a>
            <a href="limitedShirt.jpg" data-ngthumb="limitedShirt.jpg" data-ngdesc="Ibi Semper Training Limited T-Shirt"></a>
          </div>
        </div>
      </div> -->

      <div class="purchase-group">
        <h2 class="mb-4">IST T-Shirts</h2>
        <div class="info">
          <p>High quality 2022 PTSD Awareness Ride shirts</p>
        </div>
        <div id="tshirts2" data-nanogallery2='{
          "itemsBaseURL": "./public/img/gallery/purchase/",
          "thumbnailWidth": "200",
          "thumbnailAlignment": "left",
          "thumbnailBorderHorizontal": "1",
          "thumbnailBorderVertical": "1",
          "thumbnailGutterWidth": 10,
          "thumbnailGutterHeight": 10
        }'>
          <a href="1.jpg" data-ngthumb="1.jpg" data-ngdesc=""></a>
          <a href="2.jpg" data-ngthumb="2.jpg" data-ngdesc=""></a>
          <a href="3.jpg" data-ngthumb="3.jpg" data-ngdesc=""></a>
        </div>
        <div class="pricing">
          <p>$20 each for shirts size S through XL</p>
          <p>$30 for 2 shirts size S through XL</p>
          <p>$25 each for size 2XL</p>
          <div class='mt-4'>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="MB73ZB58J5LZ4">
              <table>
                <tr>
                  <td><select name="os0">
                      <option value="1 shirt size S-XL">1 shirt size S-XL $20.00 USD</option>
                      <option value="2 shirts size S-XL">2 shirts size S-XL $30.00 USD</option>
                      <option value="1 shirt size 2XL">1 shirt size 2XL $25.00 USD</option>
                    </select> </td>
                </tr>
                <tr>
                  <td><input type="hidden" name="on1" value="Please enter size(s) ordered">Please enter size(s) ordered</td>
                </tr>
                <tr>
                  <td><input type="text" name="os1" maxlength="200"></td>
                </tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
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
          <div class="mt-4">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="XWHSE6F5PN79G">
              <table>
                <tr>
                  <td><input type="hidden" name="on0" value="IST car decals">IST car decals</td>
                </tr>
                <tr>
                  <td><select name="os0">
                      <option value="1 Decal">1 Decal $7.00 USD</option>
                      <option value="2 Decals">2 Decals $12.00 USD</option>
                    </select> </td>
                </tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
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