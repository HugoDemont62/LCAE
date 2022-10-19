<?php


if (!empty($_GET['offre'])){
    if ($_GET['offre'] == 1){
        if(!empty($_COOKIE['offre1'])){
            $_COOKIE['offre1'] = $_COOKIE['offre1'] +1;
        }else{
            setcookie('offre1',1, time()*(360*1000));
        }
    }

}


header("location:".  $_SERVER['HTTP_REFERER']);