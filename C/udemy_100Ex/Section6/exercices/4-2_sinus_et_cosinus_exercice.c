#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char const *argv[])
{
     int saisie;

    printf("Donnez un angle maximum en degres : ");
    scanf("%d", &saisie);

    for (int i = 0; i <= saisie; i++)
    {
       printf("\tcos(%d) = %f\n", i, cos(i));

       if (i%2 == 0)
       {
        printf("\tsin(%d) = %f\n", i, sin(i));
       }
    }
    return 0;
}
