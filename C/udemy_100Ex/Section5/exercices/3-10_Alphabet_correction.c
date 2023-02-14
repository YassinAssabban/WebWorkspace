#include <stdio.h>
#include <stdlib.h>

int main()
{
    char saisie;

    // Lecture de la saisie utilisateur
    printf("Donnez un caractère du tableau ASCII: ");
    scanf("%c", &saisie);

    // Affichage du type de la saisie
    if(saisie >= '0' && saisie <= '9')
        printf("\tC'est un chiffre\n");
    else if(saisie >= 'A' && saisie <= 'Z')
        printf("\tC'est une lettre majuscule\n");
    else if(saisie >= 'a' && saisie <= 'z')
        printf("\tC'est une lettre minuscule\n");
    else
        printf("\tC'est un caractere special\n");
    return 0;
}
