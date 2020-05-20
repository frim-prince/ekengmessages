
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

}



if (session_status() == PHP_SESSION_NONE) {
    session_start();



}


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
    
}else{
  echo "<script>window.open('../index.php','_self')</script>";
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Send Email</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  
      <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
  
  <!-- css files -->
    <link href="css/css_slider.css" rel="stylesheet"><!-- Slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
  <!-- //css files -->
  
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>

<body>
  <!-- contact-form 2 -->
  <!-- header -->
<header style="background-color: black;">
  <div class="container">
    <!-- nav -->
    <nav class="py-3 d-lg-flex">
      <div id="logo">
        <h1> <a href="index.html"><span class="fa fa-university"></span> Ekeng Messaging </a></h1>
      </div>
      <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
      <input type="checkbox" id="drop" />
      <ul class="menu ml-auto mt-1">
         <li class=""><a href="#" style="text-transform: lowercase;font-size: 13px;padding-right: 100px;">welcome: <?php echo $_SESSION["username"] ?></a></li>
        <li class=""><a href="index.php">Options</a></li>
        <li class="last-grid" style="padding-left: 20px;"><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
    <!-- //nav -->
  </div>
</header>
<!-- //header -->
  <section class="w3l-contact-2">
    <div class="contact-infubd section-gap">
      <div class="wrapper" style="margin-top: 200px;">
        <div class="contact-grids d-grid">
          <div class="contact-left" >
            <h3>Email</h3>
            <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
            <h4>Send Email Here</h4>
             <a href="https://apps.mnotify.net/admin_groups/message_excel" target="_blank"><button class="btn">Send SMS</button></a>
          </div>
          <div class="contact-right">
             <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('database.php');


  global $conn;

  if(isset($_POST["sendmail"])){
   $senderemail =mysqli_escape_string($conn,$_POST["senderemail"]);
    $password =mysqli_escape_string($conn,$_POST["password"]);
    $receipient =mysqli_escape_string($conn,$_POST["receipient"]);
    $subject =mysqli_escape_string($conn,$_POST["subject"]);
    $message =mysqli_escape_string($conn,$_POST["message"]);
  


 require 'vendor/autoload.php';
 
$mail = new PHPMailer;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        
//$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username =$senderemail;                 // SMTP username
$mail->Password =$password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($senderemail, 'Ekeng Group');
$mail->addAddress($receipient);//;'peter@fiagbe.com';'social@9logix.com');     // Add a recipient
              // Name is optional
$mail->addReplyTo($senderemail);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "
                  <!DOCTYPE html>
                  <html>
                  <head>
                    <title></title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                    <meta http-equiv='content-type' content='text/html; charset=ISO-8859-15'>
                  </head>
                  <body>
                      <div style='border:0.5px solid black;padding:5px;'>
                   
                   <div style='padding-bottom:30px;padding-top: 30px;padding-left: 3px;padding-right: 3px; '>
                       <img  src='' class='center'>
                        
                      <p style='text-align: center; font-weight: bold; font-family: Times'>THE EKENG GROUP</p>
                      <p style='text-align: center; font-size: 12px;font-family: Times'>INNOVATIVE-EXCELLENCE-INTERGRITY</p>
                      <p style='text-align: center; font-size: 12px;font-family: Times' >EVANS AFRIYIE</p>
                   </div>
                  
                 <div style='border:border:0.1px solid black; padding: 5px; ' >$message</div>
                  <div >
                   <div style='padding-bottom:30px;padding-top: 30px;padding-left: 3px;padding-right: 3px; font-size: 12px; '>
                        
                      <p style='text-align: center;  font-family: Times'>29 LESLEY OPOKU-WARE DRIVE,</p>
                      <p style='text-align: center;font-family: Times'>EXTENSION-KUMASI</p>
                      <p style='text-align: center;font-family: Times'>WWW.THEEKENGGROUP.COM,</p>
                      <p style='text-align: center;font-family: Times'>P.O.BOX,1136,</p>
                      <p style='text-align: center;font-family: Times'>OBUASI-ADANSI,</p>
                       <p style='text-align: center;font-family: Times'>TEL:+233-322-499-941,</p>
                       <p style='text-align: center;font-family: Times'>Admin@theekenggroup.com,</p>
                   </div>
                  </div>
               </div>
                  </body>
                  </html>
                 ";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo" <div class='alert alert-success'>
    <strong>Success!</strong> Email has been sent
  </div>";
}
    }



  






?>
               <form method="post" class="signin-form">
              <div class="input-grids">

                  <input type="email" name="senderemail" id="w3lSender" placeholder="Sender Email:" class="contact-input"
                  required="" />
                <input type="password" name="password" id="w3lSubect" placeholder="sender Password:" class="contact-input" required="" />
                <input type="email" name="receipient" id="w3lSender" placeholder="Recipient Email:" class="contact-input"
                  required="" />
                <input type="text" name="subject" id="w3lSubect" placeholder="Subject" class="contact-input" />
              </div>
              <div class="form-input">
                <textarea name="message" id="w3lMessage" placeholder="Type your message here*"
                  required=""></textarea>
              </div>
              <button class="btn submit" name="sendmail">Send Message</button>
            </form>
          </div>

        </div>
      </div>
  </section>
  <!-- /contact-form-2 -->
</body>

</html>