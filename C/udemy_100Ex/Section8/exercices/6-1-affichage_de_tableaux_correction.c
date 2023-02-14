#include <stdio.h>
#include <stdlib.h>

int main()
{
    // Creation d’un tableau de 5 entier
    int tab[] = {1, 2, 3, 4, 5};

    // Affichage du tableau
    printf("Tableau: ");
    for(int i=0; i<5; i++)
        printf("%d ", tab[i]);

    // Affichage dans l’ordre inverse
    printf("\nInverse: ");
    for(int i=4; i>=0; i--)
        printf("%d ", tab[i]);

    return 0;
}
