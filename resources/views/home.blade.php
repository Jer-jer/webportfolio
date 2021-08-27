<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/header/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/header/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/header/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/header/site.webmanifest') }}">

    <title>Allan Jericho</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/093c70902d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/gallery.js') }}" defer></script>
</head>

<body>
    <!-- HOME -->
    <section class="home">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center hometext">
            <div class="welcometext">
                <div class="i" data-aos="fade-right" data-aos-offset="600" data-aos-easing="ease-in-sine">I</div>
                <div class="homeblocktext d-flex flex-column">
                    <div class="firstblocktext">am Allan Jericho</div>
                    <div class="secondblocktext">an aspiring <b>web developer</b></div>
                    <div class="thirdblocktext">and welcome to my <div class="website">WEBSITE</div>
                    </div>
                </div>
            </div>
            <div class="arrowDown">
                <a href="#" class="btn hvr-icon-hang arrowdown">
                    <i class="fa fa-chevron-down hvr-icon"></i>
                </a>
            </div>
        </div>

    </section>

    <!-- Navbar -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item padl">
                            <a class="nav-link hvr-underline-from-center active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="#footer">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ABOUT -->
    <section id="about" class="about">
        <div class="innerAbout">
            <div class="aboutHeader">
                <div class="borderlineSet">
                    <div class="topLeft">
                        <div class="bottomRight">
                            <h1 class="aboutt">About</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="aboutContent">
            <div class="left">
                <div class="profilepic">
                    <img src="{{ asset('img/profpic.jpg') }}" alt="Profile Picture" class="profpic" width="250" height="250">
                </div>
                <div class="shortSummary">
                    <h4 class="anotherIntro"> Hi! I’m <div class="highlight">Allan Jericho</div><br /> Please take a look around </h4>
                    <h5 class="shortSumm">
                        I am an aspiring web developer, I love, and is very
                        passionate with, making web applications. I am practicing
                        in specializing in making dynamic UI that is <div class="highlight">responsive</div> and
                        <div class="highlight">easy to navigate</div> with <div class="highlight">tight</div>
                        and <div class="highlight">complex</div> back-end yet
                        <div class="highlight">easy to understand</div>
                    </h5>
                </div>
            </div>
            <div class="right">
                <div class="efficient">
                    <div class="efficientimg">
                        <img src="{{ asset('img/icons/efficient.png') }}" alt="Efficient" width="170" height="150">
                    </div>
                    <h4 class="efficientText">Efficient</h4>
                </div>
                <div class="responsive">
                    <div class="responsiveimg">
                        <img src="{{ asset('img/icons/responsive.png') }}" alt="Responsive" width="170" height="150">
                    </div>
                    <h4 class="responsiveText">Responsive</h4>
                </div>
                <br />
                <div class="dynamic">
                    <div class="dynamicimg">
                        <img src="{{ asset('img/icons/dynamic.png') }}" alt="Dynamic" width="170" height="150">
                    </div>
                    <h4 class="dynamicText">Dynamic</h4>
                </div>
                <div class="easy">
                    <div class="easyimg">
                        <img src="{{ asset('img/icons/easy.png') }}" alt="Easy" width="170" height="150">
                    </div>
                    <h4 class="easyText">Easy</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO -->
    <section id="portfolio" class="portfolio">
        <div class="portfolioHeader">
            <div class="borderlineSetPort">
                <div class="topLeftPort">
                    <div class="bottomRightPort">
                        <h1 class="portfolioText">Portfolio</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="portfolioContent">
            @include('gallery')
        </div>
    </section>

    <!-- FOOTER -->
    <section id="footer" class="footer">
        <div class="footerHeader">
            <div class="borderlineSetFooter">
                <div class="topLeftFooter">
                    <div class="bottomRightFooter">
                        <h1 class="footerText">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </section>

    <div style="clear:both;"></div>

    <script>
        AOS.init();
    </script>

    <script>
        $(function() {
            $(".nav-item > a").click(function() { // when clicking any of these links
                $(".nav-item > a").removeClass("active");
                $(this).addClass("active"); // add highlight to clicked link
            })
        });
    </script>
</body>

</html>