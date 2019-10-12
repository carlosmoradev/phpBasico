
<?php
if ($gestor = opendir('.')) {
    while (false !== ($entrada = readdir($gestor))) {
        if ($entrada != "." && $entrada != "..") {
            echo "$entrada\n";
        }
    }
    closedir($gestor);
}
?>
