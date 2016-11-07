<?php
	  
	$link = new PDO("mysql:host=localhost;dbname=Pepa","root","");

    $set = $link->prepare("SET NAMES 'utf8");
    $set2 = $link->prepare("SET CHARACTER SET 'utf8'");

    $set->execute();
    $set2->execute();

     if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $name = $_POST['Your_Name'];
        $telephone = $_POST['Telephone'];
        //$time = time();
        $comentar = $_POST['Comentar'];
        
        
        

        $statement = $link->prepare("INSERT INTO registr(email, Your_Name, Telephone, Comentar) VALUES(?, ?, ?, ?)") or die(mysqli_error($statement));
        $statement->execute(array($email, $name, $telephone, $comentar));
        
    }
?>
<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Rock CastleDescription: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111127

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Peppa Pig</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css' />
	
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Peppa Pig</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="wp-content/themes/peppapig/index.php">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<!--<li><a href="registr.php">Party</a></li>-->
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>
<div id="splash-wrapper">
	<div id="splash">
		<h2>Nullam pretium nibh ut turpis</h2>
		<p>Lorem ipsum daolor sit amet, consectetur adipiscing elit. Nulla quis orci ut erat iaculis posuere in consequat nulla. Cras vel nisl ipsum, nec tincidunt nunc. Sed egestas lorem nisl, sed dignissim quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce tristique dui sit amet mauris.</p>
	</div>
</div>
	<div id="wrapper">
	<div id="wrapper2">
		<div id="wrapper-bgtop">
			<div id="page">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#"></a>hyyyyyyyyyyyyyhhhhhhh</h2>
						<p class="meta"><span class="date">December 12, 2011</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<form name="reg_form" action="" method="post">
			<h3>
				<label for="email">E-mail</br>
				<input type="email" name="email" placeholder= "E-mail" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label for="Your Name">Your Name</br>
				<input type="text" name="Your_Name" placeholder= "Your Name" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label for="Telephone">Telephone</br>
				<input type="text" name="Telephone" placeholder= "Telephone" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label for="Comentar">Comentar</br>
				<textarea rows="10" cols="45" name="text" placeholder= "Comentar"></textarea><br></label>
            </h3>

		<input id="submit" type="submit" name="submit" value="Send" required />
	</form>
						</div>
					</div>
					
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
	</div>
</div>
  
  
  
  
	  


</div><!-- #main -->

<div id="footer">
	<div class="content">
		<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>