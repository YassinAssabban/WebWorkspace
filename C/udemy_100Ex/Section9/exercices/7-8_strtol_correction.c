#include <stdio.h>
#include <stdlib.h>

int main()
{
    const int CHAR_TO_INT = '0';
    const float EURO_TO_DOLLAR = 1.11;
    //Variables
    char prix[100];
    int index = 0;
    int euros = 0;
    float dollars;

    // Lecture saisie utilisateur
    printf("Donnez un prix (nombre) en euro:  ");
    scanf("%s", prix);

    // conversion en entier de la saisie utilisateur
    while(prix[index] != '\0')
    {
        if(prix[index] >= '0'  && prix[index] <= '9')
        {
            int entier = prix[index] - CHAR_TO_INT;
            euros = euros * 10 + entier;
        }
        else
        {
            break;
        }

        index++;
    }

    // Conversion en dollar
    dollars = (float)euros * EURO_TO_DOLLAR;

    // Affichage du resultat
    printf("\t%d euros en dollar donne: %.2f", euros, dollars);

    return 0;
}
