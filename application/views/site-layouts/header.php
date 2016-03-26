<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width">

    <!-- Style Css-->
    <?php Attach_assets::attach_css($css); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <?php Attach_assets::attach_js($js); ?>

</head>

<body>
<!-- ================================================================
                            Header Start
================================================================== -->

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><button data-toggle="modal" data-target="#signModal"><i class="fa fa-sign-in"></i>Sign in</button></li>
                    <li><span>or</span></li>
                    <li><button data-toggle="modal" data-target="#myModaluser"><i class="fa fa-user-plus"></i>Sign up</button></li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="logo-menu-part">
        <div class="row">
            <div class="col-md-3 ">
                <div class="logo">
                    <a href="http://bulval.am/pv"><img src="<?=base_url('assets/site/siteimages/images') ?>/official-logo.png"></a>
                </div>
            </div>
            <div class="col-md-9 ">
                <!--                <ul>-->
                <!--                   <li><button data-toggle="modal" data-target="#signModal"><i class="fa fa-sign-in"></i>Sign in</button></li>-->
                <!--                   <li><button data-toggle="modal" data-target="#myModaluser"><i class="fa fa-user-plus"></i>Sign up</button></li>-->
                <!--                </ul>-->
                <div class="right-menu">


                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- links Start-->
                        <div class=".bottom_menu navbar-collapse no-padding collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav links navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="">Overview</a></li>
                                <li><a href="">How It Works</a></li>
                                <li><a href="">Need Help?</a></li>
                                <li><a href="">Questions&Answers </a></li>
                            </ul>
                        </div>
                    </nav>




                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid menu-bar-row">
    <div class="row">
        <div class="container respons-width">
            <div class="main-menu">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-11">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- links Start-->
                    <div class=".bottom_menu navbar-collapse no-padding collapse" id="bs-example-navbar-collapse-11">
                        <ul class="nav links navbar-nav">
                            <li class="active has-dropdown">
                                <a href="javascript:void(0)">Astrology and Horoscope  <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>

                                </ul>
                            </li>
                            <li ><a href=""> Career Advice </a></li>
                            <li class="has-dropdown"><a href="javascript:void(0)">Clairvoyance <i class="fa fa-angle-down"></i></a>

                                <ul>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>

                                </ul>

                            </li>
                            <li><a href="">  Dream Analysis</a></li>
                            <li class="has-dropdown"><a href="javascript:void(0)">Love & Relationships   <i class="fa fa-angle-down"></i></a>

                                <ul>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>

                                </ul>
                            </li>
                            <li><a href=""> Psychic Reading </a></li>
                            <li class="has-dropdown right"><a href="javascript:void(0)">    Tarot Readers <i class="fa fa-angle-down"></i></a>

                                <ul>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>
                                    <li><a href="">Astrology</a></li>
                                    <li><a href="">Horoscope</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="slider">
    <div class="container-fluid">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!--                <ol class="carousel-indicators">-->
                <!--                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
                <!--                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                <!--                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                <!--                </ol>-->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?=base_url('assets/site/siteimages/images') ?>/slider1.png" alt="...">
                        <div class="carousel-caption hidden-xs">
                            <h5>
                                IS THIS A NEW BEGINNINGG</br>
                                FOR ME?
                            </h5>
                            <ul>
                                <li><p><i class="fa fa-check"></i>Choose an Advisor</p></li>
                                <li><p><i class="fa fa-check"></i>Click "Chat" or "Call"</p></li>
                                <li><p><i class="fa fa-check"></i>Click "Chat" or "Call"</p></li>
                                <li><p><i class="fa fa-check"></i>Complete Registration</p></li>
                                <li><p><i class="fa fa-check"></i>Enjoy conversation</p></li>
                            </ul>
                            <button class="slide-button" data-toggle="modal" data-target="#myModaluser">Get Started</button>
                        </div>
                    </div>


                </div>

                <!-- Controls -->
                <!--                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
                <!--                    <!--                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                <!--                    <i class="fa fa-angle-left"></i>-->
                <!--                    <span class="sr-only">Previous</span>-->
                <!--                </a>-->
                <!--                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
                <!--                    <!--                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                <!--                    <i class="fa fa-angle-right"></i>-->
                <!--                    <span class="sr-only">Next</span>-->
                <!--                </a>-->
            </div>
        </div>
    </div>
    <div class="search-input">
        <div class="butt-part">
            <input placeholder="Search..." type = "text" class = "search-place">
            <i class="fa fa-search"></i>
        </div>

    </div>


</div>

<!-- ================================================================
                            Header End
================================================================== -->





