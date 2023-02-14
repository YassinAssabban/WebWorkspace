#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char const *argv[])
{
    float nombre;

    printf("Donnez un nombre entier : ");
    scanf("%f", &nombre);

    if (nombre == round(nombre))
    {
        printf("\t%f est un nombre entier\n", nombre);
    }
    else
    {
        printf("\t%f n'est pas un nombre entier\n", nombre);
    }
    
    return 0;
}
