  <?php
    $usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

    $conexao = new PDO('mysql:host=localhost; dbname=devedor', 'root', '');

    $sql = "SELECT idUsuario FROM usuario where usuario = :usuario AND senha = :senha;";

    $res = $conexao->prepare($sql);

    $res->bindValue(':usuario', $usuario);
    $res->bindValue(':senha', $senha);

    $res->execute();

    $conexao = null;

    if($res->rowCount() == 1){
		echo  "<script>window.location.replace('../registrarHorario.php');</script>";
	}
	else{
		echo  "<script>alert('Erro de login, tente novamente.');</script>";
		echo  "<script>window.location.replace('../index.html');</script>";		
	}
    ?>