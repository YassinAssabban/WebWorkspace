#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int choix_user;

    printf("Que voulez-vous boire?\n");
    printf("\t0 | Rien\n");
    printf("\t1 | Coca\n");
    printf("\t2 | Biere\n");
    printf("\t3 | cafe\n");

    printf("Votre choix : ");
    scanf("%d", &choix_user);

    switch (choix_user)
    {

    case 1:
        printf("Voici votre coca, A bientot !\n");
        break;

    case 2:
        int age_user;
        printf("Entrez votre age : ");
        scanf("%d", &age_user);

        if (age_user >= 18)
        {
            printf("Voici votre biere, A bientot !\n");
        }
        else
        {
            printf("Desoler, ceci est interdit au mineurs\n");
        }

        break;

    case 3:
        printf("Voici votre cafe, A bientot !\n");
        break;

    default:
        printf("A bientot !\n");
        break;
    }
    return 0;
}
