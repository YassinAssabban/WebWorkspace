#include <stdio.h>
#include <stdlib.h>

int main()
{
    int age=23;
    int* pointeur_age=&age;

    printf("Quel est votre age?");
    scanf("%d", pointeur_age);

    printf("Vous avez %d ans\n", age);

    return 0;
}
