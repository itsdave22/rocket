<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rocket ist ein Netzwerk für Streamer , Musiker , Influencer , Content Creator. Entstanden aus einer kleinen Idee und seitdem stetig weiterentwickelt. 
        Jeden Tag gehen auf Twitch, YouTube und Co tausende Gamer Live und spielen die unterschiedlichsten Games 
        oder zeigen ihre kreative Ader. Wir wollen die kreativen Leute zusammen bringen und in einem Netzwerk bündeln" />
     <meta name="keywords" content="	netzwerk, twitch, twitch netzwerk, partnerschaft, twitch partnerschaft, clean, esports, game, game portal, Game website, gamer, games, gaming, magazine, match, modern, online game, sport, sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rocket | Forum</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/pages/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/pages/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<!-- Header Section Begin -->
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./welcome.php">
                            <img src="/pages/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./welcome.php">Homepage</a></li>
                                <li><a>Kategories<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./twitch.php">Twitch</a></li>
                                        <li><a href="./twitch.php">Youtube</a></li>
                                        <li><a href="./twitch.php">Music</a></li>
                                       <!--<li><a href="./blog-details.php">Blog Details</a></li>
                                        <li><a href="./signup.php">Sign Up</a></li>
                                        <li><a href="./login.php">Login</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="./blog.php">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="home.php"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="/pages/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Our Blog</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="/pages/img/blog/blog-1.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-4.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-5.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="/pages/img/blog/blog-7.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Housekishou Richard shi no Nazo Kantei Season 08 - 20</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-10.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-11.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-2.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-3.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="/pages/img/blog/blog-6.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-8.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="/pages/img/blog/blog-9.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="/pages/img/blog/blog-12.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./welcome.php"><img src="/pages/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./welcome.php">Homepage</a></li>
                            <li><a href="./twitch.php">Categories</a></li>
                            <li><a href="./blog.php">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://rocket-gaming.de" target="_blank">Rocket</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="/pages/js/jquery-3.3.1.min.js"></script>
    <script src="/pages/js/bootstrap.min.js"></script>
    <script src="/pages/js/player.js"></script>
    <script src="/pages/js/jquery.nice-select.min.js"></script>
    <script src="/pages/js/mixitup.min.js"></script>
    <script src="/pages/js/jquery.slicknav.js"></script>
    <script src="/pages/js/owl.carousel.min.js"></script>
    <script src="/pages/js/main.js"></script>

</body>

</html>