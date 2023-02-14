#include <stdio.h>
#include <stdlib.h>


int main(int argc, char const *argv[])
{
    int saisie;

    printf("Quelle table de multiplication afficher ? : ");
    scanf("%d", &saisie);

    for (int i = 0; i <= 10; i++)
    {
        int saisieMultip = saisie * i;
        printf("%dx%d = %d\n", saisie, i, saisieMultip);
    }
    
    return 0;
}
