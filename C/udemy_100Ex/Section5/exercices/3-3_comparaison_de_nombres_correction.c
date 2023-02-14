#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nombre1, nombre2;

    // Lecture du gain de l'utilisateur
    printf("Donnez deux nombre\n");
    printf("\tNombre 1 = ");
    scanf("%d", &nombre1);
    printf("\tNombre 2 = ");
    scanf("%d", &nombre2);

    // Comparaison des nombres
    if(nombre1 == nombre2)
    {
        printf("Les nombres sont identiques\n");
    }
    else
    {
        printf("Les nombres sont differents\n");

        if(nombre1 > nombre2)
            printf("Le nombre 1 est superieur au nombre 2 de %d\n", nombre1-nombre2);
        else
            printf("Le nombre 1 est inferieur au nombre 2 de %d\n", nombre2-nombre1);
    }


    return 0;
}

