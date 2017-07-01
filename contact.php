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

<section id="three" class="wrapper">
      <div class="inner">
        <header class="align-center">
          <h2>Nous contacter</h2>
          <p>Téléphone ? Mail ? Formulaire ?</p>
          <p>Faites votre choix et contactez-nous.</p>
        </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Sujet</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">En choisir un:</option>
                                    <option value="service">Service</option>
                                    <option value="suggestions">Devis</option>
                                    <option value="product">Autre (datalove, suggestion, etc)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="C'est un monde avec des licornes. Oh, heureusement que ce texte va être remplacé."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Envoyer le message</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            <img src="images/logo200.png" alt=""></img>
            </div>
            <div class="col-md-4">
                <form>
                <address>
                    <strong>Infoloisire</strong><br>
                    XXXXX<br>
                    <abbr title="Phone">
                        P:</abbr>
                    XXXXX
                </address>
                <address>
                    <strong>XXXXX</strong><br>
                    <a href="mailto:XXXXX">XXXXX</a>
                </address>
                </form>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
    </body>

</html>
