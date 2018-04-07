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
<link href="css/video-js.css" rel="stylesheet">

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
$options['BodyHead'] = <<<EOF
<div id="my-bg" >
    <img src="images/1.jpg" alt="" class="img1">
    <img src="images/2.jpg" alt="" class="img2" style="display: none;">
    <img src="images/3.jpg" alt="" class="img3" style="display: none;">
    <img src="images/4.jpg" alt="" class="img4" style="display: none;">
    <img src="images/5.jpg" alt="" class="img5" style="display: none;">
</div>
EOF;
$options['BodyMain'] = <<<EOF
<div class="wrap-body">
    <!--////////////////////////////////////Header-->
    <header>
        <div class="wrap-header">
            <div class="zerogrid">
                <div id="logo"><a href="javascript:void(0)"><img src="./images/logo.png"/></a></div>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/ysc.jpg" data-setup="{}">
                                  <source src="https://cdn-youversionapi.global.ssl.fastly.net/videos-youversionapi/west/107/high.webm" type="video/webm">
                                  <source src="https://cdn-youversionapi.global.ssl.fastly.net/videos-youversionapi/west/107/playlist.m3u8" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：1979年</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时07分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清国语中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣传</a></h2>
                                            <p>自1979年发行至今，讲述耶稣基督生平的纪实电影《耶稣传》已经被翻译成1400多种语言。这部电影的译制与观众数量，都保持着历史之最。《标杆人生》的作者华理克牧师说：“《耶稣》电影是历来所发明的最有效的福传工具。”超过450名宗教领袖与学者对剧本做过评估，以确保它切实符合历史与圣经。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://p6lma4dnj.bkt.clouddn.com/godson.mp4" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2014年2月28日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时18分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中英字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">上帝之子</a></h2>
                                            <p>《上帝之子》是克里斯托弗·斯宾塞执导， 迪奥戈·莫加多等主演的剧情片。影片讲述神之子耶稣的生平故事，从他的诞生，传道，受难，到最终的复活，生动地刻画出一个丰满的人物形象。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
                                <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
                                  <source src="http://xyjs1.mov.cnfuyin.com/cdn/08%E7%A6%8F%E9%9F%B3%E5%BD%B1%E8%A7%86/%E8%80%B6%E7%A8%A3%E7%B3%BB%E5%88%97/%E8%80%B6%E7%A8%A3%E5%8F%97%E9%9A%BE%E8%AE%B0/%E5%9F%BA%E7%9D%A3%E5%8F%97%E9%9A%BE%E8%AE%B0%E9%AB%98%E6%B8%85%E7%89%8801.mp4?sign=81761c6752df162fc2b76817527e010e&timestamp=1522732712&device=masterWeb" type="video/mp4">
                                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div class="art-content">
                                <div class="col-1-3 right">
                                    <div class="wrap-col">
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li><a href="javascript:void(0)">上映时间：2004年3月19日</a></li>
                                                <li><a href="javascript:void(0)">时长：2小时06分</a></li>
                                                <li><a href="javascript:void(0)">版本：高清中文字幕</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2-3 bg-white">
                                    <div class="wrap-col">
                                        <div class="main-post">
                                            <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                            <p>《耶稣受难记》是由梅尔·吉布森执导，詹姆斯·卡维泽、莫妮卡·贝鲁奇主演的一部剧情电影。影片于2004年3月19日在中国大陆首映 。这部影片真实的记录了耶稣基督一生中最后的12个小时，那是他在耶路撒冷受难的一天，也是他化身人类所遭受到的最残酷最痛苦的折磨，直到他生命的消逝。</p>
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
$options['BodyFoot'] = <<<EOF
<script src="js/videojs-ie8.min.js"></script>
<script src="js/video.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
<script type="text/javascript" src="js/movie.js"></script>
EOF;
file_put_contents('../movie/index.html', gen_html($options));
echo "success\n";
die;
