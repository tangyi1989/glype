<?php
    header('Content-Type:image/gif');
    $ch = curl_init('http://www.baidu.com/img/bdlogo.gif');

    # Set the options
    #curl_setopt_array($ch, $this->curlOptions);
    # curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);

    Header('Content-type:image/gif');
    # Make the request
    $raw = curl_exec($ch);
    $savefile = fopen('./download/img.gif', 'w');
    
    #ob_start();
    echo $raw;
    #ob_end_flush();
    die();