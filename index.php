<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Axiom</title>
  <?php include('assets.html') ?>
</head>
<body>
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
        <li class="active"><a data-divisor="1"  href="#">Home</a></li>
        <li><a data-divisor="2" href="#">Projetos</a></li>
        <li><a data-divisor="3" href="#">Equipe</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="parallax div1" data-divisor="1">
        <div class="container">
            <div class="content">
                <h2>Lorem ipsum dolor sit amet</h2>
                
                <p>
                    Donec eget arcu at est feugiat ultrices et id dolor. Vestibulum luctus sit amet orci a sollicitudin. Etiam scelerisque ligula sit amet nulla pulvinar, vitae luctus massa commodo. Donec nec metus vel nulla dictum tempor. Vestibulum felis risus, convallis in mattis quis, eleifend eget nulla. Vestibulum sit amet tortor a tellus tempus varius. Suspendisse pretium lacus et pulvinar sagittis. Integer non tincidunt nulla, ut tempor tellus. Maecenas adipiscing euismod sodales. Maecenas egestas nisi sit amet sagittis fermentum. Quisque odio nunc, rutrum vel augue vitae, dictum hendrerit ligula. Pellentesque tincidunt eleifend urna convallis consectetur. Sed eu orci diam. Mauris et metus vestibulum, lobortis dolor sed, aliquam dui. Nulla feugiat, urna ut egestas mattis, tortor nibh placerat sapien, at scelerisque justo magna ut odio.
                </p>
            </div>
        </div>
    </div>

    <div class="parallax div3" data-divisor="2" id="projects">
        <div class="container">
            <div class="content">
                <h2>Projects</h2>
                
                <div class="portfolio">
                    <a href="robo.php">
                      <img src="images/thetravelers_thumbnail.jpg" />
                    </a>
                </div>
                <div class="portfolio">
                  <a href="robo.php">
                    <img src="images/thetravelers_thumbnail.jpg" />
                  </a>
                </div>
                <div class="portfolio">
                  <a href="robo.php">
                    <img src="images/thetravelers_thumbnail.jpg" />
                  </a>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax div2" data-divisor="3" id="team">
        <div class="container">
            <div class="content">
                <h2>Team</h2>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/pic1.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4" >
                                <h3>John DOE</h3>
                                <p>Executive Director</p>
                            </div>
                            <div class="boxContent boxSocial">
                                <a href="mailto:your.email@little-neko.com" onclick="window.open('https://mail.google.com/mail/?view=cm&amp;tf=1&amp;to=your.email@little-neko.com&amp;cc=&amp;bcc=&amp;su=&amp;body=','_blank');return false;">j.doe@ashley.com</a>
                                <ul class="socialNetwork mt15">
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/pic1.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Johanna Newsom</h3>
                                <p>Salesman</p>
                            </div>
                            <div class="boxContent boxSocial">
                                <a href="mailto:your.email@little-neko.com" onclick="window.open('https://mail.google.com/mail/?view=cm&amp;tf=1&amp;to=your.email@little-neko.com&amp;cc=&amp;bcc=&amp;su=&amp;body=','_blank');return false;">j.newsom@ashley.com</a>
                                <ul class="socialNetwork mt15">
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/pic1.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Alexander Doe</h3>
                                <p>Graphic designer</p>
                            </div>
                            <div class="boxContent boxSocial">
                                <a href="mailto:your.email@little-neko.com" onclick="window.open('https://mail.google.com/mail/?view=cm&amp;tf=1&amp;to=your.email@little-neko.com&amp;cc=&amp;bcc=&amp;su=&amp;body=','_blank');return false;">a.doe@ashley.com</a>
                                <ul class="socialNetwork mt15">
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article>
                            <div><img src="images/pic1.jpg" alt="" class="img-responsive"></div>
                            <div class="boxContent boxNomeTeam color4">
                                <h3>Pamela Anderson</h3>
                                <p>Programmer</p>
                            </div>
                            <div class="boxContent boxSocial"> <a href="mailto:your.email@little-neko.com" onclick="window.open('https://mail.google.com/mail/?view=cm&amp;tf=1&amp;to=your.email@little-neko.com&amp;cc=&amp;bcc=&amp;su=&amp;body=','_blank');return false;">p.anderson66@ashley.com</a>
                                <ul class="socialNetwork mt15">
                                    <li> <a href="#" class="tips" title="" data-original-title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a> </li>
                                    <li> <a href="#" class="tips" title="" data-original-title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a> </li>
                                    <li> <a href="#" class="tips" title="" data-original-title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a> </li>
                                    <li> <a href="#" class="tips" title="" data-original-title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i> </a> </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-top:70px"> </div>
<?php include('footer.html') ?>
</body>
</html>
