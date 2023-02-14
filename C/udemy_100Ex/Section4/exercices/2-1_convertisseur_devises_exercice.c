#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    const float TAUX_CHANGE = 1.20;
    float number_user, number_change;

    printf("Entrez un montant en Euro : ");
    scanf("%f", &number_user);

    number_change = number_user * TAUX_CHANGE;

    printf("Le taux de change Euro->Dollar est de %.2f\n", TAUX_CHANGE);
    printf("Vous avez donc %.2f Dollars\n", number_change);


    return 0;
}
