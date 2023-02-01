<?php
#Exercise1
$nbre = 5;
$factoriel = 1;
for($i =1;$i<=$nbre;$i++){
$factoriel = $factoriel * $i;
}

echo "le factoriel de ".$nbre. ' est :'. $factoriel;
?>

<?php
#Exercise2
    $motif = "*";

    for ($i=1; $i <= 8; $i++) {
        echo $motif ."<br/>";
        for ($i=1; $i < 8; $i++) { 
            $motif .= "*";
            echo $motif ."<br/>";
        }
    }
?>

<?php
#Exercise3
  
    function century($year) {
        $century = ceil($year / 100);
        echo $century."th century";
    }

    century(2023);

?>
