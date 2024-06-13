 <?php

    	$Idade =  $_POST['txtIdade'];

    	if ($Idade<18) {
    		echo"Você é menor de idade";
    	}
    	else {
    		echo"Você é maior de idade";
    	}
    	
    ?>