<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./node_modules/lodash/lodash.js"></script>
    <script src="./app.js" type="module"></script>

     <title>Projet bateau</title>
</head>
<body>
    <h1>Projet bateau sur un VPS</h1>

    <?php
        require './vendor/autoload.php';

        dump([
            'title' => 'Projet sur un VPS',
            'user' => 'Elogeek',
            'server' => 'Ubuntu',
            'live' => true,
        ]);
    ?>

</body>
</html>
