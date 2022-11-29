<?php
session_start();
include __DIR__ .'/functions/functions.php';

// $errorClass = "is-invalid";
$alfabeto = 'abcdefghijklmnopqrstuvwxyz';
$upAlfabeto = strtoupper($alfabeto);
$numeri = '0123456789';
$simboli = '[]()/*#!%&?;@-_.';
$arrayTot = $alfabeto.$upAlfabeto.$numeri.$simboli; 
$arrayTot = str_shuffle($arrayTot); 

$password = '';

if(isset($_GET['numberPsw']) && !empty($_GET['numberPsw'])){
    // var_dump($_GET['numberPsw']);
    $numberPsw = $_GET['numberPsw'];
    while(strlen($password) < $numberPsw){
        $password .= getChar($arrayTot);
        $result = $password;
    };
    $password = str_shuffle($password);
    var_dump($password);

    $_SESSION['password'] = $password;
    header('Location: ./result.php');
}

include __DIR__ .'/partials/header.php';
?>

<body class="bg-primary">
    <header class="container m-auto pb-3">
        <h1 class="text-white-50 text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera una password sicura</h2>
    </header>
    <main class="container m-auto">

        <!-- SEZIONE per eventuale MESSAGGIO -->

        <section class="bg-white rounded-5 p-5">
            <form action="index.php" method="GET" name="numbGenForm">
                <div class="row g-0">
                    <!-- Lunghezza password -->
                    <div class="col-6 my-2">
                        <div>Lunghezza password:</div>
                    </div>
                    <div class="col-6 my-2">
                        <input type="number" class="w-100" id="numberPsw" name="numberPsw" value="
                            <?php isset($_GET['numberPsw']) ? $_GET['numberPsw'] : '' ?>" min="10" max="20" required>
                    </div>
                    <!-- Ripetizioni di uno o più caratteri -->
                    <div class="col-6 my-2">
                        <div>Consenti ripetizioni di uno o più caratteri:</div>
                    </div>
                    <div class="col-6 my-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repet" id="repet">
                            <label class="form-check-label" for="repet">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repet" id="no-repet" checked>
                            <label class="form-check-label" for="repet">
                                No
                            </label>
                        </div>
                    </div>
                    <!-- Selezione dei caratteri da usare -->
                    <div class="col-6 my-2">
                        <!-- VUOTO -->
                    </div>
                    <div class="col-6 my-2">
                        <div class="form-check">
                            <input type="checkbox" name="elements[]" class="form-check-input" type="checkbox"
                                value="alfabeto" checked>
                            <label class="form-check-label" for="">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="elements[]" class="form-check-input" type="checkbox"
                                value="numeri">
                            <label class="form-check-label" for="">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="elements[]" class="form-check-input" type="checkbox"
                                value="simboli">
                            <label class="form-check-label" for="">
                                Simboli
                            </label>
                        </div>
                    </div>
                    <!-- bottoni di invio, reset e annullo -->
                    <div class="col-12 my-2">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </section>
    </main>

</body>

</html>