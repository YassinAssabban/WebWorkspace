#include <stdio.h>
#include <stdlib.h>


int main()
{
    int nombre = 0;

    // Lecture de la saisie utilisateur
    printf("Donnez une nombre entier: ");
    scanf("%d", &nombre);

    // Test sur l'entier pour savoir si il est pair ou non
    if( (nombre%2) == 0)
        printf("\t%d est un nombre pair\n", nombre);
    else
        printf("\t%d est un nombre impair\n", nombre);

    return 0;
}
