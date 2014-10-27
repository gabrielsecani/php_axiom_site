<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Axiom</title>
  <?php include('assets.html') ?>
</head>
<body>
<?php
define('INDEX',true);
?>
<?php include('nav.php') ?>
<div class="container-fluid">
    <div class="parallax" data-divisor="1">
        <div class="container">
            <div class="content">
                <div id="walle-end" data-start="bottom:-200px;" data-850="bottom:40px;">
                    &nbsp;
                </div>

                <p>A Equipe Axiom, foi constituída com o intuito de desenvolver os diversos projetos do curso de Sistemas de Informação da Faculdade de Informática e Administração Paulista (FIAP).</p>
                <p>A visão da equipe é tornar-se excelência em empreendedorismo e desenvolvimento tecnológico. Para isso investe em esforços em auto capacitação, absorvendo conhecimento e experiências que vão desde o ambiente técnico ao gerenciamento do projeto, transformando os objetivos se em metas cumpridas.</p>
                <br>
                <p class="right">“Sem suor e sem trabalho nenhuma obra é terminada” <br>(Schrevelius, 1176)</p>
                <div class="clearfix"></div>
                <br>
            </div>
        </div>
    </div>
    <div class="parallax" data-divisor="2" id="projects">
        <div class="container">
            <div class="content">
                <h2>Projetos</h2>

                <a href="robocup">
                    <div class="portfolio bwWrapper">

                          <h2>wall-E - RoboCup 2014</h2>
                        <img src="images/gallery/robocup/robocup19.jpg" />
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="parallax" data-divisor="3" id="team">
        <div class="container">
            <div class="content">
                <h2>Equipe</h2>

                <?
                /**
                 * Gera HTML do boxSocial com os valores informados
                 *
                 * @param $email Email de contato
                 * @param string $fb facebook
                 * @param string $li linkedin
                 * @param string $gp google plus
                 * @param string $w website
                 * @param string $gh gitbhug
                 */
                function do_social($email, $fb = '', $li = '', $gp = '', $w = '', $gh = '')
                {
                    echo "<div class=\"boxContent boxSocial\">";
                    echo "<a href=\"mailto:$email\" onclick=\"window.open('https://mail.google.com/mail/?view=cm&amp;tf=1&amp;to=$email&amp;cc=&amp;bcc=&amp;su=&amp;body=','_blank');return false;\">$email</a>";
                    echo "<ul class=\"socialNetwork mt15\">";
                    if (!empty($fb)) {
                        echo "<li><a href=\"https://www.facebook.com/$fb\" class=\"tips\" title=\"Facebook\" data-original-title=\"Facebook\" target=\"_blank\"><i class=\"social-icon icon-facebook\"></i></a></li>";
                    }
                    if (!empty($li)) {
                        echo  "<li><a href=\"https://www.linkedin.com/$li\" class=\"tips\" title=\"LinkedIn\" data-original-title=\"Linked In\" target=\"_blank\"><i class=\"social-icon icon-linkedin\"></i></a></li>";
                    }
                    if (!empty($gp)) {
                        echo "<li><a href=\"https://plus.google.com/$gp/about\" class=\"tips\" title=\"Google Plus\" data-original-title=\"Google Plus\" target=\"_blank\"><i class=\"social-icon icon-gplus\"></i></a></li>";
                    }
                    if (!empty($w)) {
                        echo "<li><a href=\"http://$w\" class=\"tips\" title=\"Google Plus\" data-original-title=\"Site\" target=\"_blank\"><i class=\"social-icon icon-blog\"></i></a></li>";
                    }
                    if (!empty($gh)) {
                        echo "<li><a href=\"https://github.com/$gh\" class=\"tips\" title=\"GitHub\" data-original-title=\"GitHub\" target=\"_blank\"><i class=\"social-icon icon-gh\"></i></a></li>";
                    }
                    echo "</ul></div>";
                 }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/team/lucas.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4" >
                                <h3>Lucas Gomide</h3>
                            </div>
                            <?php do_social('lucas@axiomteam.works','lucaasgomide','in/lucasgomide','+LucasGomide', '', 'lucasgomide'); ?>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/team/gabriel.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Gabriel Ribeiro</h3>
                            </div>
                            <?php do_social('gabriel@axiomteam.works','galutori','in/gabriellucastr','+GabrielLucasTR','','gabrieltr'); ?>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/team/marco.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Marco Aurélio</h3>
                            </div>
                            <?php do_social('marco@axiomteam.works','MarcoAurelioMAnjos','in/marcoaure','+MarcoAurélioMoreiradosAnjos','','marcoaure'); ?>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/team/fernando.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Fernando Seguim</h3>
                            </div>
                            <?php do_social('fernando@axiomteam.works','nandoseguim','pub/fernando-seguim/90/537/161','113028298144200890692','','nandoseguim'); ?>
                        </article>
                    </div>

                </div><br>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.html') ?>
</body>
</html>
