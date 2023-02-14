#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
    // Variables
    int jeu_ordinateur = 0, jeu_utilisateur = 0;
    int points_ordinateur = 0, points_utilisateur = 0;

    // Constantes
    const int VALEUR_MIN = 1, VALEUR_MAX = 3;
    const int MAX_POINT = 3;
    const int PIERRE = 1, PAPIER=2, CISEAUX=3;

    srand(time(NULL));

    do // Boucle de jeu
    {
        do //lecture choix joueur
        {
            printf("Que voulez vous jouer (1- Pierre, 2- Papier, 3- Ciseaux):");
            scanf("%d", &jeu_utilisateur);
        }while(jeu_utilisateur<VALEUR_MIN || jeu_utilisateur>VALEUR_MAX);

        // generation d'un nombre aleatoire pour le choix de l'ordi
        jeu_ordinateur = (rand() % VALEUR_MAX) + VALEUR_MIN;

        //traitement de la manche courante
        printf("Joueur joue %d et ordinateur joue %d >>>> ",jeu_utilisateur, jeu_ordinateur);

        if(jeu_ordinateur == jeu_utilisateur)
        {
           printf("match null\n");
        }
        else if( (jeu_utilisateur == PIERRE && jeu_ordinateur ==  CISEAUX)
            ||  (jeu_utilisateur == PAPIER && jeu_ordinateur ==  PIERRE)
            ||  (jeu_utilisateur == CISEAUX && jeu_ordinateur ==  PAPIER) )
        {
            printf("Joueur gagne 1 point\n");
            points_utilisateur++;
        }
        else
        {
            printf("Ordinateur gagne 1 point\n");
            points_ordinateur++;
        }

        //affichage des points
        printf("Points: Ordi: %d et joueur: %d\n\n", points_ordinateur, points_utilisateur);

    }while(points_ordinateur < MAX_POINT && points_utilisateur < MAX_POINT);

    //bilan de la partie
    if(points_ordinateur > points_utilisateur)
        printf("\tDefaite ...\n");
    else
        printf("\tVictoire !\n");

    return 0;
}
