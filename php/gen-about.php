<?php
include('template.php');
$extraBody = <<<EOF
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
EOF;
$extraFoot = <<<EOF
<script src='assets/js/libs/modernizr-2.6.2.min.js' type='text/javascript'></script>
<script type='text/javascript' src="assets/js/plugins.min.js"></script>
<script type='text/javascript' src="assets/js/scripts.min.js"></script>
EOF;
$head = gen_head('../', '<link rel="stylesheet" type="text/css" href="style.css">', false, $extraBody);
$foot = gen_foot('../', $extraFoot);
$content = <<<EOF
{$head}
<audio id="tweet_sound">
    <source src="assets/audio/tweet.mp3" />
    <source src="assets/audio/tweet.ogg" />
</audio>
<div id="content_wrap">
    <header>
        <h1><a href="index.html">Mr. Joe Payton</a></h1>
        <nav id="main_nav">
            <a href="work/index.html" id="work" class="badge_link icon-pencil">
                <span class="ribbon">
					<span class="ribbon-stitches-top"></span>
                <strong class="ribbon-content">
						<span class="link_title">My Work</span>
					</strong>
                <span class="ribbon-stitches-bottom"></span>
                </span>
            </a>

            <a href="about/index.html" id="about" class="badge_link icon-glasses">
                <span class="ribbon">
					<span class="ribbon-stitches-top"></span>
                <strong class="ribbon-content">
						<span class="link_title">About Me</span>
					</strong>
                <span class="ribbon-stitches-bottom"></span>
                </span>
            </a>

            <a href="contact/index.html" id="contact" class="badge_link icon-comment">
                <span class="ribbon">
					<span class="ribbon-stitches-top"></span>
                <strong class="ribbon-content">
						<span class="link_title">Let&rsquo;s Talk</span>
					</strong>
                <span class="ribbon-stitches-bottom"></span>
                </span>
            </a>

        </nav>
    </header>

    <div class="ball">
        <div class="dribble-bubble">
            <h2>Check Out My Dribbbles</h2>
            <a href="http://dribbble.com/mrjoepayton" class="keep_in_window icon-link-ext-alt">open in same window</a>
            <a href="http://dribbble.com/mrjoepayton" class="icon-popup">open in new window</a>
            <span></span>
        </div>
        <a href="http://dribbble.com/mrjoepayton" class="basketball">
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
                <span>Helping create a beautiful, elegant &amp; practical web.</span>
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
{$foot}
EOF;
file_put_contents('../other/about.html', $content);
echo "success\n";
die;
