#include <stdio.h>
#include <stdlib.h>


int main()
{
    //allocation dynamique de la memoire
    int* age = (int*)malloc( sizeof(int) );

    //gestion erreurs
    if(age == NULL)
        return -1;

    //lecture de l'age
    printf("Quel est votre age? ");
    scanf("%d", age);

    // affichage
    printf("\tVous avez %d ans", *age);

    //Liberation de la memoire
    free(age);

    return 0;
}
