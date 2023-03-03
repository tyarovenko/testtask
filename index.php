<!DOCTYPE html>
<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_error', 1);
?>
<html>
     <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body class="bg-light">
        <div class="container">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Authorization form</h4>
            <div id ="msgs"></div>
            <form class="needs-validation" id = 'registration' action='actions/add.php'>
                <div class="col-md-6 mb-3">
                    <label>First Name</label>
                    <input class="form-control" id = 'first_name' name = 'first_name' type='text'></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Last Name</label>
                    <input class="form-control" id = 'last_name' name = 'last_name' type='text'></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input class="form-control" id = 'email' name = 'email' type='text'></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input class="form-control" id = 'password' name = 'password' type='text'></input>
                </div>
                <div class="col-md-6 mb-3">
                    <label>PasswordConf</label>
                    <input class="form-control" id = 'passwordconf' name = 'passwordconf' type='text'></input>
                </div>
                <hr class="col-md-6 mb-3">
                <button class="btn btn-primary btn-lg btn-block" type='submit' id='saveform'>Authorization</button>
            </form>
            </div>
        </div>
    </body>
    <script src='js/savedata.js'></script>
</html>
