<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../assets/css/modules/cf-navigation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<nav class="navbar"> <!-- Barre de Navigation -->
    <div class="logo">
        <img src="../assets/images/logoDefinitif.png" alt="Logo">
    </div>
    <div class="search">
        <form>
            <input class= "searchInput" type="text" id="search-box" placeholder="Rechercher...">
            <button type="submit" onclick="return search; id="search-btn">OK</button>
            <script src="../assets/javaScript/searchBox.js"></script>
        </form>
        <ul class="results">
            <!-- Résultats de la recherche seront ajoutés dynamiquement ici -->
        </ul>
    </div>
    <div class="links">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="movies.php">Films</a></li>
            <img src="assets/images/logoDefinitif.png" alt="Logo" class="logo2" href="index.php">
            <li><a href="schedule.php">Horaires</a></li>
            <li><a href="about.php">Contacts</a></li>
        </ul>
    </div>
</nav><!--Fin de Barre de Navigation-->
<header>

