    <?php
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $dataHora = $_POST['dataHora'];

    echo $dataHora ;
    /*
    $ihora = intval(substr($inicio,0, -3));
    $imin = intval(substr($inicio, 3));
    $fhora = intval(substr($final, 0, -3));
    $fmin = intval(substr($final, 3)); 


    


/*	
27 1540	2000 4 20
28 1650 2000 3 10
29 1645 1900 2 15
30 1710 2120 4 10
31 1450 1850 4 0
1  1450 1950 5 0
2  1505 1910 4 5
3  1530 1900 3 30
4  1435 1815 3 40
5  1520 1950 4 30
6  1750 2030 2 40
7  1440 1810 3 30    */
/*

$totalmin = 0;
$totalhora = $fhora - $ihora;


if($imin > $fmin){
    $totalmin = 60 - $imin;
   $totalmin = $totalmin + $fmin;
   $totalhora = $totalhora - 1;

}
if($imin<$fmin){
    $totalmin = $fmin - $imin;
}

echo("Horas jogadas: " . $totalhora . "\nMinutos jogados: " . $totalmin);


 /*   $conexao = new PDO('mysql:host=localhost; dbname=devedor', 'root', '');

    //$sql = "SELECT * FROM clientes where idCliente = :idCliente ;";

    $sql = "insert into jogatina(siteAberto, inicio, final, totalHoras, totalMin) values (:siteAberto, :inicio, :final, :totalHoras, :totalMin)";


    $sentenca = $conexao->prepare($sql);

    $sentenca->bindValue(':siteAberto', $dataHora);
    $sentenca->bindValue(':inicio', $inicio);
    $sentenca->bindValue(':final', $final);
    $sentenca->bindValue(':totalHoras', $totalhora);
    $sentenca->bindValue(':totalMin', $totalmin);
    
    $sentenca->execute(); 

    $conexao = null;

    $registros = $sentenca->fetchAll();*/
    ?>