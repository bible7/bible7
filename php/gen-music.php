<?php
include_once('template.php');
$options = [
    'top_path' => '../',
];
$options['HeadFoot'] = <<<EOF
	<style>
		body {
			margin: 0;
			padding: 0;
		}
	</style>
EOF;
$options['BodyMain'] = <<<EOF
	<iframe width="100%" onload='this.height=document.documentElement.clientHeight-10' frameborder="0" src="https://www.bandari.net" height="700px"></iframe>
EOF;
file_put_contents('../music/index.html', gen_html($options));
echo "success\n";
die;
