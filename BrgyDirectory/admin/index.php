<?php

if (array_search('mod_rewrite', apache_get_modules()) === false) {
    header("Location: http://localhost/BrgyDirectory/index.php/administrator");
    exit;
} else {
    header("Location: http://localhost/BrgyDirectory/administrator");
    exit;
}

?>