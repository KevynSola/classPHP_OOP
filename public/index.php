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
    require_once "car.php";
    require_once "bicycle.php";
    
    $bmw = new Car ('Black', 4, 'Gazole');
    var_dump($bmw);

    $volvo = new Car ('Blue', 4, 'Essence');
    var_dump($volvo);

    $ayaNakamura = new Bicycle ('Noire');
    var_dump($ayaNakamura);
    ?>
</body>
</html>
