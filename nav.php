<?php include_once("analyticstracking.php") ?>
<nav id="Navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div id="blocos">&nbsp;</div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <?php if (defined("PROJETO")) {
                /// Navegação do projeto
                ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#projects">Projetos</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>
                    <ul class="dropdown-menu" role="menu">
                        <li class="navbar-text"><?php echo PROJETO; ?></li>
                        <? /// TODO: Fazer iteração dos projetos menos o projeto atual ?>
                        <li><a href="robo.php">Robocup 1</a></li>
                        <li><a href="robo.php">Site</a></li>
                        <li><a href="robo.php">Sei la o que</a></li>
                        <li><a href="robo.php">tra la la</a></li>
                    </ul>
            </li>
                <li class="active"><a href="#scope" class="go-section" data-divisor="1">Escopo</a></li>
                <li><a href="#objective" class="go-section" data-divisor="2">Objetivo</a></li>
                <li><a href="#gallery" class="go-section" data-divisor="3">Galeria</a></li>
                <?php }else{
                    ///  Lista de menu incial
                    ?>
                <li class="active"><a data-divisor="1" class="go-section" href="index.php">Home</a></li>
                <li><a data-divisor="2" class="go-section" href="#projects">Projetos</a> </li>
                <li><a data-divisor="3" class="go-section" href="#team">Equipe</a></li>
                <?php
                } ?>

            </ul>
        </div>


    </div>
</nav>
