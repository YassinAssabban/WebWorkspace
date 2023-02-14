#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char const *argv[])
{
    int day, month, year;

    printf("Entrez une date dans le format (jj/mm/aaaa) : ");
    scanf("%d/%d/%d", &day, &month, &year);

    printf("%d ", day);

    switch (month)
    {
    case 1:
        printf("Janvier ");
        break;

    case 2:
        printf("Février ");
        break;

    case 3:
        printf("Mars ");
        break;

    case 4:
        printf("Avril ");
        break;

    case 5:
        printf("Mai ");
        break;

    case 6:
        printf("Juin ");
        break;

    case 7:
        printf("Juillet ");
        break;

    case 8:
        printf("Aout ");
        break;

    case 9:
        printf("Septembre ");
        break;

    case 10:
        printf("Octobre ");
        break;

    case 11:
        printf("Novembre ");
        break;

    case 12:
        printf("Decembre ");
        break;

    default:
        printf("?? ");
        break;
    }

    printf("%d\n", year);

    return 0;
}
