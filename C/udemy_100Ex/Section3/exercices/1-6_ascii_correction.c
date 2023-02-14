#include <stdio.h>
#include <stdlib.h>


int main()
{
    // Declaration de variables
    char lettre = ' ';

    // Lecture au clavier de la lettre
    printf("Entrez une lettre: ");
    scanf("%c", &lettre);

    // Affichage des informations de la table ASCII
    printf("Vous avez entrez la lettre ASCII %c, soit:\n", lettre);
    printf("\t - %d en decimal\n", (int)lettre);
    printf("\t - %x en hexadecimal\n", (int)lettre);

    return 0;
}
