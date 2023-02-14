#include <stdio.h>
#include <stdlib.h>

int main()
{
    //lecture taille matrice
    int taille=0;
    do
    {
      printf("Matrice unitaire de dimension [4-10]: ");
      scanf("%d", &taille);
    }while(taille < 4 || taille > 10);

    //allocation de la dimention 1 de la matrice (lignes)
    int**matrice_unitaire = (int**)malloc(taille * sizeof(int*));
    if(matrice_unitaire == NULL)
        return 1;

    //allocation de la dimention 2 de la matrice (colonnes)
    for(int i=0; i<taille; i++)
    {
        matrice_unitaire[i] = (int*)calloc(taille, sizeof(int));
        matrice_unitaire[i][i] = 1;
    }

    //Affichage de la matrice
    for(int i=0; i<taille; i++)
    {
        for(int j=0; j<taille; j++)
            printf("%d ", matrice_unitaire[i][j]);

        putchar('\n');
    }

    //Liberation memoire
    for(int i=0; i<taille; i++)
    {
        free(matrice_unitaire[i]);
    }
    free(matrice_unitaire);

    return 0;
}
