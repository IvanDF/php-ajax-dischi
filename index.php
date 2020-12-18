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

<div id="app">
    <!-- HEADER -->
    <?php // IMPORT HEADER
        require __DIR__ . '/partials/templates/header.php';
    ?>
    <main class="main-section">
        <div class="container">
            <div class="songs">
                <ul class="song-list">
                    <li v-for=" (cd, i) in cds" class="song-item txt-center" v-if="searchArtist === 'all'">
                        <img class="img-resp" :src="cd.poster" :alt="cd.title">
                        <h3> {{cd.title}} </h3>
                        <small> {{cd.author}} </small>
                        <h3> {{cd.year}} </h3>
                        <small> {{cd.genre}} </small>
                        <div class="filter">
                            <i class="fas fa-play"></i>
                        </div>
                    </li>
                    <li v-for=" (cd, i) in cds" class="song-item txt-center" v-if="cd.author === searchArtist">
                        <img class="img-resp" :src="cd.poster" :alt="cd.title">
                        <h3> {{cd.title}} </h3>
                        <small> {{cd.author}} </small>
                        <h3> {{cd.year}} </h3>
                        <small> {{cd.genre}} </small>
                        <div class="filter">
                            <i class="fas fa-play"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>
        
    <!-- MAIN JS -->
    <script src="./dist/js/main.js"></script>
</body>
</html>