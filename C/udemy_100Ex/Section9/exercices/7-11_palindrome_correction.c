#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    // variables
    char mot[100];
    int taille = 0;
    int palindrome = 1;

    // Lecture saisie utilisateur
    printf("Ecrire un mot: ");
    scanf("%s", mot);

    taille = strlen(mot);

    // test si le mot n'est pas un palindrome
    for(int i=0; i<taille; i++)
    {
        if(mot[i] != mot[taille-i-1])
        {
            palindrome = 0;
            break;
        }
    }

    // Affichage du resultat
    if(palindrome)
        printf("\tEst un palindrome");
    else
        printf("\tN'est pas un palindrome");


    return 0;
}
