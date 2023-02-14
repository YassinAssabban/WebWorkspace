#include <stdio.h>
#include <stdlib.h>
#include <math.h>


int main()
{
    float nombre = 0;

    // Lecture de la saisie utilisateur
    printf("Donnez une nombre: ");
    scanf("%f", &nombre);

    // Test si le nombre est entier ou non
    if( nombre == round(nombre) )
        printf("\test un nombre entier\n");
    else
        printf("\tn'est pas un nombre entier\n");

    return 0;
}
