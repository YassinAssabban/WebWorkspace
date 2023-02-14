#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[]){

int nbr1, nbr2;

    printf("Entrez le premier nombre : ");
    scanf("%d", &nbr1);

    printf("Entrez le deuxieme nombre : ");
    scanf("%d", &nbr2);


    if (nbr1 == nbr2)
    {
        printf("Les nombres sont identiques\n");
    }
    else
    {
        printf("Les nombres sont differents\n");
        if (nbr1 < nbr2)
            printf("Le nombre 1 est plus petit au nombre 2 de : %d\n", nbr2-nbr1);
        else
        printf("Le nombre 1 est plus grand au nombre 2 de : %d\n", nbr1-nbr2);
    }


    return 0;
}
