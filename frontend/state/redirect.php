<?php
    setcookie("sessionuser",json_encode(array('username'=>$_POST['username'])));
    header("Location: /");
?>
