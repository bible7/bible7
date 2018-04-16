<?php
include_once('template.php');
$options = [
    'top_path' => '../',
];
$options['HeadFoot'] = <<<EOF
	<link rel="stylesheet" href="css/random.css">
EOF;
$options['BodyMain'] = <<<EOF
	<div class="bg"></div>
    <p class="random">
        <span class="tip">随机数：</span>
        <span id="num"></span>
    </p>
EOF;
$options['BodyFoot'] = '<script src="js/random.js"></script>';
file_put_contents('../random/index.html', gen_html($options));
echo "success\n";
die;
