#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
    const int TAILLE = 1000;
    const int VALEUR_MIN = 'A', VALEUR_MAX = 'Z';

    char lettres[TAILLE];
    char saisie;
    int compteur = 0;

    //remplissage du tableau
    srand(time(NULL));
    for(int i=0; i<TAILLE; i++)
        lettres[i] = (char)((rand() % (VALEUR_MAX-VALEUR_MIN+1)) + VALEUR_MIN);

    //lecture saisie utilisateur
    printf("Indiquez une lettre a rechercher:");
    scanf("%c", &saisie);

    //recherche
    for(int i=0; i<TAILLE; i++)
        if(lettres[i] == saisie) compteur++;

    // affichage du resultat
    if(compteur)
        printf("\tla lettre est presente %d fois", compteur);
    else
        printf("\tla lettre n'est pas presente");

    return 0;
}
