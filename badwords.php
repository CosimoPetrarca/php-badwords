<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h2> La tua frase è: <?php echo $_GET['frase'] ?></h2>
    <p> La tua frase è lunga: <?php echo strlen($_GET['frase']) ?> lettere</p>
    <h2> La tua frase censurata è: <?php echo str_replace($_GET['badwords'],'****',$_GET['frase']) ?></h2>
    <p> La frase censurata è lunga: <?php echo strlen(str_replace($_GET['badwords'],'****',$_GET['frase'])) ?> lettere</p>
</body>
</html>