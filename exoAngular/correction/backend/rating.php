<?php

require_once 'managers/DBManager.php';
require_once 'models/rating.class.php';
require_once 'managers/RatingManager.php';


if ((isset($_GET['value']) && isset($_GET['format'])) || (isset($_POST['value']) && isset($_POST['format']))) {

    $ratingValue = $_GET['value'] ?? $_POST['value'];
    $format = $_GET['value'] ?? $_POST['value'];
    if ($ratingValue > 0 && $ratingValue < 11) {
        $dbManager = new DBManager();
        $connection = $dbManager->getConnection();
        $ratingManager = new RatingManager($connection);

        $rating = new Rating();

        $rate->setRate($ratingValue);
        $ratingManager->save($rating);
        $countAvg = $ratingManager->countAndAvg();
        if (strtoupper(($format) == 'JSON')) {
            header('Content-Type: application/json');
            echo json_encode(array('moyenne' => (float)$countAndAvg[0]['moyenne'], 'nombre' => (int)$countAndAvg[0]['total']));
        } elseif (strtoupper($format) == 'XML') {
            header('Content-Type: application/xml');
            echo '<resultat>' .
                '<moyenne>' .
                (float)$countAndAvg[0]['moyenne'].
                '</moyenne>' .
                '<total>'.
                (int)$countAndAvg[0]['total'].
                '</total>'.
                '</resultat>';
        } else {
            http_response_code(406);
            echo "le format demandé n'est pas gerer";
        }
    } else {
        http_response_code(406);
        echo "l'évaluation doit etre entre 1 et 10";
    }
} else {
    http_response_code(400);
    echo 'Les données ne sont pas valides';
}
