#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int var1, var2, var3;
    int somme = 0;
    float moyenne = 0.0;

    printf("Entrez 3 entiers separes par des espaces : ");
    scanf("%d %d %d", &var1, &var2, &var3);

    somme = var1 + var2 + var3;
    moyenne = somme/3.0;

    printf("\tSomme : %d\n", somme);
    printf("\tMoyenne : %f\n", moyenne);


    
    return 0;
}
