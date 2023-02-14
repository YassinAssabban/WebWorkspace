#include <stdio.h>
#include <stdlib.h>

int main()
{
    //Constantes
    const int TAILLE_MAX = 100;
    const char codeur[] = "CODEUR";
    //Variables
    char mot[TAILLE_MAX+1];
    int index = 0;
    int resultat = 0;

    // Lecture saisie utilisateur
    printf("Ecrire un mot en majuscule: ");
    scanf("%s", mot);

    // Comparaison des deux chaines
    while(mot[index] != '\0' && codeur[index] != '\0')
    {
        if(mot[index] < codeur[index])
        {
            resultat = -1;
            break;
        }
        else if(mot[index] > codeur[index])
        {
            resultat = 1;
            break;
        }

        index++;
    }

    // Affichage du resultat
    printf("%s ", mot);
    if(resultat > 0)
        putchar('>');
    else if(resultat < 0)
        putchar('<');
    else
        putchar('=');
    printf(" %s", codeur);

    return 0;
}
