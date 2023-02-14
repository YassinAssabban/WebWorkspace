#include <stdio.h>
#include <stdlib.h>

int modulo(int min, int max, int nombre)
{
    // On passeau repère 0-MAX
    const int MAX = (max-min+1);
    const int MIN = 0;

    int resultat = nombre - min;

    // On plafonne la valeur au MAX
    resultat = resultat % MAX;

    // Si la valeur est comprise entre 0 et -MAX, on la repasse dans le positif
    if(resultat < MIN )
        resultat += MAX;

    //On a une valeur entre 0 et MAX, changement de repère pour min-max
    resultat += min;

    return resultat;
}

int main()
{
    printf("%d modulo [%d - %d] = %d\n", 2, 0, 3, modulo(0, 3, 2));
    printf("%d modulo [%d - %d] = %d\n", -2, 0, 3, modulo(0, 3, -2));
    printf("%d modulo [%d - %d] = %d\n", 6, 0, 3, modulo(0, 3, 6));
    printf("%d modulo [%d - %d] = %d\n", -6, 0, 3, modulo(0, 3, -6));
    printf("%d modulo [%d - %d] = %d\n", 0, 0, 3, modulo(0, 3, 0));
    printf("%d modulo [%d - %d] = %d\n", 3, 0, 3, modulo(0, 3, 3));

    return 0;
}
