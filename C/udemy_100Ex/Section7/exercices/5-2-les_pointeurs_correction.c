#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nombre = 0;
    int* p_nombre = &nombre;

    printf("Donnez un nombre entier:");
    scanf("%d", p_nombre);
    printf("la valeur %d est tockee a l'adresse %p", nombre, p_nombre);

    return 0;
}
