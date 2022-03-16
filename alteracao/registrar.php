    <?php
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $dataHora = $_POST['dataHora'];
    $totalhora = $_POST['totalhora'];
    $totalmin = $_POST['totalmin'];


   $conexao = new PDO('mysql:host=localhost; dbname=devedor', 'root', '');

    //$sql = "SELECT * FROM clientes where idCliente = :idCliente ;";

    $sql = "insert into jogatina(idUsuario,siteAberto, inicio, final, totalHoras, totalMin) values ( 1, :siteAberto, :inicio, :final, :totalHoras, :totalMin)";


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