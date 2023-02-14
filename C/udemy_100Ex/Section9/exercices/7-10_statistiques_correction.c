#include <stdio.h>
#include <stdlib.h>

int main()
{
    // constantes
    const int TAILLE_MAX = 100;

    // variables
    char message[TAILLE_MAX+1];
    int nb_char = 0;
    int nb_mot = 0;
    int nouveau_mot = 1;

    // Lecture saisie utilisateur
    printf("Ecrire un message: ");
    if(fgets(message, TAILLE_MAX, stdin) == NULL)
        return -1;

    do
    {
        // recherche d'un espaces
        if(message[nb_char] == ' ')
        {
            nouveau_mot = 1;
        }
        else if(nouveau_mot)
        {
            nouveau_mot = 0;
            nb_mot++;
        }

        nb_char++;
    }while(message[nb_char] != '\0');

    // Affichage du resultat
    printf("\tNombre de caracteres: %d\n", nb_char);
    printf("\tNombre de mots: %d\n", nb_mot);

    return 0;
}
