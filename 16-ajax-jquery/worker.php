<?php

// Pour être sûr que la requête est en POST
if ('POST' === $_SERVER['REQUEST_METHOD']) {
    echo strtoupper($_POST['foo']);
}

echo 'Ajax';
