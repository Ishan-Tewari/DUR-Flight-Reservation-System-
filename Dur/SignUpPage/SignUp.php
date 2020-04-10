<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900,900i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section style="width: 100%;height: 10vh;margin-top: 0px;">
        <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav-2" style="background-color: #120101;">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="/Dur/home/index.php" style="color: rgba(245,241,241,0.9);font-size: 25px;"><strong>Dur</strong></a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive-2"
                    type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive-2">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact" style="color: rgba(251,251,251,0.7);font-size: 18px;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section style="height: 100vh;width: 100%;margin-top: 13px;">
        <div class="col-lg-6 col-xl-7 offset-xl-3" data-aos="fade-down" data-aos-delay="500" style="width: 50%;height: 100vh;">
            <h1 id="tittle-c" style="padding-top: 20px;padding-bottom: 20px;padding-left: 250px;"><strong>Sign Up</strong></h1>
            <form id="tex-fo" method="post" action="ConfirmSignUp.php">
                <div class="form-group">
                    <input class="form-control" type="text" id="fname" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="First Name" name="firstName">

                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="text" id="fname" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="Last Name" name="lastName">
                </div>

                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="text" id="fname" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="Email" name="uname">
                </div>

                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="password" id="fname" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="Password" name="pass">
                </div>

                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="password" id="fname" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="Confirm Password" name="confirmPass">
                </div>

                    
                </div>
                
                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="tel" id="cNum" style="font-family: Barlow, sans-serif;width: 100%;" placeholder="Contact No" name="contactNumber">
                </div>
                <div class="form-group" id="tex-fo">
                    <input class="form-control" type="number" id="age" placeholder="Enter your age" style="font-family: Barlow, sans-serif;margin-top: 36px;width: 100%;" name="age">
                    <input class="form-control" type="text" id="street" style="font-family: Barlow, sans-serif;margin-top: 36px;width: 100%;"
                        placeholder="Address: Street" name="street">
                    <input class="form-control" type="text" id="state" style="font-family: Barlow, sans-serif;margin-top: 36px;width: 100%;" placeholder="Address: State" name="state">
                    <input class="form-control" type="text" id="country"
                        style="font-family: Barlow, sans-serif;margin-top: 36px;width: 100%;" placeholder="Address: Country" name="country">
                </div>
                <div id="button-c-c">
                    <input class="btn btn-primary float-right" id="button-c" type="submit" name="submit" value="SIGN UP">
                    
                </div>
            </form>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/signup.js"></script>
</body>

</html>