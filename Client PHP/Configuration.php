<?php
    require_once('Connection.php');
    
    if(!empty($_POST)){
       
        @$response = $client->call('gameConfiguration', array('nbtries' => (int)$_POST['nbtries'],'nombre'=> (int)$_POST['nomber'],'time'=>(int)$_POST['time']));
        @$response = $client->call('generateSecret');
        header("location:client.php?config=1");
    }
?>