<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- personal style  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="d-flex justify-content-center">
        <h1 class="display-1 fw-bold pt-3">Taboolean</h1>
    </div>
    <div class="container">
        <form action="response.php" methods="GET">
            <!-- input di inserimento paragrafo -->
            <div>
                <label for="paragraph" class="form-label"></label>
                <textarea class="p-2" name="paragraph" id="paragraph" cols="20" rows="10" placeholder="inserisci il testo da modificare"></textarea>
            </div>
            <!-- fine input di inserimento paragrafo -->
        </form>
    </div>
    

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>