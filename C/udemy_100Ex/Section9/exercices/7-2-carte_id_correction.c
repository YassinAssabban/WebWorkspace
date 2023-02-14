#include <stdio.h>
#include <stdlib.h>

int main()
{
    //declaration des variables
    const TAILLE_STRING = 100;

    char date[TAILLE_STRING];
    char nom[TAILLE_STRING];
    char prenom[TAILLE_STRING];
    char couleur[TAILLE_STRING];

    // Lecture informations utilisateur
    printf("Donnez les informations suivantes: \n");

    printf("\tDate de naissance: ");
    scanf("%s", date);

    printf("\tNom: ");
    scanf("%s", nom);

    printf("\tPrenom: ");
    scanf("%s", prenom);

    printf("\tCouleur des yeux: ");
    scanf("%s", couleur);

    // Affichage des informations
    printf("Vous vous appelez %s %s, vous etes nee le %s et vos yeux sont %s.", prenom, nom, date, couleur);

    return 0;
}
