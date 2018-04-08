<?php
include_once('template_movie.php');
$options = [];
$options['HeadFoot'] = <<<EOF
	<link href="css/video-js.css" rel="stylesheet">
	<link rel="stylesheet" href="css/movie-detail.css">
EOF;
$options['BodyMain'] = <<<EOF
    <div class="wrap-body">
        <section id="container">
            <div class="wrap-container zerogrid">
                <div class="row">
                    <article class="bg-red">
                        <div class="art-header">
	                        <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/sonofgod.jpg" data-setup="{}">
	                          <source src="http://p6lma4dnj.bkt.clouddn.com/sonOfGod.mp4" type="video/webm">
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
                                            <li><a href="javascript:void(0)">版本：高清中英双语</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-3 bg-white">
                                <div class="wrap-col">
                                    <div class="main-post">
                                        <h2 class="title"><a href="avascript:void(0)">耶稣受难记</a></h2>
                                        <p>《上帝之子》是克里斯托弗·斯宾塞执导， 迪奥戈·莫加多等主演的剧情片。 影片讲述神之子耶稣的生平故事，从他的诞生，传道，受难，到最终的复活，生动地刻画出一个丰满的人物形象。</p>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
EOF;
$options['BodyFoot'] = <<<EOF
	<script src="js/videojs-ie8.min.js"></script>
	<script src="js/video.js"></script>
EOF;
file_put_contents('../movie/sdzz.html', gen_movie($options));
echo "success\n";
die;
