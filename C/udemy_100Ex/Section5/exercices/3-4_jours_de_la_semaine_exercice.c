#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int jour_user;

    printf("Donnez un numero de jour de la semaine : ");
    scanf("%d", &jour_user);

    printf("Cela correspond au ");
    switch (jour_user)
    {
    case 1:
        printf("Lundi");
        break;
    case 2:
        printf("Mardi");
        break;
    case 3:
        printf("Mercredi");
        break;
    case 4:
        printf("Jeudi");
        break;
    case 5:
        printf("Vendredi");
        break;
    case 6:
        printf("Samedi");
        break;
    case 7:
        printf("Dimanche");
        break;

    default:
        printf("Jour inconnu");
        break;
    }
    return 0;
}
