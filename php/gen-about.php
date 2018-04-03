<?php
include('template.php');
$options = [
    'top_path' => '../',
];
$options['BodyHead'] = <<<EOF
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="style.css">
EOF;
$options['BodyMain'] = <<<EOF
    <audio id="tweet_sound">
        <source src="assets/audio/tweet.mp3" />
        <source src="assets/audio/tweet.ogg" />
    </audio>
    <div id="content_wrap">
        <header>
            <h1><a href="#">Mr. Leptune</a></h1>
            <nav id="main_nav">
                <a href="work/index.html" id="work" class="badge_link icon-twitter">
                    <span class="ribbon">
                        <span class="ribbon-stitches-top"></span>
                    <strong class="ribbon-content">
                            <span class="link_title">捐赠</span>
                        </strong>
                    <span class="ribbon-stitches-bottom"></span>
                    </span>
                </a>

                <a href="about/index.html" id="about" class="badge_link icon-glasses">
                    <span class="ribbon">
                        <span class="ribbon-stitches-top"></span>
                    <strong class="ribbon-content">
                            <span class="link_title">关于我</span>
                        </strong>
                    <span class="ribbon-stitches-bottom"></span>
                    </span>
                </a>

                <a href="contact/index.html" id="contact" class="badge_link icon-comment">
                    <span class="ribbon">
                        <span class="ribbon-stitches-top"></span>
                    <strong class="ribbon-content">
                            <span class="link_title">一起聊聊~</span>
                        </strong>
                    <span class="ribbon-stitches-bottom"></span>
                    </span>
                </a>

            </nav>
        </header>

        <div class="ball">
            <div class="dribble-bubble">
                <h2>该网站开源了！希望能获得您的star！</h2>
                <a href="https://coding.net/u/bible7/p/bible7/git" class="keep_in_window icon-link-ext-alt">直接打开</a>
                <a href="https://coding.net/u/bible7/p/bible7/git" class="icon-popup">新窗口打开</a>
                <span></span>
            </div>
            <a href="https://coding.net/u/bible7/p/bible7/git" class="basketball">
                Check out my shots Dribbble
                <span class="shading"></span>
                <span class="ball"></span>
            </a>
        </div>

        <div class="ball-shadow"></div>

        <a href="#" class="twitter_link">Follow me on Twitter</a>

        <div class="joe">
            <div class="eyes"></div>
            <div class="steam"></div>
        </div>

        <div class="bird">
            <div class="last_tweet_wrap">
                <span class="close icon-cancel-circled"></span>
                <a class="twitter-timeline" href="https://twitter.com/MrJoePayton" data-widget-id="348926476856479744" data-tweet-limit="1" data-chrome="noheader nofooter">Tweets by @MrJoePayton</a>

            </div>
            <span class="sprite"></span>
        </div>

        <div class="content">

            <section id="intro">

                <p>
                    <span title='好好学习，天天向“上”~~~'>GOOD GOOD STUDY, DAY DAY UP~~</span>
                    <button id="menu_return" class="icon-menu"><span>Menu</span>
                    </button>
                </p>

            </section>
            <div id="section_portal"></div>
        </div>
    </div>
    <!-- end content wrap -->
    <div id="content_expand"></div>
    <footer>
        <div>&copy; Leptune 2018</div>
    </footer>
EOF;
$options['BodyFoot'] = <<<EOF
    <script src='assets/js/libs/modernizr-2.6.2.min.js' type='text/javascript'></script>
    <script type='text/javascript' src="assets/js/plugins.min.js"></script>
    <script type='text/javascript' src="assets/js/scripts.min.js"></script>
EOF;
file_put_contents('../about/index.html', gen_html($options));
echo "success\n";
die;
