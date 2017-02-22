<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="fonts/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="css/carousel.css" rel="stylesheet">
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <!-- Static navbar -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid" >
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a  class="navbar-brand notDisplayOver768" href="#" >VIVIDWA</a>
                        </div>
                        <div class="smallNav displayOver768">
                            <a href="#" >CH</a>
                            <a href="#" ><i>Sign in or Sign up</i></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse" >
                            <ul class="nav navbar-nav navBarWhiteLineLeft" >
                                <li><a href="#" >About Us</a></li>
                                <li><a href="#">Outdoors</a></li>
                                <li><a href="#">Features</a></li>
                            </ul>
                            <img class="brandImg displayOver768" src="images/vividwa.png">
                            <ul class="nav navbar-nav navbar-right navBarWhiteLineRight">
                                <li><a href="#">Experience</a></li>
                                <li><a href="#">Customization</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav notDisplayOver768 navBarWhiteLineLeft" >
                                <li><a href="#" >CH</a></li>
                                <li><a href="#"><i>Sign in or Sign up</i></a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->


                </nav>
            </div>

        </div>


        <img class="textImage" src="images/indexText.png" alt="First slide">



        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container parent">
                        <img class="first-slide titleImage" src="images/indexTitle1.jpg" alt="First slide">
                    </div>
                </div>
                <div class="item ">
                    <div class="container parent">
                        <img class="second-slide titleImage" src="images/indexTitle2.jpg" alt="Second slide">
                    </div>
                </div>
                <div class="item ">
                    <div class="container parent">
                        <img class="third-slide titleImage" src="images/indexTitle1.jpg" alt="Third slide">
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="images/vividwa-24.png" alt="Generic placeholder image" width="140" height="140">
                    <h2 class="orangeColor">Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/vividwa-car.png" alt="Generic placeholder image" width="140" height="140">
                    <h2 class="orangeColor">Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/vividwa-girl.png" alt="Generic placeholder image" width="140" height="140">
                    <h2 class="orangeColor">Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-lg-2">

                </div><!-- /.col-lg-2 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/vividwa-flight.png" alt="Generic placeholder image" width="140" height="140">
                    <h2 class="orangeColor">Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/vividwa-diamond.png" alt="Generic placeholder image" width="140" height="140">
                    <h2 class="orangeColor">Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-2">

                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->
        </div><!-- /.container -->

        <div class="bookingCSS">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="row bookingCSSLeft bookingNowRow">
                            <div class="row">
                                <div class="col-lg-12 marginBottom4px">
                                    <span class="textBookingNow">Booking Now!</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 padding4px marginBottom4px" >
                                    <input type="text" class="form-control borderSquare" id="name" placeholder="NAME">
                                </div>
                                <div class="col-lg-6 padding4px marginBottom4px" >
                                    <input type="tel" class="form-control borderSquare" id="name" placeholder="TELEPHONE">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 padding4px marginBottom4px" >
                                    <input type="text" class="form-control borderSquare" id="name" placeholder="TIME">
                                </div>
                                <div class="col-lg-6 padding4px marginBottom4px" >
                                    <input type="text" class="form-control borderSquare" id="name" placeholder="PROJECT">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 marginBottom4px">
                                    <textarea class="form-control borderSquare" rows="5" id="comment" placeholder="NOTE"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row bookingNowRow">
                            <button type="submit" class="btn btn-block borderSquare marginBottom20px sendUSBgColor" >SEND US</button>
                        </div>
                    </div>

                    <div class="col-lg-6 socialMedia">
                        <div  class="row opacityBlack clear margin0">
                            <div class="padding0 col-lg-6 ">
                                <div class="contactInfo textAlignCenter ">
                                    <p>| ADDRESS</p>
                                    <p class="fontSize16px">    asdadasdadada</p>
                                    <p >| TELEPHONE</p>
                                    <p class="fontSize16px">    asdadasdadada</p>
                                    <p>| SOCIAL MEDIAS</p>
                                    <a>   <i class="fa fa-facebook-official" style="font-size:48px;color: white"></i></a>
                                    <a>   <i class="fa fa-twitter-square" style="font-size:48px;color:white"></i></a>
                                    <a>    <i class="fa fa-linkedin-square" style="font-size:48px;color:white"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="contactInfo textAlignCenter ">
                                    <img src="images/logo.png" width="150" width="150"/>   
                                    <br/>
                                    <br/>
                                    <p>    asdadasdadadaas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="footerCSS">
            <p>&copy; VIVIDWA 2016</p>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="js/bootstrap.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="js/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
