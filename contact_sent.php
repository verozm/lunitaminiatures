<?php 
/**
 * <?
 * Un error comun en PHP es abrir <? en vez de <?php 
 * apartir de PHP 5 quedo deprecada la apertura como <?
 */


/**
 *  if (($_POST[sender_name] == "")||
 *    ($_POST[sender_email] == "")||
 *    ($_POST[sender_subject] == "")||
 *    ($_POST[sender_message] == "")) {
 *       header ("location: contact.html");      
 *     exit;
 * }
 * Estaba tratando de usar constantes en las llaves de tu arreglo
 * Es necesario usar quotes para tratar las llaves como un string.
 *  
 */


if (($_POST['sender_name'] == "")||
    ($_POST['sender_email'] == "")||
    ($_POST['sender_subject'] == "")||
    ($_POST['sender_message'] == "")) {
      header ("location: contact.html");      
    exit;
}




/**
 * Se recomienda usar single quotes en tus strings por la rapidez
 * en la que parsea variables... en este caso no hay tanto problema
 * aparte de que estas usando sinle quote para el string Sender's 
 * Considera evitar el uso de las llaves en encapsulated strings
 * yo recomiendo siempre concatenar string con las variables
 *
 */
$msg = "EMAIL SENT FORM Lunita Miniatures Page\r\n";
$msg .= "Sender's Name :     ". $_POST['sender_name'] ."\r\n";
$msg .= "Sender's E-mail:    ". $_POST['sender_email'] ."\r\n";
$msg .= "Sender's Phone:     ". $_POST['sender_phone'] ."\r\n";
$msg .= "Sender's Company:   ". $_POST['sender_cname'] ."\r\n";
$msg .= "Subjet :            ". $_POST['sender_subject'] ."\r\n";
$msg .= "Message :           ". $_POST['message'] ."\r\n";


//$to = "handmade@lunitaminiatures.com";
$to = "verozm@yahoo.com";
$subject = "EMAIL SENT FORM Lunita Miniatures Page";
$mailheaders = "From: Lunita Miniatures <handmade@lunitaminiatures.com>\r\n";
$mailheaders .= "Reply-To: $_POST[sender_email]\r\n";

mail ($to, $subject, $msg, $mailheaders);

?>

<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lunita Miniatures is a place where you will find a 1:12 scale miniatures in wood, polymer clay, acrylic and more, Everything is a handmade.">
    <meta http-equiv="keywords" content="1:12 scale miniatures, wood, polymer clay, acrylic, resin, felt, hose, dioramas, dolls, lamp, bed, desk, computer, chair"/>
  
    <title>Contact | Lunita Miniatures</title>  
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" />
    
  </head>

<body>

<header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.html">Lunita Miniatures</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://goo.gl/jMnnhE" target="_blank">Shop</a></li>
              <li><a href="preorder.html">Preorder</a></li>
              <li><a href="about.html">About</a></li>
              <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
      </div><!-- container -->
    </nav>
  </header>

<!--End Main menu-->

<!--Main Content-->
<section id="contact-page">
    <div class="container">
      <div class="center">        
          <h2>Thank you for contact us. As early as possible we will contact you</h2>
          <p><strong>Your Name: </strong>&nbsp;<? echo "$_POST[sender_name]"; ?></p>
          <p><strong>E-Mail: </strong>&nbsp;<? echo "$_POST[sender_email]"; ?></p>
          <p><strong>Phone: </strong>&nbsp;<? echo "$_POST[sender_phone]"; ?></p>
          <p><strong>Comments: </strong>&nbsp;<? echo "$_POST[message]"; ?></p>
      </div> 
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
        
        <div class="center">
          <h2><strong>Phone: 619.869.2506</strong></h2>
        </div>
      </div>
    </div><!--/.container-->
</section><!--/#contact-page-->
<!--End Main Content-->

<!--Footer-->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="social-links">
          <ul class="list-inline">
            <li><a href="https://goo.gl/QpFbke" target="_balnk"><img src="images/facebook.png" width="40" height="40" alt="Facebook"/></a></li>
            <li><a href="https://goo.gl/JG6Qze" target="_balnk"><img src="images/instagram.png" width="40" height="40" alt="Instagram"/></a></li>
            <li ><a href="https://goo.gl/AnEZp5" target="_balnk"><img src="images/pinterest.png" width="40" height="40" alt="Instagram"/></a></li>
            <li><a href="https://goo.gl/5fiQxV" target="_balnk"><img src="images/youtube.png" width="40" height="40" alt="Youtube"/></a></li>
            <li><a href="mailto:handmade@lunitaminiatures.com"><img src="images/email.png" width="40" height="40" alt="e-mail"/></a></li>
          </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-text">
          <p><a href="signup.html" style="color:#fff;">Register now</a></p>
          <p>Lunita Miniatures - 2018 All Right Reserved.</p>
        </div>
        </div>
          
      </div>
    </div>
  </footer>

  <!--End Fooder-->
  
  <!-- REQUIRED SCRIPTS FILES -->
    
    <!-- CORE JQUERY FILE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--WOW request-->
    <script src="js/wow.min.js"></script>
    <!-- BACKGROUND VIDEO PLUGIN  -->
    <script src="js/jquery.mb.YTPlayer.js"></script>
     <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="js/custom.js"></script>

</body>
</html>