<?php
  $title = "IBI Semper Training - Events";
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
  <!-- Paypal Button Script -->
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">
  <?php include_once "includes/navbar.php"; ?>

  <div class="secondary-heading">
    <div class="container">
      <h1>Events</h1>
      <hr>
    </div>
  </div>

  <div id="events" class="secondary-content mt-4 mb-5">
    <div class="container">
      <h2>Fundraisers</h2>

      <!-- <p>Currently no fundraiser events scheduled, please check back soon.</p> -->

      <div class="row">

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.familytrivialive.com/event-details/fundraiser-ibi-semper-training-ptsd-service-dog-teams" target="_blank">General Trivia Fundraiser</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.familytrivialive.com/event-details/fundraiser-ibi-semper-training-ptsd-service-dog-teams" target="_blank">
                  <img class="img-fluid" src="/public/img/generalTrivia.png" alt="General Trivia Fundraiser">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Sept 12th, 7:15pm - Virtual Event</h5>
                <p>Join us for a fun evening of online trivia in the comfort of your home with winning prizes, laughs, suspense and teamwork! Only $25 per team with proceeds going directly to Ibi Semper Training PTSD Service Dog teams! Thank you for supporting Shelter dogs and our PTSD Service Dog teams!
                </p>
                <h5 class='mb-2'><a class="link text-dark" href="https://www.familytrivialive.com/event-details/fundraiser-ibi-semper-training-ptsd-service-dog-teams" target="_blank"><i class="fas fa-cloud-download-alt"></i> Sign-Up and Register</a></h5>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4>
              <strong>Operation Dream Team Trivia Fundraiser</strong>
            </h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <img class="img-fluid" src="/public/img/dreamTeamTrivia.png" alt="Dream Team Trivia Fundraiser">
              </div>
              <div class="col-lg-9 col-md-8">
                <h5 class='mb-0'>Sept 13th, 7:00pm - 8:30pm - Virtual Event</h5>
                <h5 class='mt-2'>Cost: $20 per Sign-Up</h5>
                <p>Please join us for a fun evening of online trivia in the convenience of your own home with winning prizes, laughs, suspense and teamwork! Thank you for supporting shelter dog adoption, Veterans and 1st Responders.
                </p>
                <p><strong>You will need to register and pay for this event by 9/11 to participate!</strong> Please make payment via Paypal, then contact Sonya at <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=Changing Lives Trivia Night">sonya@ibisempertraining.org</a> with your team details (team name, contact person, email address). Once you register and we receive payment, you will receive an email with the link and code you need to enter the game day of the Trivia.</p>
                <!-- Paypal -->
                <div class="paypal" id="paypal-button-container4"></div>
                <script>
                paypal.Buttons({
                  style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'horizontal',
                    label: 'paypal',

                  },
                  createOrder: function(data, actions) {
                    return actions.order.create({
                      purchase_units: [{
                        amount: {
                          value: '20'
                        }
                      }]
                    });
                  },
                  onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                      alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    });
                  }
                }).render('#paypal-button-container4');
                </script>
                <!-- /Paypal -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="/public/pdf/coreFlyer.pdf" target="_blank">Core to the Rescue</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="/public/pdf/coreFlyer.pdf" target="_blank">
                  <img class="img-fluid" src="/public/img/coreLife.png" alt="Great food for good">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Sept 26th from 11:30am - 8pm - <a class="link text-dark" href="https://goo.gl/maps/Z37SsyaGj3fdZbaUA" target="_blank">579 Troy Schenectady Rd, Latham, NY</a></h5>
                <p>Go to the Core and live the Life you were meant to be living. Support Ibi Semper Training to fund adopting Shelter Dogs to pair with 1st Responders, Veterans and Correctional Officers with PTSD. We operate completely on Donations and Fundraisers to provide the dogs and training at no charge to our teams.
                </p>
                <h5 class='mb-2'><a class="link text-dark" href="/public/pdf/coreFlyer.pdf" target="_blank"><i class="fas fa-cloud-download-alt"></i> Download CoreLife Flyer</a></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4 class='link'><a class="text-dark fund-link" href="https://www.facebook.com/tomsburnthills" target="_blank">Cuts Benefiting Pups</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/tomsburnthills" target="_blank">
                  <img class="img-fluid" src="/public/img/cutsPups.png" alt="Cuts Benefiting Pups">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Oct 4th from 10:00am - 2pm - <a class="link text-dark" href="https://goo.gl/maps/JD1L93HtDMLojfH88" target="_blank">795 Saratoga Rd, Burnt Hills, NY</a></h5>
                <p>Sons, Brothers, Fathers, Uncles, Dads and Grandads: Answer the call to transform your COVID locks to benefit PTSD Service Dogs and their Veteran and 1st Responder handlers. We operate solely on donations and Fundraisers! Your support is much appreciated!
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.facebook.com/Katie-OByrnes-Irish-Pub-Restaurant-39088387227" target="_blank">Changing Lives Trivia Night</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/Katie-OByrnes-Irish-Pub-Restaurant-39088387227" target="_blank">
                  <img class="img-fluid" src="/public/img/katieOburnes.png" alt="KatieOburnes">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Nov 7th from 8 - 10pm - <a class="link text-dark" href="https://goo.gl/maps/pYLXzFmqFpGNH85CA" target="_blank">121 Wall St, Schenectady, NY</a></h5>
                <p>Our last Trivia Night was a huge success! Let's continue changing lives and join us for another fun evening!
                  Only $100 per team of 5 people, $120 for team of 7! We have space for 10 teams total, so make your team reservations now. We need a Team name, # of people and a contact person with contact information when making reservations for your Team. Email <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=Changing Lives Trivia Night">sonya@ibisempertraining.org</a> for reservation and information.
                </p>
                <p>
                  Enjoy Suspense, laughter, teamwork and go home with a winning team prize. All to benefit Veterans, 1st Responders and Shelter Dogs! What's not to love!
                  Come early and order your dinner before or during the event. Thank you for your support!
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-6">
          <div class="event">
            <div class="date red">Apr<span>19</span></div>
            <div class="text">
              <p class="eventTitle">Jump4PTSD ServiceDogs</p>
              <a class="red" href="https://g.page/Airdrenaline?share" target="_blank">Airdrenaline Park</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="./public/pdf/AAPApr192020.pdf" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div> -->

      </div><!-- /row -->

      <h2>Outreach Events</h2>

      <div class="row">

        <!--<div class="col-md-6">
          <div class="event">
            <div class="date blue">Mar<span>20</span></div>
            <div class="text">
              <p class="eventTitle">Arts4Vets</p>
              <a class="red" href="https://goo.gl/maps/Vh8PhSmSDs6GCRfw9" target="_blank">American Legion Post #1520</a>
              <hr class="event-divider">
              <a class="text-dark event-link" href="https://www.facebook.com/groups/1231782123562194" target="_blank"><i class="fas fa-info-circle"></i> View Event Info</a>
            </div>
          </div>
        </div>-->

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4 class='link'><a class="text-dark fund-link" href="https://www.facebook.com/events/190540208884561" target="_blank">Military Family Foundation – 2nd Annual 22 a Day Virtual Walk/Run</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/events/190540208884561" target="_blank">
                  <img class="img-fluid" src="/public/img/militaryFamilyFoundation.png" alt="Military Family Foundation">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Sept 20th from 1:30 - 3:30pm - Virtual Event</h5>
                <p>This year the 2nd Annual 22 a Day Walk/Run will be hosted virtually due to COVID-19. Because the event will be online, the Zoom App will be used to walk virtually together for 22 min. If you register, a donation of $5 would be appreciated. All proceeds go to benefit Military Family Foundation's Peer to Peer Support Program. To register, please go to the <a class="link text-dark" href='https://www.facebook.com/MFFAlbany' target='_blank'>Military Family Foundation page</a>. Online event will start at 1:30pm to give Vendors (such as Ibi Semper Training) a chance to share their information. Walk will begin at exactly 2:22pm, The link to register will be up soon.
                </p>
                <p>This year various local, County, State and National organizations that help with Veteran Services and Mental Health programs will be hosted.</p>
              </div>
            </div>
          </div>
        </div>


      </div><!-- /row -->

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