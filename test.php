<?php

var_dump($hash = password_hash('1234', PASSWORD_DEFAULT));

var_dump(password_verify('1234', $hash));


$sites =[];

foreach ($sites as $site) {
    curl($site.'/log.txt');

    if ($result) {
        echo $site;
    }
}