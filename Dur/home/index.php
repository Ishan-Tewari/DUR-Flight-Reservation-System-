<?php  
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dur</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="/Dur/home/index.php">Dur</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="#login">LOGIN</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#travelblog">TRAVEL BLOGS</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/intro-bg.jpg');background-position: bottom;">
        <div class="intro-body" style="height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">come travel with us</h1><a class="btn btn-link btn-circle" role="button" href="#login"><i class="fa fa-angle-double-down animated"></i></a></div>
                </div>
            </div>
        </div>
    </header>

    <div id="login" class="login-dark">
        <form method="post" action="/Dur/home/ConfirmLogin.php">
            <h2 class="sr-only" style="color: rgb(245,238,238);">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="uname" placeholder="Email" required="required"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password" required="required"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" id="login" type="submit" style="color: rgb(244,247,249);" name="login_button">Log In
                </button>

                <a class="btn btn-primary btn-block" id="login" style="color: rgb(244,247,249);" href="/Dur/SignUpPage/SignUp.php">Sign Up</a>
                
            </div>
        </form>
    </div>
    <section id="travelblog" class="content-section text-center" style="height: 100vh;background-color: rgb(37,198,138);padding-bottom: 0px;padding-top: 0px;">
        <section class="card-section-imagia" style="padding-bottom: 0px;padding-top: 0px;height: 100vh;background-color: rgba(241,241,241,0);">
            <h1 style="padding-top: 117px;background-color: rgb(37,198,138);">travel blogs</h1>
            <h2>Posset maiora firmatum nunc cuniculis</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves.</em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix
                                                interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia cover-gradient"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix
                                                interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                    <div class="user-imagia"><img class="img-circle" alt="" src="https://unsplash.it/120/120?image=64"></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">John Doe</h3>
                                        <p class="subtitle-imagia">Subtitle </p>
                                        <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Lorem Ipsum</h3>
                                            <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix
                                                interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="contact" class="content-section text-center" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact us</h2>
                    <p>Feel free to leave us a comment on the<a href="#">&nbsp;Grayscale template overview page</a>&nbsp;to give some feedback about this theme!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"></div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>