<?php
// prendere il valore che e' stato inviato.
// se ce trasformalo in intero e assegnalo altrimenti assegna un valore di default
$password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;   



 // per sapere se il form e' stato inviato
 $form_sent = !empty($_GET);
 // se il form e' stato inviato
 if($form_sent) {

    $generated_password = "";

    for($i=0; $i < $password_length; $i++ ) {
       
    // stingra di caratteri
    $all_chars = range('!', 'þ');
    
    // indice casuale con range numero di caratteri nella stringa
    $rand_char_index = rand(0, count($all_chars) - 1);
    
    // carattere randomico della stringa chars nella posizione dell'indice casuale
    $rand_char = $all_chars[$rand_char_index];

    // aggiungo alla passoword i caratteri
    $generated_password .= $rand_char;
    // stampo password
};

var_dump($generated_password);
    


}
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
                <input type="number" class="form-control" name="password-length" id="password-length" value="<?= $password_length?>">
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