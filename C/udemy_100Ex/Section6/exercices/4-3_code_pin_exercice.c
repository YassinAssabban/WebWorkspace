#include <stdio.h>
#include <stdlib.h>
#include <math.h>


int main(int argc, char const *argv[])
{
    const int CODE_PIN = 2255;

    int saisie;
    int nbr_tentative = 3;

    do
    {
        printf("Code PIN : ");
        scanf("%d", &saisie);

        if (saisie == CODE_PIN)
        {
            printf("\tTelephone deverrouille\n");
        }
        else
        {
            --nbr_tentative;
            printf("\tErreur, il vous reste %d tentatives \n", nbr_tentative);
        }

    } while ( (saisie != CODE_PIN) && (nbr_tentative > 0));

    return 0;
}
