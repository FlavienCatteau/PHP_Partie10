<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tp3 p10</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid text-center">
              <div class="container">
                <h1 class="display-3">TP 3 - PHP</h1>
                <h2>Partie 10</h2>
                <p class="lead">Faire une fonction qui permet d'afficher les données des tableaux</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
              </div>
            </div>
        </div>
        <div class="text-center">
            <a href="../tp1/index.php" class="btn btn-secondary">TP 1</a>
            <a href="../tp2/index.php" class="btn btn-secondary">TP 2</a>
            <a href="../tp3/index.php" class="btn btn-secondary">TP 3</a>
        </div>
        <div class="text-center">
            <?php
                $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
                $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
                $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
                $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
                $arrayOfArrays = [$portrait1, $portrait2, $portrait3, $portrait4];
            ?>
            <?php
                foreach ($arrayOfArrays as $index =>$value){ ?>
            <div class="text-center">
                <p><?= $arrayOfArrays[$index]['name'] . ' ' . $arrayOfArrays[$index]['firstname'];?></p>
                <img class="text-center" src="<?= $arrayOfArrays[$index]['portrait'] ?>" >
            </div>
            <?php        
                }
            ?>
        </div>
    </body>
</html>