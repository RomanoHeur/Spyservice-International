<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Home</title>

    <link rel="stylesheet" href="CSS/inlog.css">

    <!-- Navbar -->
<?php $activePage = 'Documenten'; include('Navbar.php');?>

</head>
<body>
    <!-- login form-->
<div class="container">
    <div class="row my-5">
        <div class="col-md pt-3 my-5">
            <div class="login">
                <h3 class="text"> U moet ingelogd zijn om de inhoud van de pagina te kunnen zien.</h3>
            </div>
            <form action="" method="post">
                <div class="form-group row pt-5">
                    <label for="Gebruikersnaam" class="col-md col-form-label"><h4 class="text">Gebruikersnaam:</h4></label>
                    <div class="col-md col1">
                        <input type="text" id="Gebruikersnaam" name="gbrs" class=" balk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Password" class="col-md col-form-label"><h4 class="text">Wachtwoord: </h4></label>
                    <div class="col-md col1">
                        <input type="password" class=" balk2" id="password" name="pass">
                    </div>
                </div>
                <div class="form-group row">
                    <input type="submit" name="submit" class="btn" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</div>

<?php

session_start();
if(isset($_POST['submit'])) {

    $Gebruikersnaam = htmlspecialchars($_POST['gbrs']);
    $password = htmlspecialchars($_POST['pass']);

    if($password=="NulNulZeven!" && $Gebruikersnaam == "J_Bond") {
        header("Location: Documenten");
        die();
    }
    else {
        echo "<p> Uw inloggevens kloppen niet, zijn ze goed ingevuld? probeer het opnieuw. </p>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous">
</script>
</body>
</html>