<?php

function gen_html($options = []) {
    $keys = [
        'top_path' => '',
        'keywords' => '圣经在线阅读,新约,旧约,手机版圣经,圣经朗读',
        'description' => '手机版圣经提供中文圣经在线阅读、圣经朗读等功能',
        'HeadFoot' => '',
        'BodyHead' => '',
        'BodyMain' => '',
        'BodyFoot' => '',
    ];
    foreach ($keys as $key => $default) {
        if (!isset($options[$key])) {
            $options[$key] = $default;
        }
    }
	$html = <<<EOF
        <!doctype html>
        <html lang="zh-cmn-Hans">
        <head>
            <title>圣经阅读</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="keywords" content="{$options['keywords']}">
            <meta name="description" content="{$options['description']}">
            <!--[if lte IE 8]>
                <link rel="stylesheet" href="{$options['top_path']}css/layouts/side-menu-old-ie.css">
            <![endif]-->
            <!--[if gt IE 8]><!-->
                <link rel="stylesheet" href="{$options['top_path']}css/layouts/side-menu.css">
            <!--<![endif]-->
            {$options['HeadFoot']}
        </head>
        <body>
        {$options['BodyHead']}
        <div id="layout">
            <!-- Menu toggle -->
            <a href="#menu" id="menuLink" class="menu-link">
                <!-- Hamburger icon -->
                <span></span>
            </a>
            <div id="menu">
                <div class="pure-menu">
                    <a class="pure-menu-heading" href="#">菜单</a>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item"><a href='#' class="pure-menu-link">
                            <label for="switch-auto" style="cursor: pointer;">自动播放</label>
                            <label class="switch">
                              <input type="checkbox" id="switch-auto">
                              <span class="slider round"></span>
                            </label>
                        </a></li>
                        <li class="pure-menu-item"><a href='/' class="pure-menu-link" style='color: #e621f3; font-weight: bold;'>主页</a></li>
                        <li class="pure-menu-item"><a href='/about' class="pure-menu-link">关于我</a></li>
                        <li class="pure-menu-item"><a href='/movie' class="pure-menu-link">圣经电影</a></li>
                        <li class="pure-menu-item"><a href='/music' class="pure-menu-link">自然轻音乐</a></li>
                        <li class="pure-menu-item"><a href='/image' class="pure-menu-link">天国壁纸</a></li>
                    </ul>
                </div>
            </div>
            <div id="main">
                {$options['BodyMain']}
            </div>
        </div>
        <script src="{$options['top_path']}js/jquery.min.js"></script>
        <script src="{$options['top_path']}js/js.cookie-2.2.0.min.js"></script>
        <script src="{$options['top_path']}js/ui.js"></script>
        {$options['BodyFoot']}
        </body>
        </html>
EOF;
	return $html;
}
