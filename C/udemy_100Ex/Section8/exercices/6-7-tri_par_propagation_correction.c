#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
    const int TAILLE = 7;
    const int VALEUR_MIN = 0, VALEUR_MAX = 9;

    int nombres[TAILLE];
    int tri_termine = 0;
    int nb_tri = 0;


    srand(time(NULL));

    //remplissage et affichage du tableau
    putchar('[');
    for(int i=0; i<TAILLE; i++)
    {
        nombres[i] = ((rand() % (VALEUR_MAX-VALEUR_MIN+1)) + VALEUR_MIN);
        printf("%d ", nombres[i]);
    }
    printf("]\n");

    // tri par propagation
    while(!tri_termine)
    {
        //on fait l'hypothese que le tableau est ordonne
        tri_termine = 1;

        //Verification du tri du tableau
        for(int i=0; i<TAILLE - nb_tri - 1; i++)
        {
            //des elements ne sont pas triés
            if(nombres[i] > nombres[i+1])
            {
                tri_termine = 0;

                int tmp = nombres[i];
                nombres[i] = nombres[i+1];
                nombres[i+1] = tmp;
            }
        }
        nb_tri++;
    }


    //affichage du resultat
    printf("Tri par propagation:\n");
    putchar('[');
    for(int i=0; i<TAILLE; i++)
        printf("%d ", nombres[i]);
    putchar(']');


    return 0;
}
