#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Constantes
    const int TAILLE_STRING = 100;
    const int MINUSCULE_TO_MAGUSCULE = 'A' - 'a';

    //Variables
    char message[TAILLE_STRING+1];
    int index=0;

    // Lecture saisie utilisateur
    printf("Ecrire un message: ");
    if(fgets(message, TAILLE_STRING, stdin) == NULL)
        return -1;

    // Mise en majuscule de la chaine
    while(message[index] != '\0' && index < TAILLE_STRING)
    {
        //c'est une lettre minuscule
        if(message[index] >= 'a' && message[index] <= 'z')
        {
            // Decalage dans la table ASCII
            message[index] += MINUSCULE_TO_MAGUSCULE;
        }

        // Deplacement dans le tableau
        index++;
    }

    //Affichage resultat
    printf("Donne en majuscule: %s", message);

    return 0;
}
