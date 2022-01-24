<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Exercice 7</title>
</head>
<body>
    <div class="container">
        <ul class="mt-3">
            <?php
                $mesInformations = array(
                    'nom' => 'SOUINI',
                    'prenom' => 'Tayeb',
                    'age' => 27,
                    'sexe' => 'Homme',
                    'ville' => 'Youssoufia',
                    'origine' => 'Meknès'
                );
                
                $mesInformations['formation'] = 'Web Dev';

                foreach($mesInformations as $infoKey => $infoVal) {
                    echo " <li class=\"bg-dark text-light p-4\"> {$infoVal} </li>";
                }
            ?>
</body>
</html>