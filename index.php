
<?=
    $array[6];
    
    for($i = 0; $i < 6; $i++){
        $random = (rand(1,6))*10;

        for($j = 0; $j < 6; $j++){
            if($array[$j] === $random){
                $random = (rand(1,6))*10;
                $j = -1;
            }
        }
        $array[$i] = $random;


        echo nl2br("PASSO ".$i."\n\n");
        echo nl2br("sequência: ");        
        for($j = 0; $j < $i; $j++){
            echo $array[$j]." ";
        }
        echo nl2br("\n\n");
        echo nl2br("numero que sera inserido: "." $random"."\n\n\n\n");




        for($w = 0; $w < $i; $w++){
            if($random < $array[$w]){
                $aux = $array[$i] ;
                $array[$i] = $array[$w];
                $array[$w] = $aux;
                $random = $aux;
            }
        }

    }

    require "index_view.php";
?>