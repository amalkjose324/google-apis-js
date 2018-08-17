<?php
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != ".git" && $file != "index.php" && $file != "auth.js" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo $i.") <a href='$path/$file'>$file</a><br />";
        $i++;
    }
}
closedir($dh);
?>
