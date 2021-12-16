<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Gaudium Software - Prova Desenvolvedor Full Stack</title>
</head>
<body>
<?php 
    require_once("controller/calculo.php"); 
    require_once("classes/crud.php");
?>
<main role="main">
    <div class="container mx-auto">
        <div class="row">
            <h1 class="mx-auto"><img src="assets/gaudium-logo.png" alt="Gaudium logo" width=100/> Gaudium Software</h1>
        </div>
        <div class="row">
            <h2 class="mx-auto">Prova Desenvolvedor Full Stack</h2>
        </div>
        <div class="row pt-5">
            <div class="jumbotron mx-auto">
                <form action="submit" class="container mt-4 contact-form-area" method="post">
                    <div class="form-group col">
                        <label for="" class="required">Cidade</label>
                        <input type="text" class="form-control-file form-file" id="" placeholder="" name=""  required>
                    </div>
                    <div class="form-group col">
                        <label for="" class="required">Distância</label>
                        <input type="number" step="0.01" class="form-control-file form-file" id="" placeholder="" name=""  required>
                    </div>
                    <div class="form-group col">
                        <label for="" class="required">Duração</label>
                        <input type="number" step="0.01" class="form-control-file form-file" id="" placeholder="" name=""  required>
                    </div>
                    
                    <button style="background-color: green; color:antiquewhite;" type="submit" class="btn float-right mt-15" name="calcular">Calcular</button>
                </form>
            </div>
        </div>
    </div> <!-- /container -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>