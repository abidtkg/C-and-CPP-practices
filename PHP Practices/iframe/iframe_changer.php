<?php
	$content = file_get_contents('https://booksy.com/en-gb/instant-experiences/widget/27239');
	$content = str_replace('</style>','</style><base href="https://www.codes.abidtkg.com/" />', $content);

	$content = str_replace('</head>','<link rel="stylesheet" href="https://codes.abidtkg.com/off.css" /></head>', $content);

	echo $content;

?>
