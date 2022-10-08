<?php
session_set_cookie_params(600);
session_start();

// Initialisations générales
$max_quest = 10; // Nbre maximum de questions à poser par quiz
$nbr_rec = 0; // nombre de records dans la table (inconnu au départ)

// Déterminer le nombre d'enregistrement dans la table
$serveur = "localhost";
$login = "root";
$pass = "";

if($connexion = new PDO("mysql:host=$serveur;dbname=quiz;charset=utf8", $login, $pass)) {
      
   try{
      $requete = $connexion->prepare("SELECT COUNT(*) FROM quiz");
      $requete->execute();
      $resultat = $requete->fetch();
   }
   
   catch(PDOException $e) {
      echo $e->getMessage();
   }
   
   $nbr_rec = $resultat[0];
   
} else {
   echo "Echec de la connection à la base de données";
}

if(!isset($_SESSION["nq"]))  // La toute première fois
{
   $nq = 1;  // nombre de questions posées
   $score = 0;
   $tab_tir = [] ;
   $_SESSION["nq"] = $nq;
   $_SESSION["tab_tir"] = $tab_tir;
   $_SESSION["score"] = $score;

} else { // Toutes les autres fois

   $nq = $_SESSION["nq"];
   $tab_tir = $_SESSION["tab_tir"];
   $score = $_SESSION["score"];
   $ok = $_SESSION["ok"];
   $rep = $_GET["rep"];
   if($rep == $ok)
      {
	    $score++;	
	   }
  $nq++;
  $_SESSION["nq"]=$nq;
  $_SESSION["score"]=$score;
}

// fin du quiz
if($nq > $max_quest){

  echo "Votre quiz est terminé avec le score de <b>".$score." / ".$max_quest."</B><br>";
  echo "<a href=\"".$_SERVER["PHP_SELF"]. "\"> Je voudrais refaire un autre quiz </a>";
  session_destroy(); 

} else { // Pas la fin du quiz
                 
   //Générer un nombre aléatoire de 0 à $nbr_rec - 1
   $tirage = TRUE;
   while($tirage)
   {
      $x=rand(1,$nbr_rec);  // Générer un nombre aléatoire
	  if (!in_array($x, $tab_tir)) { //   Vérifier que le n° n'est pas déja sorti
		 $tab_tir []=$x;		   
	     $_SESSION["tab_tir"] = $tab_tir;
		 $tirage = FALSE;
	  }
   }
   
      // Aller chercher la question correspondante au numéro tiré   
      try{
         $requete = $connexion->prepare("SELECT * FROM quiz WHERE num_quest = $x");
         $requete->execute();
         $resultat = $requete->fetch();
      }
      
      catch(PDOException $e) {
         echo $e->getMessage();
      }
      
      echo "<form method=\"get\" action=\"" . $_SERVER["PHP_SELF"] . "\" >\n";
      echo "<fieldset><legend>Question n° <B>" . $nq . "</b> - Votre score actuel : <b>" . $score . " / ".($nq - 1) ."</B></legend>\n";
      echo "<table><tr>";
      echo "<th>" . $resultat['question'] . "</th>\n";  // question
      echo "<tr><td><input type=\"radio\" name=\"rep\" value=\"1\"checked=\"checked\">"  . $resultat['r1'] . "</td></tr>\n";
      echo "<tr><td><input type=\"radio\" name=\"rep\" value=\"2\">" . $resultat['r2'] . "</td></tr>\n";
      echo "<tr><td><input type=\"radio\" name=\"rep\" value=\"3\">" . $resultat['r3'] . "</td></tr>\n";
      echo "<tr><td><input type=\"radio\" name=\"rep\" value=\"4\">" . $resultat['r4'] . "</td></tr>\n";
      echo "<tr><td><input type=\"submit\" Value=\"GO\" ></td></tr>\n";
      echo "</table>";
      echo "</fieldset></form>";
      $_SESSION["ok"] = $resultat['reponse'];  //memo de la bonne réponse
}
?>