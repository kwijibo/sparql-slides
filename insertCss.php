<?php
$html = file_get_contents('slides.html');
//$html = preg_replace('@<script.+</script>@ms', '', $html);
$html = preg_replace('@<style type="text/css" media="screen">.+?</style>@msi', '<link rel="stylesheet" href="slides.css"/><script type="text/javascript" src="slides.js"></script>', $html);


// $html = str_replace('</body>', '<script type="text/javascript" src="slides.js"></script></body>', $html);
file_put_contents('slides.html', $html);
?>