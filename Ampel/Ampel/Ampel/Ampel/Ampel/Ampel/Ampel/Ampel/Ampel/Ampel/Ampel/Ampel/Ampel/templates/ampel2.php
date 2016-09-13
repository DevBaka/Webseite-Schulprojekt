<?php
    echo("hello lolz baka");
    require_once '../phpampel.php';
    $ampel = new Ampel();
    $zustand = $ampel->zustand();
    echo($zustand);
?>

<h1> hello world</h1>
<article>
    
	<div id="ampel1" class="Ampel1">
		<div id="red1" >
		</div>
		<div id="yellow1" >
		</div>
		<div id="green1" >
		</div>
	</div>
	<form method="POST">
		<input type="submit" name="enter" value="Pressed" id="btn" class="Ampel1">
	</form>
	
</article>