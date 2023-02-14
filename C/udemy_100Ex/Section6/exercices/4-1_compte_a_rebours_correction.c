#include <stdio.h>
#include <stdlib.h>

int main()
{
    int saisie;

    // Lecture de la saisie utilisateur
    printf("Donnez un nombre entier pour le compte a rebours: ");
    scanf("%d", &saisie);

    // Affichage du compte à rebours
    for(int i=saisie; i > 0; i--)
        printf("\t%d\n", i);

    printf("\tBoom !\n");
    return 0;
}
