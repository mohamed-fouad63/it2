<?php
// delete all files older than 90 days
function deleteFiles($dir)
{
    // loop through the files one by one
    foreach (glob($dir . '/*') as $file) {
        if (is_file($file)) {
            // check if file older than 90 days
            if ((time() - filemtime($file)) > (60 * 60 * 24 * 90)) {
                unlink($file);
            }

        }
    }
}
