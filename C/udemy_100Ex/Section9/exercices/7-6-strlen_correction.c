#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Constantes
    const int TAILLE_MAX = 100;

    //Variables
    char message[TAILLE_MAX+1];
    int index = 0;

    // Lecture saisie utilisateur
    printf("Ecrire un message: ");
    if(fgets(message, TAILLE_MAX, stdin) == NULL)
        return -1;

    // Calcul de la taille de la chaine
    while(message[index] != '\0')
        index++;

    // Affichage du resultat
    printf("\ttaille de la string: %d", index);

    return 0;
}
