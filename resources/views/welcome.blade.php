<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE HUB</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1480px)" href="{{ asset('/css/laptop.css') }}">
    <link rel="stylesheet" media="screen and (max-width:500px)" href="{{ asset('/css/mobile.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/eb33044df0.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- navigation Bar -->
    <div id="navbar">
        <div class="container">
          <h1 class="logo" href="#">MOVIE<span class="primary-color">HUB</span></h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <div class="nav-button-group">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </div>

    <!-- Showcase -->
    <section id="show-case">
        <div class="container">
            <div class="show-case-content">
                <h1 class="title">MOVIE<span class="primary-color">HUB</span></h1>
                <p class="description">Watch your favorite movies online</p>
                <form class="search-group" action="./php/search.php" method="post">
                    <input type="text" id="search" name="search" placeholder="SEARCH" required>
                    <button type="submit" value=""><i class="fa-solid fa-magnifying-glass fa-2x" ></i></button>
                </form>
                <p class="description-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error soluta praesentium placeat itaque, porro possimus tempora nihil optio. Libero eos fugiat iusto! Vero quo, accusantium sunt cum totam illum at repudiandae delectus assumenda harum placeat et! Natus, debitis iure. Error.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-3x"></i></a></i>
                    <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-3x"></i></a></i>
                    <a href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-3x"></i></a></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Category / movies -->
    <section id="category">
        <div class="container">
            <h2>MO<span>VIE</span></h2>
            <hr>
            <div class="category-wrapper">
            </div>
            <a href="#">View More</a>
        </div>
    </section>

    <!-- about section-->
    <section id="section-about">
        <div class="container">
            <h1>AB<span>OUT</span></h1>
            <hr>
            <div class="about-container">
                <div class="container-img">
                    <img src="./img/logo.PNG" alt="">
                </div>
                <div class="about-description">
                    <h3>MOVIE<span>HUB</span> </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet similique, commodi veniam pariatur, non temporibus consequatur a distinctio culpa, quas beatae molestias quae? Optio, consequatur repudiandae porro in qui quam sint, ullam labore incidunt, 
                    ut harum obcaecati iure ab illum? Harum quia blanditiis deleniti dolores consectetur sit temporibus, autem illum labore. Facilis atque, rerum adipisci assumenda doloremque possimus recusandae reiciendis consectetur sint illum quae obcaecati iure, alias repudiandae cumque ex molestias laudantium modi beatae. Qui
                    blanditiis est nihil ducimus! Eius exercitationem dolorum blanditiis aperiam, dignissimos placeat asperiores non ipsum maxime accusantium eveniet facilis voluptates mollitia consequatur reprehenderit nesciunt natus fugiat, laborum iure dolores est! Excepturi beatae commodi, quod voluptatum repellat unde nemo! Quod voluptate perspiciatis eos magni autem quam? Eius adipisci impedit ea mollitia minus, perferendis dignissimos architecto! Nam voluptate quas accus</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section contaact -->
    <section id="section-contact">
        <div class="container">
            <h1>CONT<span>ACT</span></h1>
            <div class="container-contact">
                <h3>CONNECT <span>WITH US</span></h3>
                <hr>
                <form action="#">
                    <div class="form-group-1">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject">
                    </div> 
                    <div class="form-group">
                        <textarea name="message" id="" cols="50" rows="10" placeholder="Your Message"></textarea>
                    </div>
                    <input type="submit">
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="main-footer">
        <div class="container">
            <div class="container-footer">
                <div class="footer-logo">
                    <img src="./img/logo.PNG" alt="">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-1x"></i></a></i>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-1x"></i></a></i>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-1x"></i></a></i>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-github fa-1x"></i></a></i>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-youtube fa-1x"></i></a></i>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li><br>
                        <li><a href="#">Contact</a></li><br>
                        <li><a href="#">About</a></li><br>
                    </ul>
                </div>
                <div class="footer-genre">
                    <h4>Movie/Genre</h4>
                    <div class="container-genre">
                        <ul>
                            <li><a href="#">Action</a></li><br>
                            <li><a href="#">Drama</a></li><br>
                            <li><a href="#">Comedy</a></li><br>
                            <li><a href="#">Science Fiction</a></li><br>
                            <li><a href="#">Horror</a></li><br>
                            <li><a href="#">Romance</a></li><br>
                        </ul>
                        <ul>
                            <li><a href="#">Crime</a></li><br>
                            <li><a href="#">Epic</a></li><br>
                            <li><a href="#">Fantasy</a></li><br>
                            <li><a href="#">War</a></li><br>
                            <li><a href="#">Music</a></li><br>
                            <li><a href="#">Documentary</a></li><br>
                        </ul>
                    </div>      
                </div>
            </div>
            <div class="copyright-section">
                <p>&copy Copyright. All right reserved(2022)</p>
            </div>
        </div>
    </footer>
</body>
</html>
