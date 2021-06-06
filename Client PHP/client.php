<?php
require_once('Connection.php');
if(!empty($_POST)){
    @$response = $client->call('compareSecret',array('f' => $_POST['sec'] ));
   $win = current($response) ;
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body class="container p-5 mt-5">

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>1. Add Gamer</h5>
                </div>
                <div class="card body">
                <?php 
                            if(isset($_GET['gamer'])){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Gamer added';
                                echo '</div>';
                            }
                    ?>
                    <form class="m-auto pb-5" action="addGamer.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pseudo" name="pseudo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>2. Game Configuration</h5>
                </div>
                <div class="card body">
                    <?php 
                            if(isset($_GET['config'])){
                                echo '<div class="alert alert-success" role="alert">';
                                echo 'Registred';
                                echo '</div>';
                            }
                    ?>
                    <form class="m-auto pb-5" action="Configuration.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">nombre Essai</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pseudo" name="nbtries">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Time</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter time" name="time">
                        </div>
                        <button type="submit" class="btn btn-primary">Start</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>3. Game </h5>
                </div>
                <div class="card body">
                <form class="m-auto pb-5" action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pseudo" name="sec">
                        </div>
                        <button type="submit" class="btn btn-primary">Try</button>
                    </form>
                    <?php
                    if(isset($win)){
                         if($win == "m:4-b:0"){
                        echo '<h5 class="m-auto alert alert-success"> GG YOU WON</h5>';
                    }else
                        echo '<h5 class="m-auto alert alert-danger">'.$win.'</h5>';
                    }
                   
                    ?>
                </div>
            </div>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>