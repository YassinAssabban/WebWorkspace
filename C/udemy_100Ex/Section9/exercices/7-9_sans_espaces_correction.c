#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    // constantes
    const int TAILLE_MAX = 100;
    const int MIN_TO_MAJ = 'A' - 'a';

    // variables
    char message[TAILLE_MAX+1];
    int taille_message = 0;

    // Lecture saisie utilisateur
    printf("Ecrire un message: ");
    if(fgets(message, TAILLE_MAX, stdin) == NULL)
        return -1;

    // on retire le \n en fin de chaine
    taille_message = strlen(message) -1;
    message[taille_message] = '\0';

    for(int i=0; i<taille_message; i++)
    {
        // recherche des espaces
        if(message[i] == ' ')
        {
            //on copie la suite de la chaine a partir de la case courante
            strcpy(message+i, message+i+1);

            // si le prochain caractere est une lettre, c'est le debut d'un mot
            if(message[i] >= 'a' && message[i] <= 'z')
                message[i] += MIN_TO_MAJ;

            // on testera de nouveau cette case a la prochaine iteration
            i--;

	// la string fait un char de moins maintenant
taille_message--
        }
    }

    // Affichage du resultat
    printf("Sans espace cela donne: %s", message);

    return 0;
}
