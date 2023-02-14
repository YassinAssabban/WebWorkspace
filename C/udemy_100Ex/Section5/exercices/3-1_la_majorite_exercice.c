#include <stdio.h>
#include <stdlib.h>

int main()
{
    int age;
    const int MAJORITE = 18;

    printf("Entrez votre age : ");
    scanf("%d", &age);

    if(age >= MAJORITE)
        printf("Vous etes majeur\n");
    else
        printf("Vous etes mineur\n");

    return 0;
}
