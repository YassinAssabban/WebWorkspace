#include <stdio.h>
#include <stdlib.h>

int puissance(int, int);


int main()
{
    printf("%d puissance %d = %d\n", 2, 3, puissance(2, 3));

    return 0;
}


int puissance(int nombre, int exposant)
{
    int resultat = 1;

    for(int i=0; i<exposant; i++)
        resultat *= nombre;

    return resultat;
}
