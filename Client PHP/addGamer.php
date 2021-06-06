<?php
    require_once('Connection.php');

    if(!empty($_POST['pseudo'])){
        $s = $_POST['pseudo'];
        @$response = $client->call('createGamer', array('p' => $s ));
        header("location:client.php?gamer=1");
    }


?>