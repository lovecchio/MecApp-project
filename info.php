<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>    
        <script src="JS/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="JS/slider.js" type="text/javascript"></script>

    </head>
    
    <body>
        <?php 
        include 'header.php';
        ?>
        <div class="main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="1.jpg" alt="Los Angeles">
                        <div class="carousel-caption">
                            <h1>Propósito a los clientes</h1>
                            <p>El proyecto consiste...</p>
                            <div class="buttons">

                                <button>Explicación de nuestra web</button>
                                <button>Información</button>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <img src="2.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="3.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="container info">
                <div class="leftinfo">
                    <h3>Que es mecApp?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at justo nec nulla auctor dapibus. Nunc tristique sem quis leo venenatis tincidunt. Suspendisse et sodales lorem, quis tincidunt lorem. Cras id vehicula nunc, id accumsan enim. Fusce tincidunt posuere ultrices. Integer hendrerit lorem et libero ornare tempor. Curabitur accumsan neque leo, in fringilla arcu viverra in. Suspendisse potenti. Maecenas ultrices eros sagittis libero fringilla, at eleifend arcu imperdiet. Sed fringilla elit est, blandit imperdiet tellus viverra sit amet. Ut lobortis at neque nec viverra. Morbi a diam at nisi finibus varius quis sit amet ipsum. Donec commodo scelerisque mi vel sollicitudin. Maecenas sed hendrerit dui, vel pharetra nisl. Nunc nec augue neque. Vivamus in ex quam.

                        Proin tempor nunc quam, quis suscipit elit maximus nec. Curabitur venenatis turpis elit, vel porta orci ornare vel. Quisque vitae felis ullamcorper, pretium nulla in, convallis arcu. Suspendisse tempor viverra ipsum. Vestibulum vel pretium turpis. Vestibulum rutrum sem ac volutpat accumsan. Phasellus eget mollis arcu. Nunc porttitor fermentum orci, vel sollicitudin diam ullamcorper vel. Fusce non egestas arcu. Nullam sagittis neque nec orci aliquam blandit. Nunc at risus eget ligula facilisis eleifend. Etiam posuere tristique porttitor. Vivamus ullamcorper nisi diam, eu ultrices tortor bibendum a. Nam lobortis lacus efficitur, hendrerit risus nec, ultrices odio. Vestibulum congue lacus nisl. Etiam a efficitur velit.

                        Praesent blandit elit at libero faucibus dapibus. Sed laoreet hendrerit bibendum. Cras vulputate massa leo, a vestibulum tellus placerat semper. Suspendisse potenti. Mauris turpis ante, blandit aliquam lacus vel, faucibus rutrum mauris. Nullam quis nisi eget nisi blandit finibus id a dolor. Vivamus a pellentesque nulla, in ultrices lectus. In consectetur, magna eget malesuada viverra, elit purus sodales sem, nec suscipit orci augue vel lorem.

                        Etiam facilisis orci lorem.</p></div>
                <div class="rightinfo">
                    <img src="iphone.png">
                </div>
            </div>


        </div>

    </body>
</html>
