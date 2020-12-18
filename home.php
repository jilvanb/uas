<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,0">
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/lightslider.css">
        <!--js-link-->
        <script src="js/JQuery3.3.1.js"></script>
        <script src="js/lightslider.js"></script>
        <!--fav icon-->
        <link rel="shortcut icon" href="./images/fav icon.png">
        <!--menggunakan font awesome-->
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>

        <body>
        <!--navigation-->
            <nav>
        <!--logo-->
                <a href="#" class="logo">
                    <img src="./images/logo.png">
                </a>
        <!--menu-btn-->
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-->
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="series.php">Series</a></li>
                    <li><a href="index.php">List</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
        <!--search-->
                
            </nav>
			
            <section id="main">
        <!--showcase-->
        <!--heading-->
                <h1 class="showcase-heading">Popular</h1>

                <ul id="autoWidth" class="cs-hidden">
          
                  <!--box-1-->
                  <li class="item-a">
                    <!--showcase-box-->
                            <div class="showcase-box">
                                <img src="./images/mulan.jpg">
                            </div>
                             </li>
                  <!--box-2-->
                  <li class="item-b">
                    <!--showcase-box-->
                            <div class="showcase-box">
                                <img src="./images/milea.jpg">
                            </div>
                             </li>    
                   <!--box-3-->
                   <li class="item-c">
                    <!--showcase-box-->
                            <div class="showcase-box">
                                <img src="./images/ipman.jpg">
                            </div>
                             </li>
                     <!--box-4-->
                     <li class="item-d">
                        <!--showcase-box-->
                                <div class="showcase-box">
                                    <img src="./images/nkcthi.jpeg">
                                </div>
                                 </li>
                    <!--box-5-->
                     <li class="item-e">
                         <!--showcase-box-->
                                <div class="showcase-box">
                                    <img src="./images/dua.png">
                                </div>
                                 </li>        
            
                </ul>
            
            </section>
        <!--Latest-movies-->
        <section id="latest">
            <h2 class="latest-heading">Continue Watching</h2>
        <!--slider-->
        <ul id="autoWidth2" class="cs-hidden">
        <!--slider-box-1-->
            <li class="item-a">
                <div class="latest-box">
        <!--img-->
                    <div class="latest-b-img">
                        <img src="./images/thenun.jpg">
                    </div>
        <!--text-->
                    <div class="latest-b-text">
                        <strong>The Nun</strong>
                        <p>Horror</p>
                    </div>

                </div>
            </li>
                <!--slider-box-2-->
                <li class="item-b">
                    <div class="latest-box">
            <!--img-->
                        <div class="latest-b-img">
                            <img src="./images/endgame.jpg">
                        </div>
            <!--text-->
                        <div class="latest-b-text">
                            <strong>Avengers : Endgame</strong>
                            <p>Action, Sci-Fi</p>
                        </div>
                        
                    </div>
                </li>
                    <!--slider-box-3-->
            <li class="item-c">
                <div class="latest-box">
        <!--img-->
                    <div class="latest-b-img">
                        <img src="./images/marvel.jpg">
                    </div>
        <!--text-->
                    <div class="latest-b-text">
                        <strong>Captain Marvel</strong>
                        <p>Action, Sci-Fi</p>
                    </div>
                    
                </div>
            </li>
                <!--slider-box-4-->
                <li class="item-d">
                    <div class="latest-box">
            <!--img-->
                        <div class="latest-b-img">
                            <img src="./images/m-4.jpg">
                        </div>
            <!--text-->
                        <div class="latest-b-text">
                            <strong>IRON MAN 3</strong>
                            <p>Action</p>
                        </div>
                        
                    </div>
                </li>
                    <!--slider-box-5-->
            <li class="item-e">
                <div class="latest-box">
        <!--img-->
                    <div class="latest-b-img">
                        <img src="./images/m-5.jpg">
                    </div>
        <!--text-->
                    <div class="latest-b-text">
                        <strong>VENOM</strong>
                        <p>Action</p>
                    </div>
                    
                </div>
            </li>
                <!--slider-box-6-->
                <li class="item-f">
                    <div class="latest-box">
            <!--img-->
                        <div class="latest-b-img">
                            <img src="./images/far.jpg">
                        </div>
            <!--text-->
                        <div class="latest-b-text">
                            <strong>Spiderman : Far From Home</strong>
                            <p>Action</p>
                        </div>
                        
                    </div>
                </li>
                    <!--slider-box-7-->
            <li class="item-f">
                <div class="latest-box">
        <!--img-->
                    <div class="latest-b-img">
                        <img src="./images/m-7.jpeg">
                    </div>
        <!--text-->
                    <div class="latest-b-text">
                        <strong>JUNGLE CRUISE</strong>
                        <p>Action</p>
                    </div>
                    
                </div>
            </li>
        </ul>
        </section>
        <!--movies-->
        <div class="movies-heading">
            <h2>Movie</h2>
        </div>
        <section id="movies-list">
            <!--box-1-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/m-3.jpg">
                </div>
                <!--text-->
                <a href="#">
                    Inception<br> (Action, Sci-Fi)
                </a>
            </div>
            <!--box-2-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/m-4.jpg">
                </div>
                <!--text-->
                <a href="#">
                    Iron Man 3<br> (Action, Sci-Fi)
                </a>
            </div>
            <!--box-3-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/toy.jpeg">
                </div>
                <!--text-->
                <a href="#">
                    Toy Story 4<br> (Kids)
                </a>
            </div>
            <!--box-4-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/l-5.jpg">
                </div>
                <!--text-->
                <a href="#">
                    Coco<br> (Romance, Action, Kids)
                </a>
            </div>
            <!--box-5-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/l-6.jpg">
                </div>
                <!--text-->
                <a href="#">
                    Star Wars <br> (Action)
                </a>
            </div>
            <!--box-6-->
            <div class="movies-box">
                <!--img-->
                <div class="movies-img">
                    <div class="quality">HDR</div>
                    <img src="./images/warkop.jpg">
                </div>
                <!--text-->
                <a href="#">
                    Warkop DKI : Reborn<br> (Comedy)
                </a>
            </div>
        </section>
        <!--btns-->
        <div class="btns">
            <a href="#">Previous</a>
            <a href="#">Next</a>
        </div>
        <!--footer-->
        <footer>
            <p>Going To Internet, PRODITING, Inc.</p>
            <p>Copyright 2020 - Kolbox</p>
        </footer>





        <!--slider-script-->
        <script>
              $(document).ready(function() {
        $('#autoWidth,#autoWidth2').lightSlider({
            autoWidth:true,
            loop:true,
            
            onSliderLoad: function() {
                $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
            }
        });
            });
        </script>
        </body>
</html>
