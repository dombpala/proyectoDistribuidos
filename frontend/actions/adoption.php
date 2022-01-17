<?php
    function adoptionAction($data,$redirect_path){
        $postdata = http_build_query($data);
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context  = stream_context_create($opts);
        file_get_contents('http://localhost:5000/adopcion/', false, $context);
        header('Location: '.$redirect_path.' ');       
    }

    $post_data = array(
        'name' => $_POST['name'],
        'last_name' => $_POST['last_name'],
        'id_owner' => $_POST['id_owner'],
        'birthday' => $_POST['birthday'],
        'id_pet' => $_GET['pet']
    );
    adoptionAction($post_data,"/?page=adoption");

?>