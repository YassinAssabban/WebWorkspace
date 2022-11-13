<header>
    <div class="lisere">
        <a href="index.php"><img src="cosaNostraNavbar.png" class="logolis"></a>
    </div>
    <nav>
        <form action="article.php" method="POST">
            <div class="navbar">
                <a href="index.php">Accueil</a>
                <a href="armes.php">Armes</a>
                <a href="drogues.php">Drogues</a>
                <a href="voitures.php">Voitures</a>
                <a href="stockages.php">Stockages</a>
            <?php
            if (empty($_SESSION['userName'])) {
                echo "<div class=\"connect\"><a href=\"signUp.php\">Sign Up</a></div>";
                echo "<div class=\"connect\"><a href=\"connect.php\">Sign In</a></div>";
            } else {
                echo "<div class=\"connect\"><a href=\"profil.php\">Mon compte</a></div>";
                echo "<div class=\"connect\"><a href=\"deconnexion.php\">Deconnexion</a></div>";
            }
            ?>
            </div>
        </form>
    </nav>
</header>