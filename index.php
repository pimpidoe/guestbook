<?php include  'inc/connection.php'?>
<?php include 'inc/reviewPost.php'?>
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

<input type="text" class="input" placeholder="First name"></br>
<input type="text" class="input" placeholder="Last name" required></br>
<input type="text" class="input" placeholder="E-mail"></br>
<input type="text" class="input" placeholder="Website adress"></br>
<textarea class="reviewBox" placeholder="Write your review here..."></textarea></br>
<button class="button" = type="reset"> Send review </button>
<button class="button"> Clear </button>
<footer id="footer">
Guestbook made by PM-Studios © 2018
</footer>
</body>
</html>
