<?php
	if(isset($_GET["section"]))
	{
            $section = $_GET["section"];
			
	}
	else
	{
		$section = "";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DevBaka - Home</title>
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <link rel="shortcut icon" href="static/rainbow.ico" type="image/x-icon" />

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="date" content="2016-06-11T04:20:00+2000">
	<meta name="description" content="DevBaka - Software Projekte, Dokumentationen, Wissen, Musik und alles mögliche um die IT-Welt">

</head>
<body>
<div id="wrapper" class="greenshadow">
<header>
	<h1> DevBaka - Home </h1>
</header>

<nav>
        <?php echo("hello world"); ?>
	<?php include("templates/sides.php"); ?>
</nav>
<div id="contain">
<section id="rechts" class="column">
   
	<?php include("templates/sides.php"); ?>
</section>

<aside id="links" class="column">
	<?php include("templates/aside.php"); ?>
</aside>
</div>

<footer>
	<?php include("templates/footer.php"); ?>
</footer>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>

</div>
</body>
</html>