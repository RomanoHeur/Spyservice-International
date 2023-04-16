<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>

    <link rel="stylesheet" href="CSS/contact.css">

    <!-- Navbar -->
    <?php $activePage = 'Contact';
    include('Navbar.php'); ?>

</head>

<body>

    <div class="container-fluid text-center">
        <div class="row my-5 pt-5">
            <div class="col-md pt-4 ">
                <h4 class="pb-3" style="color: #00416A"> BEZOEKADRES </h4>
                <p class="text" style="color: #1295D8"> Van Moerkerstraat 21
                    <br>
                    1024 DG Amsterdam
                    <br>
                    <br>
                    Tel.020 123 456 78
                    <br>
                    info@spyservices-int.nl
                    <br>
                    <br>
                    KvK. 123 456 789
                </p>
            </div>
            <div class="col-md colt1">
                <header class="head1 my-3 py-2">
                    <h4>CONTACTFORMULIER</h4>
                </header>
                <div class="form1 bg-white p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <input type="text" 
                            id="naam" 
                            name="naam" 
                            class="form-control" 
                            placeholder="Naam">
                        </div>
                        <div class="mb-3">
                            <input type="email" 
                            id="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="E-Mail">
                        </div>
                        <div class="mb-3">
                            <textarea id="bericht"
                             name="bericht" 
                             rows="3" 
                             class="form-control" 
                             placeholder="Bericht">
                    </textarea>
                        </div>
                        <div class="d-grid">
                            <button 
                            type="submit" 
                            name="submit" 
                            class="btn btn-primary btn-block">
                                sturen
                            </button>
                        </div>
                    </form>
                    <?php if (isset($_POST['submit'])) {
                        echo "<span>IPv6: " . $_SERVER['REMOTE_ADDR'] . "</span><br>";
                        echo "<span>Naam: " . $_POST['naam'] . "</span><br>";
                        echo "<span>E-Mail: " . $_POST['email'] . "</span><br>";
                        echo "<span>Bericht: " . $_POST['bericht'] . "</span><br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg mb-4">
                <header class="my-3 py-2">
                    <h4>LOCATIE</h4>
                </header>
                <img src="Images/locatie.png" alt="Locatie" class="img-fluid w-100">
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>