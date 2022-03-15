    <?php
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $dataHora = $_POST['dataHora'];

    $ihora = intval(substr($inicio, 0, -3));
    $imin = intval(substr($inicio, 3));
    $fhora = intval(substr($final, 0, -3));
    $fmin = intval(substr($final, 3));

    $totalmin = 0;
    $totalhora = $fhora - $ihora;


    if ($imin > $fmin) {
        $totalmin = 60 - $imin;
        $totalmin = $totalmin + $fmin;
        $totalhora = $totalhora - 1;
    }
    if ($imin < $fmin) {
        $totalmin = $fmin - $imin;
    }

    echo ("Horas jogadas: " . $totalhora . "\nMinutos jogados: " . $totalmin);


    $conexao = new PDO('mysql:host=localhost; dbname=devedor', 'root', '');

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

    $registros = $sentenca->fetchAll();
    ?>