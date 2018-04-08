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
	                        <video class="my-video video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="images/5.jpg" data-setup="{}">
	                          <source src="http://p6lma4dnj.bkt.clouddn.com/jesusSuffer.mp4" type="video/webm">
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
        </section>
    </div>
EOF;
$options['BodyFoot'] = <<<EOF
	<script src="js/videojs-ie8.min.js"></script>
	<script src="js/video.js"></script>
EOF;
file_put_contents('../movie/yssnj.html', gen_movie($options));
echo "success\n";
die;
