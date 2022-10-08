<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Made In Config</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="logo/monitor.png">
    <meta name="keywords" content="HTML, CSS, JavaScript, computer, cartegraphique, cartemère, processeur, intel, amd, msi, asus, nzxt, boitier, watercooling, vantirad, vantilateur, bequiet, alimentation, corsair, kitevo, mémoire, hyperx, kingston, samsung, ventaliteur, seagate, westerndigital, screen, ecran, 24, 28, clavier, souris, keyboard, mouse, macbook, iphone, apple, ipad, composants, phériphériques, belgium, belgique, france, french, madeinconfig, madein, config, made ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <header>
        <div class="lisere">
            <a href="index.php"><img src="logo/logo2.png" class="logolis"></a>
            <a href="panier.php" class="panier"><img src="logo/basket.png" width="40px" height="40px"></a>
        </div>
        <nav>
                    <div class="navbar">
                                  <a href="index.php">Accueil</a>
                                  <a href="news.php">News</a>
                        <div class="dropdown">
                                    <button class="dropbtn">Composants
                                      <i class="fa fa-caret-down"></i>
                                    </button>
                            <div class="dropdown-content">
                                    <div class="header">
                                        <h2>Composants</h2>
                                    </div>
                                <div class="row-nav">
                                    <div class="column-nav">
                                        <h3>Composants PC</h3>
                                        <a href="proco.php">Processeur</a>
                                        <a href="cm.php">Carte mère</a>
                                        <a href="kitevo.php">Kit Evo</a>
                                    </div>
                                    <div class="column-nav">
                                        <a href="memoire.php">Mémoire</a>
                                        <a href="cg.php">Carte Graphique</a>
                                        <a href="boitierpc.php">Boitier</a>
                                    </div>
                                    <div class="column-nav">
                                        <a href="alim.php">Alimentation</a>
                                        <a href="ssd.php">SSD</a>
                                        <a href="disquedur.php">Disque Dur</a>
                                    </div>
                                    <div class="column-nav">
                                        <h3>Refroidissement PC</h3>
                                        <a href="ventil.php">Ventilateur PC</a>
                                        <a href="ventir.php">Ventirad PC</a>
                                        <a href="water.php">Watercooling</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="dropdown">
                                    <button class="dropbtn">Produits
                                      <i class="fa fa-caret-down"></i>
                                    </button>
                            <div class="dropdown-content">
                                    <div class="header">
                                        <h2>Produits</h2>
                                    </div>
                                <div class="row-nav">
                                    <div class="column-nav">
                                        <h3>Périphériques</h3>
                                        <a href="screen.php">Ecran PC</a>
                                        <a href="clavier.php">Clavier</a>
                                        <a href="mouse.php">Souris</a>
                                    </div>
                                    <div class="column-nav">
                                        <h3>Apple</h3>
                                        <a href="macbook.php">Macbook</a>
                                        <a href="ipad.php">Ipad</a>
                                        <a href="iphone.php">Iphone</a>
                                    </div>
                                    <div class="column-nav">
                                    </div>
                                    <div class="column-nav">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                            session_start();

                                            if(empty($_SESSION['user'])) {
                                                echo "
                                                <div class=\"connect\"><a href=\"signUp.php\">Sign Up</a></div>
                                                <div class=\"connect\"><a href=\"connect.php\">Sign In</a></div> ";
                                            } else {
                                                $sess = $_SESSION['user'];
                                                echo "<div class=\"connect\"><a href=\"#\">Bonjour ";
                                                echo "$sess";
                                                echo "!</a></div> <div class=\"connect\"><a href=\"deconnexion.php\">Deconnexion</a></div>";
                                            }

                                        ?>
                                        <div class="search-container">
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Search.." name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                              </div>
                    </div>
        </nav>
    </header>
<body>
    <article>
        <div class="titre apple"><p class="animate__animated animate__zoomIn hidetitle">Découvrez notre nouvelle gamme Apple M1</p></div>

    </article>


            <footer>
                    <p>Copyright © Made In Config. Inc.</p>
                    <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
                    <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
                    <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>
            </footer>
            </body>
</html>