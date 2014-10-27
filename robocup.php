<!DOCTYPE html>
<html lang="en" class="wall_e_robocup">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Axiom - Robo Wall-E</title>
  <?php include('assets.html') ?>
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
</head>
<body>
<?php
define("PROJETO", "Robocup - FIAP");
?>
<?php include('nav.php') ?>
<div class="container-fluid">
     <div style="width:300px;height:283px;left:0px" id="walle-end" data-start="bottom:-40%;left:-20%" data-900="bottom:10%;left:100%">
         &nbsp;
     </div>
     <div id="walle-fly" data-start="left:0%;top:-20%;transform:rotate(0deg);" data-400="top:30%;transform:rotate(-360deg);" data-700="top:10%" data-1000="top:15%">
         &nbsp;
     </div>

    <div id="breadcrumbs">
        <div class="container">
          <?php echo "Você esta em  " . PROJETO ; ?>
        </div>
    </div>
    <div class="parallax" data-divisor="1">
        <div class="container">
            <div class="content" id="scope">
              <h2>Escopo do Projeto</h2>
                <p>
                    O RoboCup é uma competição organizada pela FIAP onde grupos de alunos projetam e constroem robôs com o propósito de aplicarem na prática os principais conceitos de gestão de projetos e novas tecnologias.
                </p>
                <p>
                    A Axiom, propôs a construção de um robô que além de atender os pré-requisitos da competição, onde cada projeto deve contar com uma base motorizada e controlada através de um sistema wireless e uma arma controlada por um micro controlador arduíno que é acionada a partir do contato físico contra o adversário, um sistema de alimentação baseado na redução do consumo de carga e aproveitamento máximo da energia disponível.
                </p>
                <p>
                    Isso através de dois sistemas de alimentação independentes, onde o primeiro fornece a energia para a base motorizada, através de uma fonte de 9V e o segundo, esse o diferencial máximo do projeto, alimentando a arma do robô a partir de uma fonte fotovoltaica de 5V de saída.
                </p>
            </div>
        </div>
    </div>

    <div class="parallax" data-divisor="2" id="objective">
        <div class="container">
            <div class="content">
              <h2>Objetivo</h2>
                <p>
                    O principal objetivo deste projeto proposto pela FIAP, foi de colocar os conhecimentos obtidos no decorrer do curso em prática.
                </p><p>
                    Além disso, tivemos a possibilidade de entender a visão de mercado de um produto desenvolvido de maneira que atenda os padrões profissionais do setor tecnológico.
                </p>
            </div>
        </div>
    </div>

    <div class="parallax" data-divisor="3" id="gallery">

        <div class="container">
            <div class="content"  style="height:520px !important;">
                <h2>Galeria</h2>
                <div id="overflow-y">
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup01.jpg">
                            <img src="images/gallery/robocup/robocup01.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup02.jpg">
                            <img src="images/gallery/robocup/robocup02.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup03.jpg">
                            <img src="images/gallery/robocup/robocup03.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup04.jpg">
                            <img src="images/gallery/robocup/robocup04.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup05.jpg">
                            <img src="images/gallery/robocup/robocup05.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup06.jpg">
                            <img src="images/gallery/robocup/robocup06.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup07.jpg">
                            <img src="images/gallery/robocup/robocup07.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup08.jpg">
                            <img src="images/gallery/robocup/robocup08.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup09.jpg">
                            <img src="images/gallery/robocup/robocup09.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup10.jpg">
                            <img src="images/gallery/robocup/robocup10.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup11.jpg">
                            <img src="images/gallery/robocup/robocup11.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup12.jpg">
                            <img src="images/gallery/robocup/robocup12.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup13.jpg">
                            <img src="images/gallery/robocup/robocup13.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup14.jpg">
                            <img src="images/gallery/robocup/robocup14.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup15.jpg">
                            <img src="images/gallery/robocup/robocup15.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup16.jpg">
                            <img src="images/gallery/robocup/robocup16.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup17.jpg">
                            <img src="images/gallery/robocup/robocup17.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup18.jpg">
                            <img src="images/gallery/robocup/robocup18.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup19.jpg">
                            <img src="images/gallery/robocup/robocup19.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup20.jpg">
                            <img src="images/gallery/robocup/robocup20.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup21.jpg">
                            <img src="images/gallery/robocup/robocup21.jpg" alt="Robocup 2014">
                        </a>
                    </div>
                    <div class="gallery row">
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup22.jpg">
                            <img src="images/gallery/robocup/robocup22.jpg" alt="Robocup 2014">
                        </a>
                        <a rel="prettyPhoto[robocup]" class="col-xs-6 col-sm-4"  href="images/gallery/robocup/robocup23.jpg">
                            <img src="images/gallery/robocup/robocup23.jpg" alt="Robocup 2014">
                        </a>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </div>
</div>
<?php include('footer.html') ?>
<script type="text/javascript" src="js/jquery.resizecrop-1.0.3.min.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function($) {
        //resize img gallery
        $('.gallery img').resizecrop({
          width:300,
          height:150,
          vertical:"top"
        });  
        
        //gallery
        $("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_default'});
    });
</script>
</body>
</html>                                   
