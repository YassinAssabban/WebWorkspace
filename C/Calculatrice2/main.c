#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#define TAILLE_MAX 100
#include "projet.h"
#include "pile.c"
#include "calculateur.c"
/*******************************************************
*
*   Cours de Projet C
*   Calculatrice (version 1 seul fichier)
*   O.Legrand 01/2015
*
********************************************************/
// prototypes de fonctions


int main(void)
{
    char chaine[TAILLE_MAX];
    do
    {
        printf("\nCalcul a effectuer : ");
        scanf("%s", chaine);
        calculerResultat(chaine);
    }
    while (continuer());

    printf("\n\nFin du programme.");
    getchar();
    return 0;
}

int continuer(void)
{
    char reponse;
    do
    {
        printf("\nVoulez-vous recommencer ?");
        fflush(stdin);
        scanf("%c", &reponse);
        reponse = toupper(reponse);
    }
    while ( reponse!='O' && reponse!='N');
    return reponse=='O';
}



