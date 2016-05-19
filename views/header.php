<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%2C800" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo DIR; ?>/public/css/main.css">	
<title>myMVC</title>	
</head>

<body>
	
<header>
<a href="<?php echo DIR; ?>/index">Index</a>
<?php if (session::get('loggedIn') == true) { ?>
<a href="<?php echo DIR; ?>/panel">Panel</a>
<a href="<?php echo DIR; ?>/login/logout">Logout</a>
<?php } else { ?>
<a href="<?php echo DIR; ?>/login">Login</a>	
<?php } ?>
</header>

<div id ="content">	
