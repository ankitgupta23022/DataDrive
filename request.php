<?php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }

 if(empty($_POST["message"]))
 {
  $error .= '<p style="font-family:Times New Roman"><label class="text-danger">Some message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'subject' => $subject,
   'message' => $message
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us......😄</label>';
  $name = '';
  $email = '';
  $subject = '';
  $message = '';
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DataDrive</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load No Cache for this website-->
    
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">

    <!------------------------------------>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=yes">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" type="img/ico" href="images/drive_logo.ico">

	<!-------My font BEGINS (CURSIVE)-------->
	<style type="text/css">
      #cursive{
      font-family:'Monotype Corsiva','Apple Chancery','ITC Zapf Chancery','URW Chancery L',cursive;
       }

      #theight{
          height :90px;
      }
	</style>

	  
	<!-------My font ENDS-------->



<!--===============================================================================================-->
</head>
<body>
	 
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="//ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_5.ico">
    <link rel="shortcut icon" href="images/drive_logo.ico" type="image/x-icon" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- DMCA TAKEDOWN Modal BEGINS -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DMCA Takedown Notice:-</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
				All parts of the DataDrive are for private use only.
No files are hosted on our server,
All contents are provided by non-affiliated third parties.
They are only indexed much like how Google works.
DataDrive does not accept the responsibility for content hosted on third party websites and does not have any involvement in the downloading/uploading of movies. We just post links available in internet.
This site merely indexes other site’s contents. The hosting server or the administrator cannot be held responsible for the contents of any linked sites or any link contained in a linked site, or changes/updates to such sites. Since freedom of speech is allowed in this industry, we do not act in any kind of copyright infringement. If in case there is an infringing content and you believe it should be removed then contact us to remove it immediately. We won’t even ask you for verification details.

Contact us here and state the name of the post published on our site.<br />
Email:- <a href="mailto:ankitgupta23022@gmail.com">Ankit Gupta</a><br>

Thank you for understanding...<br />

"Please allow 2-3 Business Days for the Removal of copyright material"

                                </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- DMCA TAKEDOWN Modal ENDS -->

    <!------------------------Navbar Start---------------------->
    <nav class="navbar navbar-expand-lg fixed-top navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php"><img src="images/gdrive.png" width="30" height="30" class="d-inline-block align-top" alt="">
            DataDrive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-black"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-camera"></i>Bollywood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="webseries.php"><i class="fas fa-ticket-alt"></i>WebSeries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hollywood.php"><i class="fas fa-video"></i>Hollywood</a>
                </li>
              <!--
                <li class="nav-item">
                    <a class="nav-link" href="softwares.php"><i class="fas fa-play-circle"></i>Softwares</a>
                </li>
              -->
                <li class="nav-item">
                    <a class="nav-link" href="games.php"><i class="fas fa-gamepad"></i>Games</a>
                </li> 
                <li class="nav-item active">
                    <a class="nav-link" href="request.php"><i class="fas fa-file"></i>Request</a>
                </li>
            </ul>
        </div>
    </nav>
    
	<!------------------------Navbar Ends---------------------->
	
<!-------------------------MAIN BODY AREA BEGINS------------->
   <form method="post">
	 
	 
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="24.491327" data-map-y="86.699900" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title" id="cursive">
					Request Something:-
				</span>
				
				<div class="wrap-input100 validate-input form-group" data-validate="Please enter your name">
					<input class="form-control" type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>" />
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form-group" data-validate = "Please enter email: something@xyz.com">
					<input class="form-control" type="text" name="email" placeholder="Enter your Email" value="<?php echo $email; ?>" />
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form-group" data-validate = "Please enter your message">
					<textarea class="form-control" name="message" id="theight" placeholder="Enter Your Message(eg:- Describe Your file or you could place your magnet links here..😉)"><?php echo $message; ?></textarea>
					<span class="focus-input100"></span>
				</div>
				
				<?php echo $error; ?>

				<div class="container-contact100-form-btn form-group">
					<button class="contact100-form-btn" type="submit" name="submit"  value="Submit">
						Send 
					</button>
				</div>

				

			</form>

			<div class="contact100-more">
				Contact for any issues on: <span class="contact100-more-highlight">8434940067</span>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!-------------------------MAIN BODY AREA ENDS------------->

  <!-------------------------FOOTER BEGINS------------------------------->

  <footer class="footer-distributed">

	<div class="footer-left">

		<h3>Ankit<span>Gupta</span></h3>

		<p class="footer-links">
			<a href="index.php">Bollywood</a>
			·
			<a href="webseries.php">WebSeries</a>
			·
			<a href="hollywood.php">Hollywood</a>
		<!--	·
			<a href="softwares.php">Softwares</a>
-->	·
			<a href="games.php">Games</a>
			·
			<a href="request.php">Request</a>
			·
			<a data-toggle="modal" data-target="#exampleModal" href="">DMCA</a>
		</p>

		<p class="footer-company-name">Copyright &copy; 2020 All rights reserved |<style>.heart{color:#bf0f0f;}</style>
Made with <span class="heart">❤</span> by Ankit</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>Guru Nanak Institutions</span> Mullana, Ambala</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+91 8434940067</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:ankitgupta23022@gmail.com">ankitgupta23022@gmail.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p class="footer-company-about">
			<span>About</span>
			Young, Carefree.
		</p>

		<div class="footer-icons">

			<a href="https://www.facebook.com/ankitgupta23022"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/AnkitGu86825797"><i class="fa fa-twitter"></i></a>
			<a href="https://instagram.com/_ankit_.gupta?igshid=ny5a5jjb2idh"><i class="fa fa-instagram"></i></a>
			<a href="https://www.linkedin.com/in/ankit-gupta-02178a148/"><i class="fa fa-linkedin"></i></a>

		</div>

	</div>

</footer>

<!--------------------------FOOTER ENDS------------------------------->

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>
