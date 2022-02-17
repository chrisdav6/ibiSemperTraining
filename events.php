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
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">
  <?php include_once "includes/navbar.php"; ?>

  <div class="secondary-heading">
    <div class="container">
      <h1>Fundraisers & Events</h1>
      <hr>
    </div>
  </div>

  <div id="events" class="secondary-content mt-4">
    <div class="container">

      <!-- <p>Currently no events scheduled, please check back soon.</p> -->

      <h2>Fundraisers</h2>

      <div class="row">

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4 class='link'>IST Cookbook</h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <img class="img-fluid" src="/public/img/ISTCookbook.png" alt="IST Cookbook">
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Available Now Until Supplies Last - <a class="btn btn-primary btn-sm" href="/public/pdf/ISTCookbook.pdf" target="_blank">Sneak Peek Here</a></h5>
                <p>The first edition of the IST “Feasts & Flavors Collection of Recipes” Cookbook has been released. Filled with favorite recipes of Veterans, First-Responders, friends and supporters of IST are a reflection of who we are at IST. Because it takes a village to support each other, and no one can do it all alone. Some of the photos included are of IST teams and their rescue dogs. This cookbook is now available to the public for $20 each for purchase. Please contact <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=IST Cookbook, Yes Please!" target="_blank">sonya@ibisempertraining.org</a> to order yours before supplies run out.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.facebook.com/events/3326128614296313?ref=newsfeed" target="_blank">2nd Annual Trivia Night</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/events/3326128614296313?ref=newsfeed" target="_blank">
                  <img class="img-fluid" src="/public/img/triviaNight2021-2.png" alt="Trivia Night">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>November 6th - <a class="link text-dark" href="https://goo.gl/maps/g4coCTWG8BSkRsAp7" target="_blank">Brunswick BBQ & Brew - 3925 NY-2, Troy, NY</a></h5>
                <p>PRE-REGISTRATION REQUIRED! Please join us for our 2nd annual Trivia Night at Brunswick BBQ & Brew in Troy! Build a team of 6 people, come up with a fun team name, register and enjoy suspense, laughter and teamwork during a fun night of Trivia questions. Enjoy a great meal and a cash bar. We will have a gift card Raffle and team prizes. Last year was a huge success and you want to make sure you reserve your spot this year! Proceeds from this event are used to adopt rescue dogs and training of PTSD Service Dogs. Please contact <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=Please Reserve My Spot for Trivia Night" target="_blank">sonya@ibisempertraining.org</a> to register or sponsor this event.
                </p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4 class='link'><a class="text-dark fund-link" href="https://www.facebook.com/tomsburnthills" target="_blank">2nd Annual Cuts4Pups</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/tomsburnthills" target="_blank">
                  <img class="img-fluid" src="/public/img/cutsPups.png" alt="Cuts Benefiting Pups">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>October 3rd - <a class="link text-dark" href="https://goo.gl/maps/JD1L93HtDMLojfH88" target="_blank">Tom's Barber Shop - 795 Saratoga Rd, Burnt Hills, NY</a></h5>
                <p>Sons, Brothers, Fathers, Uncles, Dads and Grandads: Get a haircut and benefit PTSD Service Dogs and their Veteran and 1st Responder handlers. We operate solely on donations and Fundraisers! Your support is much appreciated!
                </p>
                <a class='btn btn-primary btn-sm' href="/public/pdf/Cuts4Pups-flyer.pdf" target="_blank">
                  Download Flyer
                </a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4 class='link'><a class="text-dark fund-link" href="https://www.facebook.com/tomsburnthills" target="_blank">Patriotic Painted Jean Jacket Silent Auction</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/tomsburnthills" target="_blank">
                  <img class="img-fluid" src="/public/img/patrioticJacket.png" alt="Patriotic Jacket Auction">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>Open Now Until October 3rd - <a class="link text-dark" href="https://goo.gl/maps/JD1L93HtDMLojfH88" target="_blank">Tom's Barber Shop - 795 Saratoga Rd, Burnt Hills, NY</a></h5>
                <p>Here is a wonderfully painted jean jacket by a local Artist! Size XXL and brand new! The arms are turned back to show the whole painting. You can contact <a class="link text-dark" href="mailto:sonya@ibisempertraining.org?subject=Patriotic Painted Jean Jacket Silent Auction" target="_blank">sonya@ibisempertraining.org</a> or stop at Tom's Barbershop for your entry to the Silent Auction! The winner will be revealed October 3rd at the Cuts4Pups event.
                </p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="public/pdf/blazePizza12142020.pdf" target="_blank">Cause a scene for a good cause</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="public/pdf/blazePizza12142020.pdf" target="_blank">
                  <img class="img-fluid" src="/public/img/blaze.png" alt="Blaze Pizza">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>December 14th from 4:30pm - 7:30pm - <a class="link text-dark" href="https://goo.gl/maps/BEut4AnvMPjge2mj8" target="_blank">Mohwak Commons 400 Balltown Rd</a></h5>
                <p>Come and eat some delicious pizza at Blaze Pizza while supporting IBI. Blaze Pizza will donate 20% of proceeds from your meal back to our organization. </p>
                <p class='mb-1'>
                  <strong>Two ways to support</strong>
                </p>
                <p>1. Bring in <a class='link text-dark' href='public/pdf/blazePizza12142020.pdf' target='_blank'>this flyer</a> or show it on your phone before paying.</p>
                <p>2. Order Online - Orders must be placed on line via the Blaze Pizza App or blazepizza.com. Enter the code below into the 'Promo Code' field at checkout to have your transaction count toward the fund raiser. If entered
                  correctly, you'll see a $.01 discount applied to your check which confirms that 20% of your transaction will be
                  counted into the total donation. <strong>Promo Code: 1103A</strong></p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="public/pdf/blazePizza03312021.pdf" target="_blank">Blazing 4 PTSD Paws</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="public/pdf/blazePizza03312021.pdf" target="_blank">
                  <img class="img-fluid" src="/public/img/blaze.png" alt="Blaze Pizza">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>March 31st from 5pm - 8pm - <a class="link text-dark" href="https://goo.gl/maps/BEut4AnvMPjge2mj8" target="_blank">Mohwak Commons 400 Balltown Rd</a></h5>
                <p>Come and eat some delicious pizza at Blaze Pizza while supporting IBI. Blaze Pizza will donate 20% of proceeds from your meal back to our organization. </p>
                <p>Use <a class='link text-dark' href='public/pdf/blazePizza12142020.pdf' target='_blank'>this flyer</a> at checkout to support Veterans & First Responders to train their dogs as PTSD Service Dogs, at no charge to the teams. Our fundraisers pays for their training and dog adoption fees. Thank you for your support!</p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.facebook.com/events/3863633077007487" target="_blank">Eat For Change</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="/public/pdf/eatForChange2021.pdf" target="_blank">
                  <img class="img-fluid" src="/public/img/eatForChange.png" alt="Eat For Change">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>June 7th from 4pm - 8pm - <a class="link text-dark" href="https://goo.gl/maps/cDwqWmwYu5revAya8" target="_blank">441 Balltown Rd, Schenectady</a></h5>
                <p>Eat for Change and show your Patriotism by supporting our local Veterans and First Responders and their PTSD Service Dogs! Our program for PTSD Service Dogs is completely free to the applicants and we operate solely on Fundraisers and Donations. Thank you!</p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="public/pdf/flyerRideIS.pdf" target="_blank">PTSD & Service Dog Awareness Ride</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="public/pdf/flyerRideIS.pdf" target="_blank">
                  <img class="img-fluid" src="/public/img/flyerIST.jpg" alt="PTSD & Service Dog Awareness Ride">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>August 28th at 10:00am - <a class="link text-dark" href="https://g.page/BrunswickHarley?share" target="_blank">Brunswick Harley-Davidson</a></h5>
                <p>Please join us for our first PTSD & Service Dog Awareness Ride! Enjoy a great ride, ceremony, food, vendors and raffle items. All proceeds directly benefit Veterans and First Responders with PTSD as well as Rescue/Shelter dogs.
                </p>
                <p>Our Training Program is free to Veterans and First Responders with PTSD! We are funded solely though Fundraisers & Donations!! Only $20 per bike & rider. $10 for passengers. Dogs are free!</p>
              </div>
            </div>
          </div>
        </div> -->

      </div><!-- /row -->

      <h2>Outreach Events</h2>

      <div class="row">

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.facebook.com/The2LadiesMarket" target="_blank">Fall Festival at The Two Ladies Market</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/The2LadiesMarket" target="_blank">
                  <img class="img-fluid" src="/public/img/fallFestival2021.png" alt="Fall Festival 2021">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>October 16th from 10am - 3pm - <a class="link text-dark" href="https://goo.gl/maps/ckLfYyX4e3MLD3Y38" target="_blank">The Greenville Drive-In - 10700 NY-32, Greenville, NY</a></h5>
                <p>Please visit us at the last Vendor Market event for the Season! Over 30 vendors, Raffles, Fire Trucks, Face Painting, kid activities and the educational wildlife guy Mr. Laraway will be there. If you are hungry, visit enjoy great food from the Food Trucks. IST will be there as a vendor with at least one Service Dog team and we hope to meet and greet you.</p>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.facebook.com/crazytrain.ridersclub" target="_blank">9th Annual Suicide Prevention Run</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.facebook.com/crazytrain.ridersclub" target="_blank">
                  <img class="img-fluid" src="/public/img/crazyTrain.jpg" alt="Crazytrain Riders Club">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>May 7th at 11:00am - <a class="link text-dark" href="https://goo.gl/maps/4LhSaEVLgKCkpMvd8" target="_blank">1263 Patten Mills Road, Fort Ann, NY</a></h5>
                <p>Please join this Suicide Prevention Motorcycle Run at Boar’s Nest Bar & Grill and say hi to the IST Vendor team. Support this worthy cause to prevent suicide in our Community.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.operationadoptasoldier.org" target="_blank">Operation Adopt A Soldier</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.operationadoptasoldier.org" target="_blank">
                  <img class="img-fluid" src="/public/img/adoptASoldier.png" alt="Adopt A Soldier">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>June 4th - <a class="link text-dark" href="https://g.page/OperationAdoptASoldier?share" target="_blank">4281 NY-50, Saratoga Springs, NY</a></h5>
                <p>Operation Adopt A Soldier's main goal is to provide a sense of home to our soldiers and make them feel as comfortable as possible through care packages, gifts, letters, phone card, and more. Their motto is clear and simple "YOU WILL NEVER BE FORGOTTEN." Let's help out!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.visitlakegeorge.com/events/adirondack-woof-stock" target="_blank">Woof Stock!</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.visitlakegeorge.com/events/adirondack-woof-stock" target="_blank">
                  <img class="img-fluid" src="/public/img/woofStock.png" alt="Woof Stock">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>June 4th - 5th - <a class="link text-dark" href="https://goo.gl/maps/HNDjin1JNsk15v1d6" target="_blank">6307 Rt 9, Chestertown, NY</a></h5>
                <p>A weekend of peace, paws, and music! Put on your tie-dye t-shirts and travel back to 1969 with your dog at An Adirondack Woof Stock with entertainment, food, vendors and live music all day long - It'll be the best day of your dog's life!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.vetconny.com" target="_blank">VETCON</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.vetconny.com" target="_blank">
                  <img class="img-fluid" src="/public/img/vetcon.png" alt="VETCON 2021">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>November 29th - 30th - <a class="link text-dark" href="https://g.page/crowneplazaalbanydesmond?share" target="_blank">Desmond Hotel - 660 Albany Shaker Rd, Albany, NY</a></h5>
                <p>VETCON is the premier annual conference dedicated to the education and professional growth of veterans through networking with entrepreneurs, state agencies, and industry leaders.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://albany-saratogaspeedway.com" target="_blank">Military Appreciation Night at the Albany-Saratoga Speedway</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://albany-saratogaspeedway.com" target="_blank">
                  <img class="img-fluid" src="/public/img/racingNight2021.png" alt="Military Appreciation Night">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>July 2nd at 5:00pm - <a class="link text-dark" href="https://goo.gl/maps/oNJYShKtDoiwy4aC7" target="_blank">2671 U.S. 9, Ballston Spa, NY 12020</a></h5>
                <p>Please join us tonight at the Albany-Saratoga Speedway for a fun night. IST will be a Vendor at the Military Awareness Night and you can find out more about our program and meet us, as well as some of our teams. We look forward to seeing you there.
                </p>
                <a href="/public/pdf/racingMilitaryNight2021.pdf" target="_blank"' class="btn btn-dark">Download Flyer</a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://www.visitlakegeorge.com/events/pet-fest" target="_blank">Pet Fest</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://www.visitlakegeorge.com/events/pet-fest" target="_blank">
                  <img class="img-fluid" src="/public/img/petFest.png" alt="Pet Fest 2021">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>September 18th at 11:00am - <a class="link text-dark" href="https://goo.gl/maps/nAhak4UcgY5tS7JbA" target="_blank">Maple Street, Glens Falls, NY 12801</a></h5>
                <p>We are a vendor at PetFest! Stop by and say Hi! 👋 Pet Fest, held in Glens Falls City Park, brings pets and their owners together to showcase the pets and animal sector of the Glens Falls Collaborative. This event was created to show just how pet-friendly Glens Falls can be!</p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 mb-5">
          <div class="longFundraiser">
            <h4><a class="text-dark fund-link" href="https://albany-saratogaspeedway.com/2021-friday-night-schedule" target="_blank">Military Night at the Saratoga Speedway</a></h4>
            <div class="row">
              <div class="col-lg-3 col-md-4 mb-4">
                <a href="https://albany-saratogaspeedway.com/2021-friday-night-schedule" target="_blank">
                  <img class="img-fluid" src="/public/img/militaryNight2021.png" alt="Military Night 2021">
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <h5>September 10th - <a class="link text-dark" href="https://goo.gl/maps/cvgEYJpGewmbxHGm8" target="_blank">Albany Saratoga Speedway - 2671 U.S. 9, Ballston Spa, NY 12020</a></h5>
                <p>Please join us on Friday, September 10th at the Saratoga Speedway for Military, Law Enforcement, Fire & Rescue Night. We will be there as a Vendor, so please support your local heroes and say hi 👋 to us at our table!</p>
                <a class='btn btn-primary btn-sm' href="/public/pdf/militaryNight2021Flyer.pdf" target="_blank">
                  Download Flyer
                </a>
              </div>
            </div>
          </div>
        </div> -->

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