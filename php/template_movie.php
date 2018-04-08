<?php
include_once('template.php');

function gen_movie($options = []) {
	$keys = [
	    'keywords' => '圣经在线阅读,圣经在线电影',
	    'description' => '圣经提供中文圣经在线阅读、圣经在线电影等功能',
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

	$optionsTmp = [
	    'top_path' => '../',
	    'keywords' => $options['keywords'],
	    'description' => $options['description'],
	];
	$optionsTmp['HeadFoot'] = <<<EOF
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/component.css">
	<link rel="stylesheet" href="css/responsive.css">
	{$options['HeadFoot']}

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
	$optionsTmp['BodyHead'] = $options['BodyHead'];
	$optionsTmp['BodyMain'] = $options['BodyMain'];
	$optionsTmp['BodyFoot'] = <<<EOF
	<script type="text/javascript" src="js/navigation.js"></script>
	{$options['BodyFoot']}
EOF;
	return gen_html($optionsTmp);
}
