<?php

function gen_head($path = '', $extraHead = '', $before = true, $extraBody = '') {
    if ($before) {
        $extraHead .= "<link rel='stylesheet' href='{$path}css/my.css'>";
    } else {
        $extraHead = "<link rel='stylesheet' href='{$path}css/my.css'>" . $extraHead;
    }
	$head = <<<EOF
<!doctype html>
<html lang="zh-cmn-Hans">
<head>
    <title>圣经阅读</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="圣经在线阅读,新约,旧约,手机版圣经,圣经朗读">
    <meta name="description" content="手机版圣经提供中文圣经在线阅读、圣经朗读等功能">
    
    <link rel="stylesheet" href="{$path}css/pure-min.css">

        <!--[if lte IE 8]>
            <link rel="stylesheet" href="{$path}css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="{$path}css/layouts/side-menu.css">
        <!--<![endif]-->

    {$extraHead}
</head>
<body>
{$extraBody}
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>
    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">设置</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href='javascript:void(0);' class="pure-menu-link">
                    <label for="switch-auto" style="cursor: pointer;">自动播放</label>
                    <label class="switch">
                      <input type="checkbox" id="switch-auto">
                      <span class="slider round"></span>
                    </label>
                </a></li>
                <li class="pure-menu-item"><a href='/other/about.html' class="pure-menu-link">关于</a></li>
                <li class="pure-menu-item"><a href='javascript:void(0);' class="pure-menu-link">联系</a></li>
                <li class="pure-menu-item"><a href='javascript:void(0);' class="pure-menu-link">捐赠</a></li>
            </ul>
        </div>
    </div>
    <div id="main">
EOF;
	return $head;
}

function gen_foot($path = '', $extraFoot = '') {
    $foot = <<<EOF
    </div>
</div>

<script src="{$path}js/ui.js"></script>
<script src="{$path}js/jquery.min.js"></script>
<script src="{$path}js/js.cookie-2.2.0.min.js"></script>
{$extraFoot}
<script src="{$path}js/my.js"></script>
</body>
</html>
EOF;
    return $foot;
}
