<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>

    <?php // Item from database
        include __DIR__ . '/partials/database.php' 
    ?>
<div id="app">
    <header class="main-header">
        <div class="container">
            <img src="./img/logo.png" alt="Spotify">
        </div>
    </header>
    <main class="main-section">
        <div class="container">
            <div class="songs">
                <ul class="song-list">
                    <?php foreach( $database as $song ) : ?>
                        <li class="song-item txt-center">
                            <img class="img-resp" src="<?php echo $song['poster'] ?>" alt="<?php echo $song['title'] ?>">
                            <h3> <?php echo $song['title'] ?> </h3>
                            <small> <?php echo $song['author'] ?> </small>
                            <h3> <?php echo $song['year'] ?> </h3>
                            <small> <?php echo $song['genre'] ?> </small>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </main>
</div>
        
    <!-- MAIN JS -->
    <script src="./dist/js/main.js"></script>
</body>
</html>