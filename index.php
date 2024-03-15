<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Nerko+One&display=swap" rel="stylesheet">



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- personal style  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="container" id="container-principal">
        <div class="d-flex justify-content-center">
            <h1 class="display-1 fw-bold pt-3">Taboolean</h1>
        </div>
            <div class="d-flex justify-content-center">
                <img src="./img/unnamed.png" alt="taboo image">
                <h2 class="m-0">LEAN</h2>
            </div>
        <div class="container">
            <form action="response.php" methods="GET">
                <!-- campo di input per inserire il paragrafo -->
                <div class="pt-3">
                    <label for="paragraph" class="form-label"></label>
                    <textarea class="p-2" name="paragraph" id="paragraph" cols="160"  placeholder="Inserisci il testo da modificare"></textarea>
                </div>
                <!-- fine campo di input per inserire il paragrafo -->
                <!-- campo di input per inserire la parola da censurare -->
                <div class="w-25 pt-3">
                    <label for="censor"></label>
                    <input type="text" class="form-control p-2 w-100" placeholder="Inserisci la parola 'Taboo'" name="censor">
                </div>
                <!-- fine campo di input per inserire la parola da censurare -->
                <!-- invio del form -->
                <div class="d-flex justify-content-center pt-4">
                    <button id="button" type="submit">Invia</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>