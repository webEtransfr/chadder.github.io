

<?php
include('includes/title.inc.php');
$errors = array();
$missing = array();
// check if the form has been submitted
if (isset($_POST['send'])) {
  // email processing script
  $to = 'txz3961@rit.edu';
  $subject = 'Feedback from UNIX Tutorial';
  // list expected fields
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'comments', 'email');
  // set default values for variables that might not exist
  if (!isset($_POST['subscribe'])) {
	$_POST['subscribe'] = '';
  }
  if (!isset($_POST['interests'])) {
	$_POST['interests'] = array();
  }
  // create additional headers
  $headers = "From: Blah Blah<feedback@example.com>\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  require('includes/processmail.inc.php');
 
}
?>

<!DOCTYPE HTML> 
<head>

<link rel="stylesheet" type="text/css" href="css/etransfr.css">
	
<meta charset="UTF-8">
<meta name="keywords" content="Etransfr">
<meta name="description" content="We aim to give the health industry the ability to communicate electronically with you!">


<script src="js/modernizr.custom.35297.js"></script>

		
		
<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="/js/jquery-1.11.0.min.js"><\/script>')</script>
		
<script src="js/parallax.js"></script>
<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	

<title> Etransfr </title>

<script type="text/javascript">
	

$(document).ready( function() {
    $('.primary2').smint({
    	'scrollSpeed' : 1000
    });
});

</script>

<script src="includes/contact_form_validation.js"> </script>

</head>

<html>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<!--Entire page placed into main div.-->
<div id="main">
	
	<div class = "primary2">
		
	<div id = "logo" align = left>
		<img src = "images/logo/etransfr.png" alt = "etransfr" title = "Etransfr" height = "50px" width = "260px" class = "etransfre"/>
	</div>
	
		<div class = "primary2inner">		
		<a href="#slide-1" id = "s1" class = "nav2">Welcome</a>

		<a href="#slide-2" id = "s2" class = "nav2">Chadder</a>

		<a href="#slide-3" id = "s3" class = "nav2">Video</a>

		<a href="#slide-4" id = "s4" class = "nav2">About Us</a>
				
		<a href="#slide-5" id = "s5" class = "nav2">Contact Us</a>

		</div>				
	</div>
	
	<header>
	<div id="header">
	
		
	
		<!--Menu at top of page and navigation is placed here. Each link is a separate div
		for more flexibility. **Note: Each link is called a section.-->	
		
		<!--*********I am so sorry, I forgot to remove that comment above! The links are not 
		divs! They're just in a regular UL/LI list form.-->
		
		
		<nav id = "primary">			
			<ul>
				<li>
				<h1>Welcome</h1>
				<a class="slide-1" href="#slide-1">View</a>
				</li>
				
				<li>
				<h1>Chadder</h1>
				<a class="slide-2" href="#slide-2">View</a>
				</li>
				
				<li>
				<h1>Video</h1>
				<a class="slide-3" href="#slide-3">View</a>
				</li>
				
				<li>
				<h1>About Us</h1>
				<a class="slide-4" href="#slide-4">View</a>
				</li>
				
				<li>
				<h1>Contact Us</h1>
				<a class="slide-5" href="#slide-5">View</a>
				</li>
			</ul>					
		</nav>
		
	</div>
	</header>
	
<!--Main content starts here.-->
<div id = "content">
	<div id="slide-1">
	
	<span class = "introduction">Hello world! We're Etransfr.</span></br>
<span class = "introbody">A company that is dedicated to making the Internet private again.
With that in mind, we build interactive solutions that keeps your information private and out of the hands of other companies.</span>
	
	</div>
	
		<div class="next-prev">
		<hr />
		<a class="next slide-2" href="#slide-2">Next</a>
		</div>
		
	<div id="slide-2">
	
	<p>
	<span class = "introduction">Chadder</span></br>
	<span class = "introbody">
	Chadder is a security solution that tackles social messaging.
	It allows the everyday user to approach secure messaging without being a security guru. You can send any message you want, but we can't see it ourselves.
	</span>
	</p>
	
	</div>
	
		<div class="next-prev">
		<a class="prev slide-2" href="#slide-2">Previous</a>	
		<hr />
		<a class="next slide-4" href="#slide-4">Next</a>
		</div>


	<div id = "slide-3">
	    <p>
		<span class = "introduction">Chadder Video</span></br>
		Watch the video to learn a little more about the Chadder application.</br></br></br>
	    </p>
			
		<embed
	width="800" height="500"
	src="https://www.youtube.com/v/mXjmg9IgSMI"
	type="application/x-shockwave-flash">
	</embed>
	
	</div>

		<div class="next-prev">
		<a class="prev slide-1" href="#slide-1">Previous</a>	
		<hr />
		<a class="next slide-3" href="#slide-3">Next</a>
		</div>

	
	
		
	<div id="slide-4">
	
	<p>
	<span class = "introduction">About Us</span></br>
	<span class = "introbody">
	The Etransfr team consists of a mixture of undergraduate and graduate Rochester Institute of Technology students.
	The students come from different majors and backgrounds to create solutions to allow the user to keep control of their own information.
      </span>
	</p>
	</div>
	
		<div class="next-prev">
		<a class="prev slide-3" href="#slide-3">Previous</a>	
		<hr />
		<a class="next slide-5" href="#slide-5">Next</a>
		</div>
	
		
	<div id="slide-5">
	
	<p>
	<span class = "introduction">Contact Us</span></br>
	Interested in contacting us for more information or following us for updates?

	<h2>Contact Us </h2>
        <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))){ ?>
			<p class = "warning"> Sorry, your mail could not be sent. Please try later.</p>			
		<?php } elseif ($missing || $errors) { ?>
          <p class="warning">Please complete the missing item(s) indicated.</p>
        <?php } ?>
     
	  
        <form onsubmit = "return formChecker()" id="feedback" method="post" action="">
            <p>
                <label for="name">Name:
                <?php if ($missing && in_array('name', $missing)) { ?>
                  <span class="warning">Please enter your name</span>
                <?php } ?>
                </label>
                <input name="name" id="name" type="text" class="formbox"				
				<?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
				
				<div class = "error" id = "nameError"> Required: Please enter your name. </br>
				</div>
				
            </p>
			
            <p>
                <label for="email">Email:
                <?php if ($missing && in_array('email', $missing)) { ?>
                  <span class="warning">Please enter your email address</span>
                <?php } elseif (isset($errors['email'])) { ?>
				<span class = "warning">Invalid Email Address</span>
				<?php } ?>
                </label>
                <input name="email" id="email" type="text" class="formbox"
				<?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
				
				<div class="error" id="emailError">Required: Please enter your email address.<br />
				</div>
            </p>
			
            <p>
                <label for="comments">Comments:
                <?php if ($missing && in_array('comments', $missing)) { ?>
                  <span class="warning">Please enter your comments</span>
                <?php } ?>
                </label>
                <textarea name="comments" id="comments" cols="60" rows="8"><?php
				if ($missing || $errors) {
                  echo htmlentities($comments, ENT_COMPAT, 'UTF-8');
                } ?></textarea>
				
				<div class="error" id="commentError">Required: Please enter a message<br />
				</div>
            </p>

			<p>
            <input name="send" id="send" type="submit" value="Send message">
			
        </p>
			
        </form>
		</div>
	</div>
		
		<div class="next-prev">
		<hr />
		<a class="prev slide-4" href="#slide-4">Previous</a>	
		
		</div>
		
	
			
</footer>
	</div>


</body>
</html>
