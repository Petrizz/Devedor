<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Horario</title>
</head>
<body>
    
    <form id="formulario" action="registrar.php" method="post">

    <?php 
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
    $agora->format('d/m/y H:i');
   ?>

    <input hidden class="form-control" id="dataHora" name="dataHora" value=" <?php echo $agora->format('d/m/Y H:i');?>" type="text">
    
        <div>
                <label for="inicio">HorarioC</label>
                <input class="" id="inicio" name="inicio" value="" type="time">
                
        </div>
        <p>




        </p>
        <div>
                <label for="final">HorarioF</label>
                <input class="form-control" id="final" name="final" value="" type="time">
                
        </div>

        <p>



        </p>

        <div class="row form-group" id="botao">
            
            
        </div>
    </form>
    <div class="col-md-6" id="calcular">
    <button id= "calcular" class="btn btn-success float-right" onclick="calcular()">Calcular</button>
    </div>
    

</body>
<script src="script.js"></script>
</html>