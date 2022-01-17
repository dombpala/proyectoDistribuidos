<?php

    function loginAction($username,$redirect_path){
        setcookie("sessionuser",json_encode(array('username'=>$username)),time()+3600,$redirect_path);
        header('Location: '.$redirect_path.' ');
    }

    loginAction($_POST['username'],'/');
?>