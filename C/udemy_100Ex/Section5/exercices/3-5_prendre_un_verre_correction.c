#include <stdio.h>
#include <stdlib.h>

int main()
{
    int choix;

    // Lecture du choix du client
    printf("Que voullez-vous boire?\n");
    printf("\t0: rien\n");
    printf("\t1: coca\n");
    printf("\t2: biere\n");
    printf("\t3: cafe\n");

    scanf("%d", &choix);

    // Affichage de la boisson
    switch(choix)
    {
        case 1:
            printf("Voici votre coca");
        break;

        case 2:
        {
            int age;
            printf("Quel age avez-vous? ");
            scanf("%d", &age);

            if(age >= 18)
                printf("Voici votre biere");
            else
                printf("Dsl, pas pour les mineurs...");
        }
        break;

        case 3:
            printf("Voici votre cafe");
        break;

        default:
            printf("A bientot");
        break;
    }

    return 0;
}
