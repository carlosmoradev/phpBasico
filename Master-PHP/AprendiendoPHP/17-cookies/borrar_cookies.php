<?php

if($_COOKIE['galletita']){
    //unset($_COOKIE['galletita']);
    setcookie('galletita', '', time()-100); /* Se hace caducar la cookie por fecha */
}

header('location:ver_cookies.php');