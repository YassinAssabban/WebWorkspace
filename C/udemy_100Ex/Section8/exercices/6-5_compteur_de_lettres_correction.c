#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
    const int TAILLE = 1000;
    const int NB_LETTRES_ALPHABET = 26;
    const int VALEUR_MIN = 'A', VALEUR_MAX = 'Z';

    char lettres[TAILLE];

    //Creation du tableau de compteurs
    int alphabet[NB_LETTRES_ALPHABET];
    for(int i=0; i<NB_LETTRES_ALPHABET; i++)
        alphabet[i] = 0;

    // remplissage du tableau
    srand(time(NULL));
    for(int i=0; i<TAILLE; i++)
        lettres[i] = (char)((rand() % (VALEUR_MAX-VALEUR_MIN +1)) + VALEUR_MIN);

    //recherche
    for(int i=0; i<TAILLE; i++)
    {
       if(lettres[i] >= 'A' && lettres[i] <= 'Z')
       {
           int index = lettres[i] - VALEUR_MIN;
           alphabet[index]++;
       }
    }

    // Affichage du resultat
    printf("Nombre d'occurences: \n");
    for(int i=0; i<NB_LETTRES_ALPHABET; i++)
        printf("\t%c: %d\n", i+VALEUR_MIN, alphabet[i]);
    return 0;
}
