<?php
    if (isset($_POST['calcular'])):
        require_once('model/historico.php');

        $cidade = $_POST['cidade'];
        $distancia = $_POST['distancia'];
        $duracao = $_POST['duracao'];

    endif;

?>