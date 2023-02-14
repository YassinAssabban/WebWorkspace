#include <stdio.h>
#include <stdlib.h>

int main()
{
    int numero_jour;

    // Lecture du numero de jour
    printf("Donnez un numero de jour de la semaine : ");
    scanf("%d", &numero_jour);

    // Affichage en toute lettre du jour
    printf("Cela correspond a ");
    switch(numero_jour)
    {
        case 1:
            printf("Lundi\n");
        break;

        case 2:
            printf("Mardi\n");
        break;

        case 3:
            printf("Mercredi\n");
        break;

        case 4:
            printf("Jeudi\n");
        break;

        case 5:
            printf("Vendredi\n");
        break;

        case 6:
            printf("Samedi\n");
        break;

        case 7:
            printf("Dimanche\n");
        break;

        default:
            printf("un jour inconnu\n");
        break;
    }
    printf("\n");


    return 0;
}

