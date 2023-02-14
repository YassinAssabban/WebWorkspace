#include <stdio.h>
#include <stdlib.h>

void statistiques(int* tab, int taille, int* min, int* max, int* somme)
{
    // gestion des erreurs
    if(tab == NULL || min == NULL || max == NULL || somme == NULL)
    {
        printf("Pointeurs NULL!\n");
        return;
    }

    if(taille <= 0)
    {
        *min = 0;
        *max = 0;
        *somme = 0;

        return;
    }

    // on initialise avec la 1ere case
    *min = tab[0];
    *max = tab[0];
    *somme = tab[0];

    for(int i=1; i<taille; i++)
    {
        if(tab[i] > *max) *max = tab[i];
        if(tab[i] < *min) *min = tab[i];

        *somme += tab[i];
    }
}


int main()
{
    const int TAILLE = 5;
    int test[] = {12,8,1,6,2};
    int min, max, somme;

    statistiques(test, TAILLE, &min, &max, &somme);

    //affichage des statistiques
    printf("statistiques sur le tableau [ ");
    for(int i=0; i<TAILLE; i++)
        printf("%d,", test[i]);
    printf("]\n");

    printf("\tMin: %d\n", min);
    printf("\tMax: %d\n", max);
    printf("\tSomme: %d\n", somme);

    return 0;
}
