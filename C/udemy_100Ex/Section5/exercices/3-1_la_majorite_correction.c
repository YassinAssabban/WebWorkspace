#include <stdio.h>
#include <stdlib.h>

int main()
{
    int age;
    const int MAJORITE = 18;

    // Lecture de l'age de l'utilisateur
    printf("Quel est votre age? ");
    scanf("%d", &age);

    // Verification de l'age de l'utilisateur
    if(age >= MAJORITE)
        printf("Vous etes donc majeur\n");
    else
        printf("Vous etes donc mineur\n");

    return 0;
}
