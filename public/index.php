<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo POO</title>
</head>
<body>
    <h1>Exercice de POO</h1>
    <?php 
    require_once "../src/Vehicle.php";
    require_once "../src/Car.php";
    require_once "../src/Bicycle.php";
    
    $bmw = new Vehicle ('Black', 4, 'Gazole');
    var_dump($bmw);

    $volvo = new Vehicle ('Blue', 4, 'Essence');
    var_dump($volvo);

    $ayaNakamura = new Bicycle ('Noire', 2, 'Human');
    var_dump($ayaNakamura);
    ?>
</body>
</html>