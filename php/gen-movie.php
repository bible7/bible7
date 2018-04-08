<?php
include_once('template_movie.php');
$options = [];
$options['HeadFoot'] = <<<EOF
<style>
    #main {
        background: url(res/bg1.gif) no-repeat fixed;
        background-size: cover;
    }
    #container {
        opacity: 0.8;
    }
</style>
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
                    <div class="col-1-2" data-target="sdzz">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <img class="movie-logo" src="images/sonofgod.jpg">
                                </div>
                                <div class="art-content">
                                    <div class="col-1-3 right">
                                        <div class="wrap-col">
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><a href="javascript:void(0)">上映时间：2014年2月28日</a></li>
                                                    <li><a href="javascript:void(0)">时长：2小时18分</a></li>
                                                    <li><a href="javascript:void(0)">版本：高清中英双语</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2-3 bg-white">
                                        <div class="wrap-col">
                                            <div class="main-post">
                                                <h2 class="title"><a href="avascript:void(0)">上帝之子</a></h2>
                                                <p>《上帝之子》是克里斯托弗·斯宾塞执导， 迪奥戈·莫加多等主演的剧情片。 影片讲述神之子耶稣的生平故事，从他的诞生，传道，受难，到最终的复活，生动地刻画出一个丰满的人物形象。</p>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-1-2" data-target="ysc">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <img class="movie-logo" src="images/ysc.jpg">
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
                    <div class="col-1-2" data-target="yssnj">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <img class="movie-logo" src="images/5.jpg">
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
                    <div class="col-1-2" data-target="ysc">
                        <div class="wrap-col">
                            <article class="bg-red">
                                <div class="art-header">
                                    <img class="movie-logo" src="images/ysc.jpg">
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
            </div>
            <!--<div id="pagination" class="clearfix">
                <ul>
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">next</a></li>
                </ul>
            </div>-->
        </section>
        <footer>
            <div class="copyright">
                <p>Copyright © Mr. Leptune 2018</p>
            </div>
        </footer>
    </div>
EOF;
$options['BodyFoot'] = <<<EOF
<script type="text/javascript" src="js/movie.js"></script>
EOF;
file_put_contents('../movie/index.html', gen_movie($options));
echo "success\n";
die;
