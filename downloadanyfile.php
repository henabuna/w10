<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:37px;
	top:33px;
	width:175px;
	height:35px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:222px;
	top:38px;
	width:72px;
	height:28px;
	z-index:2;
}
-->
</style>
<div id="Layer1"></div>
<div id="Layer2">Save</div>

<?php

ignore_user_abort(true);
set_time_limit(0); // disable the time limit for this script

$path = "/absolute_path_to_your_files/"; // change the path to fit your websites document structure
$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $_GET['download_file']); // simple file name validation
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
$fullPath = $path.$dl_file;

if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
        header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
        break;
        // add more headers for other content types here
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
        break;
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
<a href="C:\wamp\www\pro\uploads">Download_file </a> 

?>
