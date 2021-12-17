<?php
    require_once ("classes/crud.php");

    if (isset($_POST['calcular'])):
        require_once('model/historico.php');

        $cidade = $_POST['cidade'];
        $categoria = $_POST['categoria'];
        $distancia = $_POST['distancia'];
        $duracao = $_POST['duracao'];
        
        $valores = new categoria();
        $valores = $categorias->buscarPorNome($categoria);
        
        $bandeirada = $valores->bandeirada;
        $valorHora = $valores->valorHora;
        $valorKm = $valores->valorKm;
        
        // Calculo
        


    endif;

?>