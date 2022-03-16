<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/bootstrap.css">
    <link rel="stylesheet" href="registrarhoracss.css">
    <title>Registrar Horario</title>
</head>

<body>

<?php 
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
    $agora->format('y-m-d H:i');
   ?>

    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="d-flex align-items-center h-custom-1.5 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form action="alteracao/registrar.php" style="width: 23rem;" method="post">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrar</h3>

                            <input hidden class="form-control" id="dataHora" name="dataHora" value=" <?php echo $agora->format('y-m-d H:i');?>" type="text">
                            
                            <div class="form-outline mb-4">
                                <label class="form-label" for="inicio">Começo</label>
                                <input type="time" id="inicio" name="inicio" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="final">Final</label>
                                <input type="time" id="final" name="final" class="form-control form-control-lg" />

                            </div>

                            <div class="pt-1 mb-4" id="botao">
                           
                            </div>

                        </form>

                    </div>
                    <div class="d-flex align-items-center h-custom-0 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <div class="pt-1 mb-4" id="calcular" >
                            <button type="push" class="btn btn-info btn-lg btn-block" onclick="calcular()">Calcular</button>
                            </div>
                    </div>

                   
                </div>
                <!--onmouseenter='adsa"-->
                <div class="col-sm-6 px-0 d-none d-sm-block" id="tabela"  >
                    <img  id = "img" src="styles/league-of-legends-logo.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>

</body>
<script src="script.js"></script>

</html>