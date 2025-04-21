<?php
  $title = "IBI Semper Training";
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

  <section id="hero">
    <div class="content">
      <div class="container">
        <h1>Ibi Semper Training</h1>
        <span class="ibi-pronounce">The word <strong>"Ibi"</strong> can be pronounced as <strong>"EE-bee"</strong>. <br />Ibi Semper is Latin for <strong>"Always here"</strong> </span>
        <hr>
        <p class="intro">Engaging Veterans and First Responders with PTS injuries, improving lives and helping dogs in need through
          PTS Service Dog training and promoting awareness of PTS</p>
        <div class="donationContainer">
          <a class="donation" href="https://www.paypal.com/donate/?hosted_button_id=F3Y33KXX3RCWL" target="_blank">Make a Donation Today!</a>
          <a class="newsletter" href="https://forms.gle/G6Zc4QWNBDqqEoX99" target="_blank">
            <img src='/public/img/newsletter.png' alt='Newsletter' />
            <p>Subscribe to<br />our Newsletter!</p>
          </a>
        </div>
      </div>

    </div>
  </section>

  <section id="tax">
    <div class="container">
      <p>IST has been approved and is a registered 501c3 tax exempt organization!</p>
      <hr>
      <p>You can support Ibi Semper Training by clicking <a class="amazonLink" href="https://a.co/3p1Kvby" target="_blank">here</a> to purchase training tools directly from Amazon wishlist. The products will be shipped directly to Ibi Semper Training to be used during the 8 months Service Dog training program. <strong>We thank you for your support!</strong></p>
    </div>
  </section>

  <section id="silverSeal">
    <div class="container">
      <p class='silverImage'>
        <a href="https://www.guidestar.org/profile/shared/ab68fa10-a82b-4dd8-bbb9-b18c8891e3d6" target="_blank">
          <img src="https://widgets.guidestar.org/TransparencySeal/9882055" />
        </a>
      </p>
      <p>We’re excited to share that our organization has earned a 2025 Gold Seal of Transparency with Candid! Now, you can support our work with trust and confidence by viewing our <a class="silverLink" href="https://www.guidestar.org/profile/shared/ab68fa10-a82b-4dd8-bbb9-b18c8891e3d6" target='_blank'>#NonprofitProfile</a></p>
    </div>
  </section>

  <div class="home-sections">
    <div class="container">
      <h2>About Us</h2>
      <hr>
      <p>Ibi Semper Training (IST) is a charitable non-profit that trains Veterans/1st Responders with PTS and their
        dogs in a small guided group, usually no more than 4 teams at one time, to become PTS Service Dog teams in a 8
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
      <p>This program is free of charge for Veterans and First Responders with PTS. We do not have a military or K-9
        breed restriction. </p>
    </div>
  </div>

  <?php include_once "includes/footer.php"; ?>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>
  <script src="public/js/facebookPixel.js"></script>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat" attribution="install_email" page_id="101250784762442">
  </div>


</body>

</html>