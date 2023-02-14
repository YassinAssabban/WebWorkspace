#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    //Constantes
    const int TAILLE_MAX_STRING = 100;

    //Variables
    char message[TAILLE_MAX_STRING+1];
    int taille_string = 0;

    // Lecture saisie utilisateur
    printf("Ecrire un message: ");
    if(fgets(message, TAILLE_MAX_STRING, stdin) == NULL)
        return -1;

    // Récupération de la taille de la chaine
    taille_string = strlen(message);

    // on retire le /n en fin de chaine
    taille_string--;
    message[taille_string] = '\0';

    // Affichage du miroire
    printf("\nEffet miroire:\n");
    printf("%s | ", message);
    for(int i=(taille_string-1); i>=0; i--)
        putchar(message[i]);

    putchar('\n');

    return 0;
}
