#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    char char_user;
    const int DECALAGE_MIN_MAX = 32;

    printf("Entrez une lettre en minuscule : ");
    scanf("%c", &char_user);

    printf("Cela donne en majuscule : %c\n", (char_user - DECALAGE_MIN_MAX));



    return 0;
}
