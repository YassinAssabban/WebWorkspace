#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int nombre;

    printf("Donnez un nombre entier : ");
    scanf("%d", &nombre);

    if ((nombre%2) == 0)
    {
        printf("\t%d est un nombre pair\n", nombre);
    }
    else
    {
        printf("\t%d est un nombre impair\n", nombre);
    }
    

    return 0;
}
