<?php
$consulta = "hola que tal";
	$minus = strtolower($consulta);
		$asociar = array(
		    "a"=>".-",
		    "b"=>"-...", 
		    "c"=>"-.-.", 
		    "d"=>"-..", 
		    "e"=>".", 
		    "f"=>"..-.", 
		    "g"=>"--.", 
		    "h"=>"....", 
		    "i"=>"..", 
		    "j"=>".---", 
		    "k"=>"-.-", 
		    "l"=>".-..", 
		    "m"=>"--", 
		    "n"=>"-.", 
		    "o"=>"---", 
		    "p"=>".--.", 
		    "q"=>"--.-", 
		    "r"=>".-.", 
		    "s"=>"...", 
		    "t"=>"-", 
		    "u"=>"..-", 
		    "v"=>"...-", 
		    "w"=>".--", 
		    "x"=>"-..-", 
		    "y"=>"-.--", 
		    "z"=>"--..");

    for($i=0;$i<strlen($minus);$i++){
        foreach($asociar as $letter => $code){
            if($letter == $minus[$i]){
                echo "$code ";
            }
        }
    }
?>