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
        <h2 class="mb-4">Amazon Smile</h2>
        <p>You can select us now on Amazon Smile as your charity of choice. IST is ONLY working from donations and fundraisers. Any help is greatly appreciated! <strong>Thank you!</strong></p>
        <div id="amznCharityBanner">
          <script type="text/javascript">
          (function() {
            var iFrame = document.createElement('iframe');
            iFrame.style.display = 'none';
            iFrame.style.border = "none";
            iFrame.width = 310;
            iFrame.height = 256;
            iFrame.setAttribute && iFrame.setAttribute('scrolling', 'no');
            iFrame.setAttribute('frameborder', '0');
            setTimeout(function() {
              var contents = (iFrame.contentWindow) ? iFrame.contentWindow : (iFrame.contentDocument.document) ? iFrame.contentDocument.document : iFrame.contentDocument;
              contents.document.open();
              contents.document.write(decodeURIComponent("%3Cdiv%20id%3D%22amznCharityBannerInner%22%3E%3Ca%20href%3D%22https%3A%2F%2Fsmile.amazon.com%2Fch%2F84-4282620%22%20target%3D%22_blank%22%3E%3Cdiv%20class%3D%22text%22%20height%3D%22%22%3E%3Cdiv%20class%3D%22support-wrapper%22%3E%3Cdiv%20class%3D%22support%22%20style%3D%22font-size%3A%2025px%3B%20line-height%3A%2028px%3B%20margin-top%3A%201px%3B%20margin-bottom%3A%201px%3B%22%3ESupport%20%3Cspan%20id%3D%22charity-name%22%20style%3D%22display%3A%20inline-block%3B%22%3EIbi%20Semper%20Training%20Inc.%3C%2Fspan%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cp%20class%3D%22when-shop%22%3EWhen%20you%20shop%20at%20%3Cb%3Esmile.amazon.com%2C%3C%2Fb%3E%3C%2Fp%3E%3Cp%20class%3D%22donates%22%3EAmazon%20donates.%3C%2Fp%3E%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cstyle%3E%23amznCharityBannerInner%7Bbackground-image%3Aurl(https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FG%2F01%2Fx-locale%2Fpaladin%2Fcharitycentral%2Fbanner-background-image._CB485922134_.png)%3Bwidth%3A300px%3Bheight%3A250px%3Bposition%3Arelative%7D%23amznCharityBannerInner%20a%7Bdisplay%3Ablock%3Bwidth%3A100%25%3Bheight%3A100%25%3Bposition%3Arelative%3Bcolor%3A%23000%3Btext-decoration%3Anone%7D.text%7Bposition%3Aabsolute%3Btop%3A20px%3Bleft%3A15px%3Bright%3A15px%3Bbottom%3A100px%7D.support-wrapper%7Boverflow%3Ahidden%3Bmax-height%3A86px%7D.support%7Bfont-family%3AArial%2Csans%3Bfont-weight%3A700%3Bline-height%3A28px%3Bfont-size%3A25px%3Bcolor%3A%23333%3Btext-align%3Acenter%3Bmargin%3A0%3Bpadding%3A0%3Bbackground%3A0%200%7D.when-shop%7Bfont-family%3AArial%2Csans%3Bfont-size%3A15px%3Bfont-weight%3A400%3Bline-height%3A25px%3Bcolor%3A%23333%3Btext-align%3Acenter%3Bmargin%3A0%3Bpadding%3A0%3Bbackground%3A0%200%7D.donates%7Bfont-family%3AArial%2Csans%3Bfont-size%3A15px%3Bfont-weight%3A400%3Bline-height%3A21px%3Bcolor%3A%23333%3Btext-align%3Acenter%3Bmargin%3A0%3Bpadding%3A0%3Bbackground%3A0%200%7D%3C%2Fstyle%3E"));
              contents.document.close();
              iFrame.style.display = 'block';
            });
            document.getElementById('amznCharityBanner').appendChild(iFrame);
          })();
          </script>
        </div>
        <!-- <p>To change your charitable organization:</p>
        <p><strong>1.</strong> Sign in to <a class="link text-dark" href="https://smile.amazon.com" target="_blank">smile.amazon.com</a> on your desktop or mobile phone browser.</p>
        <p><strong>2.</strong> From your desktop, go to Your Account from the navigation at the top of any page, and then select the option to Change your Charity. Or, from your mobile browser, select Change your Charity from the options at the bottom of the page.</p>
        <p><strong>3.</strong> Select a new charitable organization to support.</p>
        <p>For more information about the AmazonSmile program, go to <a class="link text-dark" href="https://smile.amazon.com/gp/chpf/about" target="_blank">smile.amazon.com/about</a>.</p> -->
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
            <a href="4.jpg" data-ngthumb="1.jpg" data-ngdesc=""></a>
            <a href="5.jpg" data-ngthumb="5.jpg" data-ngdesc=""></a>
            <a href="6.jpg" data-ngthumb="6.jpg" data-ngdesc=""></a>
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
          <p>High quality cotton t-shirts that show IST logo on front</p>
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
          <a href="tshirt1.jpg" data-ngthumb="tshirt1.jpg" data-ngdesc="Ibi Semper Training T-Shirt"></a>
          <a href="tshirt2.jpg" data-ngthumb="tshirt2.jpg" data-ngdesc="Ibi Semper Training T-Shirt"></a>
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