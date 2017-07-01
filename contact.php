<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InfoLoisire</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->

    </head>

    <body>
<?php include 'nav.php'; ?>
<!-- Contact us (block 2) -->
    <div class="block-2-container section-container contact-container">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 block-2 section-description wow fadeIn">
                <h2>Contact us</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                  <p>
                    For every question, information or just to say "Hi", here is how you can get in touch with us. Send us an email or come visit us!
                  </p>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
              <h3>Email us</h3>
                  <form role="form" action="assets/contact.php" method="post">
                    <div class="form-group">
                      <label class="sr-only" for="contact-email">Email</label>
                        <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="contact-subject">Subject</label>
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="contact-message">Message</label>
                        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                      </div>
                      <button type="submit" class="btn">Send it</button>
                  </form>
            </div>
            <div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
              <h3>Visit us</h3>
                  <p><span aria-hidden="true" class="icon_pin"></span>XXXX</p>
                  <p><span aria-hidden="true" class="icon_phone"></span>XXXXX</p>
                  <p><span aria-hidden="true" class="icon_mail"></span>XXXX <a href="">XXXX</a></p>
            </div>
          </div>
          <div class="contact-icon-container">
            <span aria-hidden="true" class="icon_mail"></span>
          </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
    </body>

</html>
