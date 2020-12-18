<!-- HEADER -->
<header class="main-header">
    <div class="container navbar">
        <img src="./img/logo.png" alt="Spotify">
        <select v-model="searchArtist">
            <option value="all" selected>All</option>
            <option v-for="(el, i) in cds" :value="el.author">{{el.author}}</option>
        </select>
    </div>
</header>   