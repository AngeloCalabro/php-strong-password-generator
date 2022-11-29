<?php
include __DIR__ .'/functions/functions.php';

include __DIR__ .'/partials/header.php';
?>


<body class="bg-primary">
    <header class="container m-auto pb-3">
        <h1 class="text-white-50 text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera una password sicura</h2>
    </header>
    <main class="container m-auto">
        <section></section>
        <section class="bg-white rounded-5 p-5">
            <form action="index.php" method="POST">
                <div class="row g-0">
                    <div class="col-6 my-2">
                        <div>Lunghezza password:</div>
                    </div>
                    <div class="col-6 my-2">
                        <input type="number" class="w-100" required>
                    </div>
                    <div class="col-6 my-2">
                        <div>Consenti ripetizioni di uno o più caratteri:</div>
                    </div>
                    <div class="col-6 my-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-6 my-2">
                        <!-- VUOTO -->
                    </div>
                    <div class="col-6 my-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Lettere" id="flexCheckDefault"
                                checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Numeri" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Simboli" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </div>
            </form>
        </section>
    </main>

</body>

</html>