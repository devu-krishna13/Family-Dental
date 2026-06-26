<?php
$source = __DIR__ . '/tmp-project';
$dest = __DIR__;

function moveDir($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                moveDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                rename($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
    rmdir($src);
}

if (is_dir($source)) {
    moveDir($source, $dest);
    echo "Files moved successfully and tmp-project deleted.\n";
} else {
    echo "tmp-project does not exist.\n";
}
?>
