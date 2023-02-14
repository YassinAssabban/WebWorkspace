#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    const int CODE_PIN = 1234;

    int saisie;
    int nb_tentative = 3;

    do
    {
        // Lecture de la saisie utilisateur
        printf("Code PIN: ");
        scanf("%d", &saisie);

        // Verification de la saisie utilisateur
        if(saisie == CODE_PIN)
            printf("\tTelephone deverrouille");
        else
            printf("\tErreur, il vous reste %d tentatives \n", --nb_tentative);

    }while( (saisie != CODE_PIN) && (nb_tentative > 0) );

    return 0;
}
