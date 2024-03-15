<!-- apertura porta php con variabili -->
<?php
$censor = $_GET['censor'];
$paragraph = $_GET['paragraph'];
$new_paragraph = str_replace($censor, '***', $paragraph);
$lenght_paragraph = strlen($paragraph);
$lenght_new_paragraph = strlen($new_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- personal style  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- parola da censurare -->
    <div class="container-fluid d-flex justify-content-center gap-4 py-5">
        <h3 class=display-2>La parola Taboo è: 
            <span class="fw-bold display-5">
                <?php 
                    echo $censor;
                ?>
            </span>
        </h2>
    </div>
    <!-- fine parola da censurare -->
    <!-- stampa del paragrafo a schermo -->
    <div class="container d-flex flex-column gap-4 py-4">
        <div class="d-flex flex-column">
            <p class="display-4">
                <?php 
                    echo $paragraph;
                ?>
            </p>
            <!-- stampa a schermo lunghezza del paragrafo -->
            <h4 class="display-6 d-flex justify-content-center">
                Il paragrafo digitato ha <span class="fw-bold"><?php echo $lenght_paragraph ?></span> caratteri
            </h4>
            <!-- fine stampa a schermo lunghezza del paragrafo -->
        </div>
        <hr>
        <!-- stampa del paragrafo a schermo con la parola censurata -->
        <div class="d-flex flex-column mt-5">
            <p class="display-4">
                <?php 
                    echo $new_paragraph;
                ?>
            </p>
            <!-- stampa a schermo lunghezza del nuovo paragrafo -->
            <h4 class="display-6 d-flex justify-content-center">
                Il nuovo paragrafo ha <span class="fw-bold"><?php echo $lenght_new_paragraph ?></span> caratteri
            </h4>
            <!-- fine stampa a schermo lunghezza del nuovo paragrafo -->
        </div>
        <!-- fine stampa del paragrafo a schermo con la parola censurata -->
    </div>
    <!-- fine stampa del paragrafo a schermo -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>