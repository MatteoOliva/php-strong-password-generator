<?php
require_once 'functions.php';
require_once 'init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Strong Password Generator</h1>
        <div class="card">
            <div class="card-body">
                <!-- il get e' implicito -->
                <form class="row">
                    <div class="col-10">
                        <label for="password-length" class="form-label">
                            Lunghezza Password
                        </label>
                        <input type="number" class="form-control" name="password-length" id="password-length"
                            value="<?= $password_length ?>">
                    </div>
                    <div class="col-2 d-flex align-items-end">
                        <button class="btn btn-success w-100">
                            Genera Password
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</body>

</html>