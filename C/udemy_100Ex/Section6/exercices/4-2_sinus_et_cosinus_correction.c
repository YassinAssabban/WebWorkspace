#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    int saisie;

    // Lecture de la saisie utilisateur
    printf("Donnez un angle maximum en degres: ");
    scanf("%d", &saisie);

    // Affichage du resultat
    for(int i=0; i <= saisie; i++)
    {
        printf("\tcos(%d) = %f\n", i, cos(i));

        if(i%2 == 0)
            printf("\tsin(%d) = %f\n", i, sin(i));
    }
    return 0;
}
