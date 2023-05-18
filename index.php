<?php
	@include('assets-main/php/contact.php');

	if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $message = $_POST["message"];

    if(empty($name) or empty($mail) or empty($message))
    {
		$error[] = "You can't leave empty fields.";
    }
    else
    {
		$insert = "INSERT INTO contact_form(name, email, message) VALUES('$name','$mail','$message')";
		mysqli_query($conn_contact, $insert);
		echo '<script>
				alert("Email sent succesfuly!");
			</script>';
		mysqli_close($conn_contact);
    }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Elysium Hotel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets-main/css/main.css" />
		<noscript><link rel="stylesheet" href="assets-main/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Elysium Hotel</h1>
								<p>Oferind servicii impecabile, facilități deosebite și o experiență de neuitat, Elysium Hotel este destinația perfectă pentru o vacanță de vis.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="Inregistrare/login_form.php">Login</a></li>
								<li><a href="Inregistrare/register_form.php">Register</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>Elysium Hotel este un complex de lux situat într-o locație de vis, pe malul mării, în orașul Paphos din Cipru. Hotelul se întinde pe o suprafață mare de teren și oferă oaspeților săi o gamă largă de facilități și servicii de înaltă calitate.</p>
								<p>Cu o arhitectură impresionantă inspirată de cultura cipriotă, hotelul dispune de camere și suite elegante și spațioase, mobilate cu gust și dotate cu facilități moderne, pentru un sejur confortabil și relaxant. Fiecare cameră are balcon privat sau terasă, de unde oaspeții pot admira peisajul mirific al mării și al grădinilor tropicale ale hotelului.</p>
								<p>Elysium Hotel oferă, de asemenea, mai multe opțiuni pentru a savura deliciile culinare locale și internaționale, precum și băuturile răcoritoare și cocktailurile speciale, într-un cadru elegant și sofisticat. Facilitățile de recreere ale hotelului includ mai multe piscine exterioare și interioare, un centru spa și fitness, terenuri de tenis și de golf, precum și o gamă largă de sporturi acvatice.</p>
								<p>Pentru cei care caută o locație de lux pentru evenimente speciale, Elysium Hotel oferă și facilități de conferințe și evenimente, dotate cu cele mai recente tehnologii, pentru a crea evenimente de neuitat. În concluzie, Elysium Hotel este locul perfect pentru a vă relaxa și a vă bucura de soare, de mare și de servicii de lux în Cipru.</p>
							</article>


						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>


								<form method="post" action="">
									<?php
									if(isset($error)){
										foreach($error as $error){
											echo '<span class="error-msg">'.$error.'</span>';
										};
									};
									?>
									<div class="fields">

										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" placeholder="Type in your name" />
										</div>

										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" placeholder="Type in your email" />
										</div>

										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4" placeholder="Type in your message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" name="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;Gortoescu Ionut Adrian.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets-main/js/jquery.min.js"></script>
			<script src="assets-main/js/browser.min.js"></script>
			<script src="assets-main/js/breakpoints.min.js"></script>
			<script src="assets-main/js/util.js"></script>
			<script src="assets-main/js/main.js"></script>

	</body>
</html>
