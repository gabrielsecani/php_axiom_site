<!DOCTYPE html>
<html lang="en" class="wall_e_robocup">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Axiom - Robo Wall-E</title>
  <?php include('assets.html') ?>
  <script type="text/javascript" src="js/bootstrap-gallery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-gallery.min.css">
</head>
<body>
<?php
define("PROJETO", "Robocup - FIAP");
?>
<?php include('nav.php') ?>
<div class="container-fluid">
    <!--
    <div class="container">
        <div class="btn-group-vertical">
            <button data-divisor="1" class="btn btn-default go-section"><i class="fa fa-briefcase"></i></button>
            <button data-divisor="2" class="btn btn-default go-section"><i class="fa fa-location-arrow"></i></i></button>
            <button data-divisor="3" class="btn btn-default go-section"><i class="fa fa-area-chart"></i></button>
        </div>
    </div>
    -->
    <div class="parallax div1" data-divisor="1" id="scope">
        <div class="container">
            <div class="content">
              <h2>Scope project</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non ullamcorper risus, sit amet tempor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
            </div>
        </div>
    </div>

    <div class="parallax div2" data-divisor="2" id="objective">
        <div class="container">
            <div class="content">
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

    <div class="parallax div3" data-divisor="3" id="gallery">
        <div class="container">
            <div class="content">
                <h2>Galery (:</h2>
                <div class="gallery row">
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg">
                        <img src="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg" alt="thumb1">
                    </a>
                </div>
                <div class="gallery row">
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg">
                        <img src="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg" alt="thumb1">
                    </a>
                </div>
                <div class="gallery row">
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165070.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg">
                        <img src="http://9pixs.com/wp-content/uploads/2014/06/images_1404165073.jpg" alt="thumb1">
                    </a>
                    <a class="col-xs-6 col-sm-4" href="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg">
                        <img src="http://www.thinksnaps.com/wp-content/uploads/2014/09/storymaker-best-hubble-space-telescope-images-20092-514x2681.jpg" alt="thumb1">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.gallery').bootstrapGallery({
      iconset: "fontawesome"
    });
  });
</script>

<?php include('footer.html') ?>
</body>
</html>                                   
