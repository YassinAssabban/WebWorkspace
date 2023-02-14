#include <stdio.h>
#include <stdlib.h>

#define TAILLE_STRING 100
#define TAILLE_PROMO 5
#define NOTE_MOYENNE 10.0

typedef struct ETUDIANT
{
    char nom[TAILLE_STRING];
    char prenom[TAILLE_STRING];
    float moyenne;
}Etudiant;

int main()
{
    //liste des étudiant dans la promo
    Etudiant promo[TAILLE_PROMO] =
    {
        { "Mercier", "Arnaud", 13.63},
        { "Leroux", "Thomas", 15.21},
        { "Pegard", "Laurie", 5.98},
        { "Minard", "Lydie", 12.56},
        { "Snow", "John", 9.56}
    };

    // Affichage des étudiants loreats de la promo
    printf("Liste des loreats:\n");

    for(int i=0; i<TAILLE_PROMO; i++)
    {
        Etudiant candidat = promo[i];
        if(candidat.moyenne >= NOTE_MOYENNE)
            printf("\t%s %s: %f\n", candidat.prenom, candidat.nom, candidat.moyenne);
    }

    return 0;
}
