#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
    const int TAILLE = 7;
    const int VALEUR_MIN = 0, VALEUR_MAX = 9;

    int nombres[TAILLE];
    srand(time(NULL));

    //remplissage et affichage du tableau
    putchar('[');
    for(int i=0; i<TAILLE; i++)
    {
        nombres[i] = ((rand() % (VALEUR_MAX-VALEUR_MIN+1)) + VALEUR_MIN);
        printf("%d ", nombres[i]);
    }
    printf("]\n");

    //tri par selection
    for (int i=0; i < TAILLE - 1; i++)
    {
        int index_mini=i;
        int tmp = nombres[i];

        //recherche du mini dans la suite du tableau
        for(int j=i+1; j<TAILLE; j++)
             if(nombres[j] < nombres[index_mini]) index_mini=j;

        //inversion de la case courante avec la plus petite
        if(i != index_mini)
        {
            nombres[i] = nombres[index_mini];
            nombres[index_mini] = tmp;
        }
    }

    //affichage du resultat
    printf("Tri par selection:\n");
    putchar('[');
    for(int i=0; i<TAILLE; i++)
        printf("%d ", nombres[i]);
    putchar(']');


    return 0;
}
