<?php

$dir = "./";

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..' && $file != 'md.php' && strpos($file, '_tn') === false) {
                $tnFile = str_replace('.jpg', '_tn.jpg', $file);
                echo '| https://benoclock.github.io/S06-images/produits/'.$file.' | https://benoclock.github.io/S06-images/produits/'.$tnFile.' | <img src="https://benoclock.github.io/S06-images/produits/'.$tnFile.'" alt="" height="60"> |'.PHP_EOL;
            }
        }
        closedir($dh);
    }
}