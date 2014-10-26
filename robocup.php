<!DOCTYPE html>
<html lang="en" class="wall_e_robocup">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Axiom - Robo Wall-E</title>
  <?php include('assets.html') ?>
  <script type="text/javascript" src="js/jquery.resizecrop-1.0.3.min.js"></script>
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
  <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
</head>
<body style="background-position:bottom">
<?php
define("PROJETO", "Robocup - FIAP");
?>
<?php include('nav.php') ?>
<div class="container-fluid">
    <div style="width:300px;height:283px;" id="walle-end" data-start="bottom:-40%;" data-1500="bottom:20%;">
        &nbsp;
    </div>
    <div id="walle-fly" data-start="left:0%;top:10%;transform:rotate(0deg);" data-400="top:30%;transform:rotate(-360deg);" data-700="top:10%"  data-1000="left:-100%">
        &nbsp;
    </div>

    <div id="breadcrumbs">
        <div class="container">
          <?php echo "Você esta em  " . PROJETO ; ?>
        </div>
    </div>
    <div class="parallax" data-divisor="1">
        <div class="container">
            <div class="content"  id="scope"  data-250="top:5%;" data-600="top:-100%;">
              <h2>Scope project</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
            </div>
        </div>
    </div>

    <div class="parallax" data-divisor="2" id="objective">
        <div class="container">
            <div class="content" data-start="display:none;" data-150="display:block;top:100%;" data-400="top:5%;" data-900="top:5%" data-1100="" data-1200="top:-10%;" data-1250="top:-30%;" data-1400="top:-100%;">
              <h2>Objective</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                <p>
                    <ul>
                        <li> Objective 1</li>
                        <li> Objective 2</li>
                        <li> Objective 3</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>

    <div class="parallax" data-divisor="3" id="gallery">

        <div class="container">
            <div class="content" style="height:350px" data-100="display:block;top:110%;" data-1800="top:5%;">
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
                    <div style="clear:both"></div>

                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function($) {
        //resize img gallery
        $('#gallery img').resizecrop({
          width:300,
          height:150,
          vertical:"top"
        });  
        
        //gallery
        $("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_default'});
    });
</script>
<?php include('footer.html') ?>
</body>
</html>                                   
