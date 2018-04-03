<?php
include('template.php');
$options = [
    'top_path' => '../',
    'keywords' => '圣经在线阅读,圣经在线电影',
    'description' => '圣经提供中文圣经在线阅读、圣经在线电影等功能',
];
$options['HeadFoot'] = <<<EOF
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
EOF;
$options['BodyMain'] = <<<EOF
    <div class="wrap-body">
        <!--////////////////////////////////////Header-->
        <header>
            <div class="wrap-header">
                <div class="zerogrid">
                    <div id="logo"><a href="index.html"><img src="./images/logo.png"/></a></div>
                    <!--<div class="header-search">
                        <center><form method="get" action="/search" id="search">
                          <input name="q" type="text" size="40" placeholder="Type key to search" />
                        </form></center>
                    </div>-->
                </div>
            </div>
        </header>

        <!--////////////////////////////////////Container-->
        <section id="container">
            <div class="wrap-container zerogrid">
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img1.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 right">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">March 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-yellow">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img2.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>   
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-green">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img3.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 right">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img4.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-blue">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img5.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 right">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-green">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img6.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 left">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                </div>              
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img7.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 right">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <article class="bg-blue">
                                <div class="art-header">
                                    <a href="single.html"><img src="images/img8.jpg"/></a>
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 left">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="#"><img src="images/avatar.png"/>Administrator</a></li>
                                                    <li><a href="#">February 1, 2015</a></li>
                                                    <li><a href="#">Technology</a></li>
                                                    <li class="last"><a href="#">Leave a comment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="single.html">Nunc vitae hendrerit leo</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia diam in congue ullamcorper. Phasellus quis iaculis risus, vitae dictum mauris. Donec id laoreet nisi. Proin porta tempor turpis non imperdiet.
                                                Nulla eros risus, aliquet non laoreet nec, accumsan sit amet tellus. Mauris vitae odio elit. Mauris tellus est, fermentum in molestie placerat, ullamcorper at [...]</p>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </article>
                        </div>
                    </div>
                </div>          
            </div>
            <div id="pagination" class="clearfix">
                <ul>
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">next</a></li>
                </ul>
            </div>
        </section>

        <!--////////////////////////////////////Footer-->
        <footer>
            <div class="copyright">
                <p>Copyright © Mr. Leptune 2018</p>
            </div>
        </footer>
    </div>
EOF;
$options['BodyFoot'] = '<script type="text/javascript" src="js/navigation.js"></script>';
file_put_contents('../movie/index.html', gen_html($options));
echo "success\n";
die;
