<?php
  $title = "IBI Semper Training - Application Forms";
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
      <h1>PTSD Application Forms</h1>
      <hr>
    </div>
  </div>

  <div id="applications" class="secondary-content mt-4 mb-5">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="form-item">
            <h4>IST PTSD Service Dog Application</h4>
            <a href="./public/pdf/PTSDServiceDogApplication.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-item">
            <h4>Waiver of Liability & Informed Consent Release</h4>
            <a href="./public/pdf/waiverOfLiability.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-item">
            <h4>Volunteer Information</h4>
            <a href="./public/pdf/volunteerInformation.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-item">
            <h4>Applicant Intake Form</h4>
            <a href="./public/pdf/applicantIntakeForm.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-item">
            <h4>Physician Form Letter</h4>
            <a href="./public/pdf/physicianFormLetter.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-item">
            <h4>Training Facility Operating Policies</h4>
            <a href="./public/pdf/trainingFacilityOperatingPolicies.pdf" class="download-form mr-3" target=_blank><i class="fas fa-file-download"></i> Download Form</a>
            <!-- <a href="#" class="fill-form" target=_blank><i class="fas fa-paper-plane"></i> Fill Out Online</a> -->
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

</body>

</html>