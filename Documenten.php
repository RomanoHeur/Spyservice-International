<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Home</title>

    <link rel="stylesheet" href="CSS/documenten.css">

    <!-- Navbar -->
<?php $activePage = 'Documenten'; include('Navbar.php');

if(isset($_POST['submit'])) {

    session_unset();


    header("Location: inlogpagina.php");
    die();
}
?>

</head>
<body>
    <!-- login form-->
<div class="container">
    <div class="row my-5">
        <div class="col-md pt-3 my-5">
                <h3 class="text"> U bent ingelogd!</h3>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>
        </div>

        <div class="row my-3 pt-5">
            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>

            <div class="col-md">
            <img src="Images/GeheimeDocu.png" class="Geheim">
            </div>
        </div>

        <form action="" method="POST">
        <div class="row my-3 py-4">
        <div class="form-group row">
            <div class="col-md">
                <input type="submit" name="submit" class="btn" value="Uitloggen">
            </div>
        </div>
    </div>
</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous">
</script>
</body>
</html>