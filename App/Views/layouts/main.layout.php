<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $params['title']; ?></title>
</head>
<body>

<header>
    <h1> Benvingut a la meva App MVC</h1>
    <hr>
</header>

<main>
    <!-- Contingut de la vista -->
    <?php echo $params['content']; ?>

</main>

<footer>
    <!-- Espai pel footer -->
     <hr>
     <p style="text-align:center">@Toni Fernandex 2025</p>
</footer>
    
</body>
</html>