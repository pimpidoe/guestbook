<?php include  'inc/connection.php'?>
<!DOCTYPE html>
<html>
<head>
  <title>Guestbook</title>
  <meta name="description" content="Guestbook">
  <meta name="keywords" content="HTML,CSS,SQL,PHP">
  <meta name="author" content="Pim Merkx">
	<link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header id="header"><img src="img/header.png"></header>
<form action="Insert.php" method="POST">
<input type="text" class="input" placeholder="First name" name="firstName" required></br>
<input type="text" class="input" placeholder="Last name" name="lastName" required></br>
<input type="text" class="input" placeholder="E-mail" name="Email" required></br>
<input type="text" class="input" placeholder="Website adress" name="websiteAddress" required></br>
<textarea class="reviewBox" placeho.lder="Write your review here..." name="message" required></textarea></br>
<button class="button" type="submit"> Send review </button>
<button class="button" type="reset"> Clear </button>
</form>
<footer id="footer">
Guestbook made by PM-Studios © 2018
</footer>
<?php include 'inc/reviewPost.php'?>
</body>
</html>
