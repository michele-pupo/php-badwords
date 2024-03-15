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
    <div class="container d-flex justify-content-center gap-4 py-4">
        <span>
            <?php 
                echo $censor;
            ?>
        </span>
    </div>
    <!-- fine parola da censurare -->
    <!-- stampa del paragrafo a schermo -->
    <div class="container d-flex flex-column justify-content-center gap-4 py-4">
        <div class="d-flex justify-content-between">
            <p>
                <?php 
                    echo $paragraph;
                ?>
            </p>
            <!-- stampa a schermo lunghezza del paragrafo -->
            <span>
                Il paragrafo ha <?php echo $lenght_paragraph ?> caratteri
            </span>
            <!-- fine stampa a schermo lunghezza del paragrafo -->
        </div>
        <!-- stampa del paragrafo a schermo con la parola censurata -->
        <div class="d-flex justify-content-between">
            <p>
                <?php 
                    echo $new_paragraph;
                ?>
            </p>
            <!-- stampa a schermo lunghezza del nuovo paragrafo -->
            <span>
                Il paragrafo ha <?php echo $lenght_new_paragraph ?> caratteri
            </span>
            <!-- fine stampa a schermo lunghezza del nuovo paragrafo -->
        </div>
        <!-- fine stampa del paragrafo a schermo con la parola censurata -->
    </div>
    <!-- fine stampa del paragrafo a schermo -->

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>