<?php
    echo("hello lolz baka");
    require_once 'phpampel.php';
    $ampel = new Ampel();
    $zustand = $ampel->dbzustand();
    echo($zustand);
?>

<h1> hello world</h1>
<article>
    <?php
        echo "<h2>" . $zustand . "</h2>";
        if($zustand == 0){ 
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
                </style>
                    .';
        }
        
        elseif($zustand == 1){ 
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: yellow; }
                    #green1{background-color: black; }
                </style>
                    .';
        }
        
        elseif($zustand == 2){ 
            echo ''
            . '<style>
                    #red1{background-color: black; }
                    #yellow1{background-color: yellow; }
                    #green1{background-color: black; }
                </style>
                    .';
        }
        elseif($zustand == 3){ 
            echo ''
            . '<style>
                    #red1{background-color: black; }
                    #yellow1{background-color: black; }
                    #green1{background-color: green; }
                </style>
                    .';
        }
        
    ?>
    
    
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