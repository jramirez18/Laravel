<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de suarios-JR Systems</title>
</head>
<body>
    <h1><?= e($title) ?></h1>
    <ul>
    
        <?php foreach ($users as $user): #para simplicar utilice <?=  y ya no use <= php echo?>
        <li><?= $user ?></li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>