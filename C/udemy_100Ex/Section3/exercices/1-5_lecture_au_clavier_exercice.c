#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int age;
    float size;
    char name, surname;

    printf("Donnez votre age et votre taille : ");
    scanf("%d %f", &age, &size);

    fflush(stdin);

    printf("Donnez vos initiales : ");
    scanf("%c%c", &name, &surname);

    printf("Vous avez %d ans et vous mesurez %.2f m\n", age, size);
    printf("Vos initiales sont %c.%c\n", name, surname);
}