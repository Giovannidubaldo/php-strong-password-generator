<!-- LOGICA DI LAVORO -->
<?php

?>

<!-- LOGICA DI VISUALIZZAZIONE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1 class="text-center my-5">Genera la tua password</h1>
    <div class="container">
        
        <!-- Form per chiedere la lunghezza della password -->
        <form action="index.php" method="GET">
            <div class="row">
                <div class="col-6">
                    <input type="number" name="pass_length" id="pass_length" placeholder="Indica quanto deve essere lunga la tua password" 
                    class="form-control form-control-sm" min="1">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-sm btn-success">Genera</button>
                </div>                
            </div>
        </form>
    </div>

</body>
</html>